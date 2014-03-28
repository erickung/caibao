<?php
/**
 * //////////////////////////////////////////////////////////////////////////////////////////
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
 *
 * cms系统mongo的active record基础类
 *
 *
 */
abstract class CMSMongoActiveRecord extends EMongoDocument implements ActiveRecordInterface, ActiveRecordAppInterface
{
	/** 数据强制类型转换 **/
	const INTVAL = 'intval';
	const TO_TIME = 'strtotime';
	const MODIFY_TIME_FIELD = 'modifydate';
	
	private static $_mongo_settings; 
	private static $_mongo_connection;
	
	/**
	 * 用于查询时做强制类型装换
	 * @return array:
	 */
	public function rule()
	{
		return array();
	}
	
	/**
	 * 用于保存时做强制类型装换
	 * @return array:
	 */
	public function saveRule()
	{
		return array();
	}
	
	/**
	 * 用于展现的时候做类型转换的
	 * @return array:
	 */
	public function displays()
	{
		return array();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ActiveRecordInterface::noLogFields()
	 */
	public function noLogFields()
	{
		return array('_id', 'modifydate');
	}
	
	
	public function defaultValue()
	{
		return array();
	}
	
	public function behaviors()
	{
		return array(
				'application.components.behaviors.UpdateMongoBehavior',
		);
	}

	public function getMongoDBComponent()
	{		
	
		if (self::$_mongo_settings === null) self::$_mongo_settings = Corsair::getMongoSetting();
		if (!isset(self::$_mongo_settings[$this->getCollectionName()]))
			return ;
		
		$server = self::$_mongo_settings[$this->getCollectionName()]['servers'][0];
		$mongo_dns = "mongodb://{$server['host']}:{$server['port']}";
		$key = md5($mongo_dns);
		if (!isset(self::$_mongo_connection[$key]))
		{
			self::$_mongo_connection[$key] = new EMongoDB();
			self::$_mongo_connection[$key]->connectionString = $mongo_dns;
			self::$_mongo_connection[$key]->dbName = self::$_mongo_settings[$this->getCollectionName()]['dbname'];
			self::$_mongo_connection[$key]->fsyncFlag = true;
			self::$_mongo_connection[$key]->safeFlag = true;
		}
		
		return self::$_emongoDb = self::$_mongo_connection[$key];
	}
	
	public function init()
	{
		self::$_mongo_settings = Corsair::getMongoSetting();
		parent::init();
	}
	
	public function findByPk($pk, $criteria=null)
	{
		$data = parent::findByPk($pk, $criteria);
		if(!$data)
		{
			if (is_int($pk))
				$data = parent::findByPk(strval($pk));
			elseif (is_string($pk))
				$data = parent::findByPk(intval($pk));
		}

		return $data;
	}
	
	public function deleteByPk($pk, $criteria=null)
	{
		OperateLogServ::Instance()->setIsDel();
		parent::deleteByPk($pk, $criteria);
		if ($this->findByPk($pk)) 
		{
			if (is_int($pk))
				$data = parent::deleteByPk(strval($pk));
			elseif (is_string($pk))
				$data = parent::deleteByPk(intval($pk));
		}
		return true;
	}
	
	public function getErrors($attribute = NULL)
	{
		$errors = parent::getErrors();
		$msg = '';
		foreach ($errors as $attr => $err)
		{
			if (isset($this->{$attr}))
				$msg .= $err[0] . ' ';
		}
		return $msg;
	}
	
	public function saveCommit($action)
	{
		if (!method_exists($this, $action))
			throw new CException("the " . get_class($this) . "has no method {$action}");
	
		$args = func_get_args();
		array_shift($args);
	
		if ($this->getIsNewRecord()) OperateLogServ::Instance()->setIsAdd();
		try
		{
			call_user_func_array(array($this, $action), $args);
		}
		catch (CDbException $e)
		{
			return false;
		}
	
		$ar = $this->findByPk($this->getPrimaryKey());
		OperateLogServ::Instance()->addLogAfterCommit($ar);
		return true;
	}
	
	public function save($runValidation=true,$attributes=null)
	{
		$save_rules = $this->saveRule();
		foreach ($save_rules as $key => $rule)
		{
			if (is_array($rule) && isset($rule[1]) && $rule[1] === 1 && function_exists($rule[0]))
				$this->{$key} = call_user_func($rule[0], $this->{$key});
		}
		
		if ($this->getIsNewRecord())
		{
			$this->_id = $this->getPrimaryKey();
			$this->setDefaults();
		}
		return parent::save($runValidation=true,$attributes=null);
	}
	
	public function modifyByPk()
	{
		try
		{
			OperateLogServ::Instance()->setModify();
			$ar = $this->findByPk(intval($this->getPrimaryKey()));
			if (is_null($ar) || !$ar instanceof EMongoEmbeddedDocument)
				return false;
				
			OperateLogServ::Instance()->addLogBeforeCommit($ar);
			
			$this->copyAttributesFromAR($this, $ar);
			return $ar->save();
		}
		catch(Exception $e)
		{
			return false;
		}
	}
	
	public function copyAttributesFromAR($ar_from, $ar_to)
	{
		ActiveRecordServ::Instance($this)->copyAttributesFromAR($ar_from, $ar_to);
	}
	
	public function copyAttributesFromArray($arr_from, $ar_to)
	{
		ActiveRecordServ::Instance($this)->copyAttributesFromArray($arr_from, $ar_to);
	}
	
	public function setAttributesFromRequest(array $res)
	{
		$this->copyAttributesFromArray($res, $this);
	}
	
	public function setAttribute($name,$value)
	{
		if(property_exists($this,$name))
			$this->$name=$value;
		elseif(isset($this->getMetaData()->columns[$name]))
			$this->_attributes[$name]=$value;
		else
			return false;
		return true;
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ActiveRecordAppInterface::getCondition()
	 */
	public function getCondition(array $custom_cond = array(), array $reset_key = array())
	{
		return ActiveRecordServ::Instance($this)->getCondition($custom_cond, $reset_key);
	}
	
	public function isTableFiled($name)
	{
		$fields = $this->attributeLabels();
		return isset($fields[$name]);
	}
	
	private function setDefaults()
	{
		$defaults = $this->defaultValue();
		if (!empty($defaults))
		{
			foreach ($defaults as $k => $v)
			{
				if (is_null($this->{$k}))
					$this->{$k} = $v;
			}
		}
	}
}