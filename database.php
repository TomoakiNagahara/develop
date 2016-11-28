<?php
/**
 * develop:/database.php
 *
 * @created   2016-11-28
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
Env::Set(Unit::_DIRECTORY_, '/www/op/7/unit/');
/* @var $db db */
$db = Unit::Factory('db');

//	Database connect.
$args = [];
$args[''] = '';

$args['driver']		 = 'mysql';
$args['host']		 = 'localhost';
$args['database']	 = 'test';
$args['user']		 = 'test';
$args['password']	 = '';
$args['charset']	 = 'utf8';
d($db->Connect($args));
d($db->GetDatabase());
d($db->GetTable($args['database']));