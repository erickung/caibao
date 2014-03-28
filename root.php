<?php
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if (!defined('_ROOT_')) define('_ROOT_', dirname(__FILE__) . DS);
define('KEY_MANAGE', _ROOT_ . 'key_manage' . DS);
define('PRODUCER', _ROOT_ . 'producer' . DS);
define('CUSTOMER', _ROOT_ . 'customer' . DS);
define('RUNTIME_PATH', _ROOT_ . 'runtime' . DS);
define('LIBS', _ROOT_ . 'libs' . DS);
define('CACHE', RUNTIME_PATH . 'cache' . DS);

if (file_exists(RUNTIME_PATH . 'runtime.php'))
	require RUNTIME_PATH . 'runtime.php';
else
	exit("No runtime.php\n");

define('FRAMEWORK_BASE', _ROOT_ . 'framework' . FRAMEWORK_VERSION . DS . 'yii.php');