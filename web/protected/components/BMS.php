<?php
class BMS
{
	private static $config = array();
	
	public static function loadConf($conf)
	{
		$file = self::getFile($conf);
		$key = self::getConfKey($file);
		
		if (isset(self::$config[$key]))
			return self::$config[$key];
		
		return self::$config[$key] = require $file;
	}
	
	public static function getFile($conf)
	{
		return rtrim(APP_CONFIG, "/") . '/' . $conf . '.php';
	}
	
	public static function getConfKey($file)
	{
		return md5($file);
	}
	
	public static function convetARToArray(array $ar_arr, array $tmpl)
	{
		$rnt = array();
		
		foreach ($ar_arr as $i => $ar)
		{
			foreach ($tmpl as $k)
				$rnt[$i][$k] = isset($ar->{$k}) ? $ar->{$k} : '';
		}
		
		return $rnt;
	}
	
}