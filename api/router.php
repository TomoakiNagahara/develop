<?php
/**
 * skeleton:/api/router.php
 *
 * @creation  2017-01-11
 * @version   1.0
 * @package   onepiece-framework.com
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $this App */
$_JSON['admin']['route'][] = __FILE__;

//	...
$route = Router::Get();
$path = './'.join('/',$route['args']);
if( strpos($path, '..') ){
	$_JSON['errors'][] = "Found double dot. ($path)";
	return;
}

if(!file_exists("{$path}.php") ){
	$_JSON['errors'][] = "Does not found file. ($path)";
	return;
}

//	...
chdir(dirname($path));

//	...
include(basename($path).'.php');

//	...
chdir(dirname(__FILE__));
