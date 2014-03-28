<?php
/**
 * //////////////////////////////////////////////////////////////////////////////////////////
// Author: 孔繁兴
// Copyright 2005-, Funshion Online Technologies Ltd. All Rights Reserved
// 版权 2005-，北京风行在线技术有限公司 所有版权保护
// This is UNPUBLISHED PROPRIETARY SOURCE CODE of Funshion Online Technologies Ltd.;
// the contents of this file may not be disclosed to third parties, copied or
// duplicated in any form, in whole or in part, without the prior written
// permission of Funshion Online Technologies Ltd.
// 这是北京风行在线技术有限公司未公开的私有源代码。本文件及相关内容未经风行在线技术有
// 限公司事先书面同意，不允许向任何第三方透露，泄密部分或全部; 也不允许任何形式的私自备份.
//////////////////////////////////////////////////////////////////////////////////////////
 *
 * cms控制器基础类，所有控制器都需要继承CMSController
 *
 */
class CMSController extends CController implements CMSInterface
{
	public $smarty;
	public $login = true;
	public $module_id;
	private $s_handle;
	private $view_path;

	public function __construct($id,$module=null)
	{
		parent::__construct($id, $module);
		$this->init();
	}
	
	protected function beforeAction($action)
	{
		
		if ($this->getId() == 'site' && in_array($this->getAction()->getId(), array('login', 'index', 'upload')))
			return true;

		Yii::import('application.modules.admin.ar.*');
		if (!WebUser::Instance()->auth())
			$this->redirect('/', true, 'login');
		
		if (!WebUser::Instance()->checkPower($this))
			$this->redirect("/", true, 'purview');

		if (Yii::app()->request->getIsPostRequest())
			Request::processPost();
		else
			Request::processGet();
		
		return true;
	}

	protected function afterAction($action)
	{
		OperateLogServ::Instance()->setModuleId($this->module_id)->saveLog();
	}

	public function redirect($url,$terminate=true,$statusCode=302)
	{
		if (Yii::app()->request->isAjaxRequest)
		{
			echo json_encode(array('success' => false,'error' => $statusCode));
			if($terminate)	Yii::app()->end();
		}
		else
		{
			parent::redirect($url,$terminate);
		}
	}

	protected function dbCommand($sql)
	{
		$connection=Yii::app()->db;
		return $connection->createCommand($sql);
	}

	protected function saddslashes($string, $focus = false) {
		$magic_quote = get_magic_quotes_gpc();
		if (is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = $this -> saddslashes($val, $focus);
			} 
			return $string;
		} else {
			if ($focus == false) {
				return $magic_quote ? $string : addslashes($string);
			} else {
				return addslashes($string);
			} 
		} 
	} 

	protected function querySort(array $all_sort = array(), $default_sort)
	{
		return in_array($this->sort, $all_sort) ?  $this->sort : $default_sort;
	}
	
	public function render($view, $data = NULL, $return = false)
	{
		$html = $this->s_handle->getMainContents($view, $data);
		$this->assign('content', $html);
		$this->smarty->setTemplateDir($this->s_handle->getMainViewPath());
		$this->s_handle->assignAssets();
		$this->smarty->display('layouts/main.htm');
	}
	
	public function renderPartial($view,$data=null,$return=false,$processOutput=false)
	{
		$this->smarty->display($this->s_handle->getView($view));
	}
	
	public function renderJS($view, $cache_id=null)
	{
		$this->fetchJS($view, true);
	}
	
	public function fetchJS($view, $display=false, $cache_id=null, $compile_id=null, $parent=null)
	{
		$view = $view . '.js';
		return	$this->smarty->fetch($view, $cache_id, $compile_id, $parent, $display);
	}
	
	protected function assign($tpl_var, $value = null, $nocache = false)
	{
		return $this->smarty->assign($tpl_var, $value, $nocache);
	}
	
	protected function fetch($view, $data = NULL, $cache_id = NULL)
	{
		return $this->s_handle->getMainContents($view, $data);
	}
	
	public function getViewPath()
	{
		return ($this->view_path) ? $this->view_path : parent::getViewPath() . DS . '..';
	}
	
	public function setViewPath($path)
	{
		$this->view_path = $path;
		$this->smarty->setTemplateDir($path);
	}

	public function init()
	{
		$this->page = max(1, intval(isset($_GET['page']) ? $_GET['page'] : 1));
		$this->limit = max(1, intval(isset($_GET['limit']) ? $_GET['limit'] : 20));
		$this->offset = ($this->page - 1) * $this->limit;
		$this->dir = isset($_GET['dir']) ? strtolower(trim($_GET['dir'])) : 'desc';
		if(!in_array($this->dir, array('asc', 'desc'))) $this->dir = 'desc';
		$this->sort = isset($_GET['sort']) ? trim($_GET['sort']) : '';
		$this->filter = Request::getFilter();
		
		$this->s_handle = new CMSSmartyController($this);
		$this->smarty = $this->s_handle->getSmarty();
	}

	protected $limit = 20;
	protected $page = 1;
	protected $offset = 0;
	protected $dir = 'desc';
	protected $filter = array();
	protected $sort = '';
}