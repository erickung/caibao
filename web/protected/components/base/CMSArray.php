<?php
class CMSArray
{
	public static function getValue(array $arr, $k)
	{
		return isset($arr[$k]) ? $arr[$k] : '';
	}
	
	public static function array_callback_intval(array &$arr)
	{
		array_walk($arr, array('CMSArray', 'interval'));
	}
	
	public static function interval(&$v)
	{
		$v = intval($v); 
	}
	
	public static function getArrayKeys(array $arr, $key)
	{
		$rnt = array();
		foreach ($arr as $a)
		{
			if(isset($a[$key])) $rnt[] = $a[$key];
		}
		
		return $rnt;
	}
	
	public static function getArrayKeyVal(array $arr, $key, $val)
	{
		$rnt = array();
		foreach ($arr as $a)
		{
			if(isset($a[$key]) && isset($a[$val])) $rnt[$a[$key]] = $a[$val];
		}
		
		return $rnt;
	}
	
	public static function getArrayKeyValByARs(array $arr, $key, $val)
	{
		$rnt = array();
		foreach ($arr as $ar)
		{
			if($ar->isTableFiled($key) && $ar->isTableFiled($val)) 
				$rnt[$ar->{$key}] = $ar->{$val};
		}
	
		return $rnt;
	}
	
}