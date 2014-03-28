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

class Request
{
	public static function processGet()
	{
		if (!isset($_GET['dir'])) $_GET['dir'] = 'desc';
		if (!isset($_GET['limit'])) $_GET['limit'] = '20';
		if (!isset($_GET['start'])) $_GET['start'] = '0';
	}
	
	public static function processPost()
	{
		$post = @file_get_contents("php://input");
		$post = json_decode($post, true);
		if ($post && !empty($post) && isset($post['data']))
			$_POST = array_merge($_POST, $post['data']);
	}
	
	public static function getFilter($name = null)
	{
		if (!isset($_GET['filter']))
		{
			if ($name) return null;
			return array();
		}
		
		static $rnt = array();
		if (!empty($rnt))
		{
			if ($name) return isset($rnt[$name]) ? $rnt[$name] : null;
			return $rnt;
		}

		$filters = json_decode(get_magic_quotes_gpc() ? stripslashes($_GET['filter']) : $_GET['filter'], true);
		foreach ($filters as $filter)
			if ($filter['value'] !== '') $rnt[$filter['property']] = $filter['value'];
		
		if ($name) return isset($rnt[$name]) ? $rnt[$name] : null;
		return $rnt;
	}
}