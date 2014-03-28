<?php
class CMSSmartyController
{
	private static $javascrpts = '';
	private static $jsfiles = array();
	private static $cssfiles = array();
	private $smarty;
	private $hander;
	
	function __construct(CMSController $controller)
	{
		$this->hander = $controller;
		$this->initSmarty();
	}
	
	public function initSmarty()
	{
		$this->smarty = $this->getSmarty(Yii::app()->smarty);
		$this->smarty->setTemplateDir($this->hander->getViewPath());
		$this->initView();
	}
	
	public function getSmarty(FSmarty $smarty = null)
	{
		if ($this->smarty instanceof FSmarty)
			return $this->smarty;
		
		return $smarty;
	}
	
	public function assignAssets()
	{
		$this->smarty->assign('scripts', "<script>" . self::$javascrpts . "</script>");
		$this->smarty->assign('css_arr', self::$cssfiles);
	}
	
	public static function addJavascript($scripts)
	{
		self::$javascrpts .= "\n$scripts";
	}
	
	public static function addJsFile($jsfile)
	{
		if (is_array($jsfile))
			array_merge(self::$jsfiles, $jsfile);
		else
			array_push(self::$jsfiles, $jsfile);
	}
	
	public static function getJavascript()
	{
		return self::$javascrpts;
	}
	
	public static function addCssFile($css)
	{
		if (is_array($css))
			array_merge(self::$cssfiles, $css);
		else
			array_push(self::$cssfiles, $css);
	}
	
	public function getMainContents($view, $data = NULL)
	{
		if($data && !empty($data))
			$this->smarty->var_init($data);
	
		return $this->smarty->fetch($this->getView($view));
	}
	
	public function getView($view)
	{
		return strpos($view, "/") ? $view . '.htm' : $this->hander->getId() . '/' . $view . '.htm';
	}

	public function getMainViewPath()
	{
		return SMARTY_TMPL_DIR;
	}

	private function initView()
	{
		$this->smarty->assign('controller', $this);
		$this->smarty->assign('layouts', $this->hander->getViewPath() . DS . 'layouts');
		$views_inits = CMS::loadConf('view_init');
		$this->smarty->var_init($views_inits);
	}     
}