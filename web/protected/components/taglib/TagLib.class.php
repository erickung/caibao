<?php
class TagLib
{
	
	
	
	
	/*
	const CLASS_FORM = 'FormTagLib';
	const CLASS_HEADER = 'HeaderTagLib';
	
	function __construct()
	{
		$this->registerTags();
	}
	
	public $tag = '';
	
	private static $_conf = array();
	private static $_commit = array();
	
	private function registerTags()
	{
		self::$_conf = array(
			'input' => self::CLASS_FORM,
			'validate' => self::CLASS_FORM,
			'header' => self::CLASS_HEADER,
			'task_detail_nav' => self::CLASS_HEADER,
			'left_menu' => self::CLASS_HEADER,
			'check_opt_power' => self::CLASS_HEADER,
			'power' => self::CLASS_HEADER,
		);
	}
	
	public function set_tag($tag)
	{
		$this->tag = $tag;
	}
	
	public function taglib_generater($params, $content, &$smarty)
	{		
		if (!$this->tag) return false;
		if (!isset(self::$_conf[$this->tag])) return false;

		$class->content = $content;
		$class->params = $params;
		$class->smarty = $smarty;
		return $class->{$this->tag}();
	}
	*/
}