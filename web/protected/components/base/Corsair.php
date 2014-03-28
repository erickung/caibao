<?php
if (!defined('CORSAIR')) define('CORSAIR', POCKET_ROOT . '..' . DS . 'corsair' . DS . 'src' . DS);
require CORSAIR . 'config/init.php';
require_once LIBLOG . 'log_formatter.php';
require_once LIBLOG . 'log_info.php';
require_once LIBS . 'used_time.php';

class Corsair
{
	public static function getMongoSetting()
	{
		return CMS::loadFileConf(SETTING . 'setting_mongodb.php');
	}
	
	public static function getRedisCounter($type)
	{
		$config = array(
			CMSConsts::COUNT_VIDEO	=>	array(
					'redisClass'=>'redis_counter_video',
					'getIDFunc' => 'get_videoid_parent',
				),
			CMSConsts::COUNT_STAFF	=>	array(
					'redisClass'=>'redis_counter_media',
					'getIDFunc'=> 'get_staffid',
				),
			CMSConsts::COUNT_PIC	=>	array(
				'redisClass'=>'redis_counter_media',
				'getIDFunc'=> 'get_pictureid',
			),
			CMSConsts::COUNT_VIDEO_SPECIAL	=>	array(
				'redisClass'=>'redis_counter_video',
				'getIDFunc'=> 'get_sid',
			),
		);
		
		if (!isset($config[$type])) return false;
		
		require_once(REDIS.$config[$type]['redisClass'].PHP_SFX);
		return call_user_func(array($config[$type]['redisClass'], $config[$type]['getIDFunc']));
	}
	
	public static function callFunctions($method)
	{
		$params = func_get_args();
		array_shift($params);
		return self::callCorsair('functions', $method, $params);
	}
	
	public static function callConfig($method)
	{
		$params = func_get_args();
		array_shift($params);
		return self::callCorsair('config', $method, $params);
	}
	
	public static function callAssist($method)
	{
		$params = func_get_args();
		array_shift($params);
		return self::callCorsair('assist', $method, $params);
	}
	
	private static function callCorsair($class, $method, $params)
	{
		$rnt = null;
		try
		{
			$rnt = call_user_func_array(array($class, $method), $params);
		}
		catch (CException $e)
		{
			throw new CException($e->getMessage());
		}
		
		return $rnt;
	}
}