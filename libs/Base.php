<?php
class Base 
{
	private static $requires = array();
	
	static function fileRequire($file)
	{
		if (!is_file($file)) return false;
		 
		if (!isset(self::$requires[$file])) 
		{
			require $file;
			self::$requires[$file] = 1;
		}
		
		return true;
	} 
}