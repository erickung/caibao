<?php

require_once(Yii::getPathOfAlias('application.extensions.smarty').DS.'smarty/Smarty.class.php');
define('SMARTY_TMPL_DIR', Yii::getPathOfAlias('application.views'));
define('SMARTY_VIEW_DIR', Yii::getPathOfAlias('application.runtime'));

class CSmarty extends Smarty
{
	function __construct()
	{
		parent::__construct();
		$this->template_dir = SMARTY_TMPL_DIR;
		$this->compile_dir = SMARTY_VIEW_DIR.DS.'tpl_c';
		$this->cache_dir = SMARTY_VIEW_DIR.DS.'cache';
		$this->left_delimiter  =  '{';
		$this->right_delimiter =  '}';
	}

	function init(){
		Yii::registerAutoloader('smartyAutoload');
	}
}