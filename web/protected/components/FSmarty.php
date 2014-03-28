<?php
require_once(Yii::getPathOfAlias('application.extensions.smarty').DS.'smarty/Smarty.class.php');
define('SMARTY_TMPL_DIR', Yii::getPathOfAlias('application.views'));

class FSmarty extends Smarty
{
	public function __construct()
	{
		parent::__construct();
		$this->config();
	}
	
	private function config()
	{
		$this->template_dir = SMARTY_TMPL_DIR;
		$this->compile_dir = RUNTIME_PATH . DS . 'tpl_c';
		$this->cache_dir = RUNTIME_PATH . DS . 'cache';
		$this->left_delimiter  =  '<%';
		$this->right_delimiter =  '%>';
	}
	
	public function var_init($inits)
	{
		if(empty($inits)) return false;
		
		foreach ($inits as $k => $v)
			$this->assign($k, $v);
	}

	function init(){
		Yii::registerAutoloader('smartyAutoload');
	}
	
	function register_taglib()
	{
		$this->reg_block('css');
	}
	
	function reg_block($tag)
	{
		$taglib = new TagLib;
		$taglib->tag = $tag;
		$this->register_block($taglib->tag, array($taglib, 'taglib_generater'));
	}
} 