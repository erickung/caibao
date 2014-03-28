<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class BMSController extends CController implements CMSInterface
{
	public $smarty;
	private $css = array();
	
	public function beforeAction($action)
	{
		if ($action->getId() != 'ping' && $action->getId() != 'pingUpdate') exit();
		return true; 
	}
	
	public function __construct($id,$module=null)
	{
		parent::__construct($id, $module);
		$this->_get_Smarty_handle(Yii::app()->smarty);
		$this->_view_init();
	}
	
	public function render($view, $data = NULL, $return = false)
	{
		$html = $this->_get_main_content($view, $data);
		$this->assign('content', $html);
		$this->smarty->setTemplateDir($this->getMainViewPath());
		$this->smarty->display('layouts/main.htm');
	}
	
	protected function addCss($css)
	{
		array_push($this->css, $css);
	}
	
	protected function fetch($view, $data = NULL, $cache_id = NULL)
	{
		return $this->_get_main_content($view, $data);
	}
	
	public function getViewPath()
	{
		return parent::getViewPath() . DS . '..';
	}
	
	public function getMainViewPath()
	{
		return SMARTY_TMPL_DIR;
	}
	
	private function _get_main_content($view, $data = NULL)
	{
		if($data && !empty($data))
			$this->smarty->var_init($data);
		
		$this->assign('css_arr', $this->css);
		
		return $this->smarty->fetch($this->_get_view($view));
	}
	
	public function renderPartial($view,$data=null,$return=false,$processOutput=false)
	{
		$this->smarty->display($this->_get_view($view));
	}
	
	protected function assign($tpl_var, $value = null, $nocache = false)
	{ 
		return $this->smarty->assign($tpl_var, $value, $nocache);
	}

	private function _view_init()
	{
		$this->smarty->assign('controller', $this);
		$this->smarty->assign('layouts', $this->getViewPath() . DS . 'layouts');
		$views_inits = BMS::loadConf('view_init');
		$this->smarty->var_init($views_inits);
	}
	
	private function _get_view($view)
	{
		return $this->getId() . '/' . $view . '.htm';
	}
	
	private function _get_Smarty_handle(Smarty $smarty)
	{
		$this->smarty = $smarty;
		$this->smarty->setTemplateDir($this->getViewPath());
	}
}