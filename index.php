<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	// 'db'	=>	array(
	// 	'host'	=>	'localhost',
	// 	'login'	=>	'root',
	// 	'password'	=>	'123456',
	// 	'database'	=>	'blog',
	// 	),
	'db'	=>	array(
		'driver'	=>	'mysqli',
		'host'	=>	'localhost',
		'login'	=>	'root',
		'password'	=>	'123456',
		'database'	=>	'blog',
		),
	'view'	=>	array(
		'enabled'	=>	TRUE,
		'config'	=>	array(
			'template_dir'	=>	APP_PATH.'/tpl',
			'compile_dir'	=>	APP_PATH.'/tmp',
			'cache_dir'	=>	APP_PATH.'/tmp',
			'left_delimiter'	=>	'{',
			'right_delimiter'	=>	'}',
			),
		),
);
require(SP_PATH."/SpeedPHP.php");
import(APP_PATH.'/include/functions.php');

spRun();