<?php
//////////////////////////////////////////////////////////////////////////////////////////
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

class CMS
{
	static private $files;
	
	public static function addSession($k, $v)
	{
		return Yii::app()->session->add($k, $v);
		return Yii::app()->session->setTimeout(86400);
	}
	
	public static function getSession($k)
	{
		return Yii::app()->session->get($k);
	}
	
	public static function removeSession($k)
	{
		return Yii::app()->session->remove($k);
	}
	
	public static function loadFile($alias, $name='')
	{
		$file_name = Yii::getPathOfAlias($alias);
		if ($name) $file_name .= DS . $name;
		$file_name .= '.php';

		$key = self::getConfKey($file_name);
		if (isset(self::$files[$key]))
			return true;
		
		if (!file_exists($file_name))
			throw new CException("there is no file $file_name");
		return self::$files[$key] = require $file_name;
	}
	
	public static function loadFileConf($file)
	{
		return self::loadConf($file, true);
	}
	
	public static function loadConf($conf, $not_conf = false)
	{	
		static $config = null;
		$file = '';
		
		if ($not_conf)
			$file = $conf;
		else
			$file = self::getConfFile($conf);
		$key = self::getConfKey($file);
		
		if (isset($config[$key]))
			return $config[$key];
		
		return $config[$key] = require $file;
	}
	
	public static function getConfFile($conf)
	{
		return rtrim(APP_CONFIG, "/") . '/' . $conf . '.php';
	}
	
	public static function getConfKey($file)
	{
		return md5($file);
	}
	
	public static function convetARToList($ar_arr, array $tmpl)
	{
		$rnt = array();
		
		if (is_array($ar_arr))
		{
			foreach ($ar_arr as $i => $ar)
			{
				foreach ($tmpl as $k)
					$rnt[$i][$k] = isset($ar->{$k}) ? $ar->{$k} : '';
			}
		}
		elseif ($ar_arr instanceof ActiveRecordInterface)
		{
			return self::convetARToArray($ar, $tmpl);
		}
		
		return $rnt;
	}
	
 	public static function convetARToArray(ActiveRecordInterface $ar, array $tmpl = null)
	{
		$rnt = array();
	
		if (!$tmpl)
			return $ar->getAttributes();
		
		foreach ($tmpl as $k)
			$rnt[$k] = isset($ar->{$k}) ? $ar->{$k} : '';
	
		return $rnt;
	}
	
	public static function convertARToOptions(array $ar_arr, $key_id, $value_id)
	{
		if (empty($ar_arr)) return array();

		foreach ($ar_arr as $ar)
		{
			if (isset($ar->{$key_id}) && isset($ar->{$value_id}))
				$rnt[] = array($ar->{$key_id}, $ar->{$value_id});
		}
		
		return $rnt;
	}
	
	public static function log($msg)
	{
		Yii::log($msg, CLogger::LEVEL_INFO);
	}
	
	public static function warn($msg)
	{
		Yii::log($msg, CLogger::LEVEL_WARNING);
	}
	
	public static function error($msg)
	{
		Yii::log($msg, CLogger::LEVEL_ERROR);
	}
	
}