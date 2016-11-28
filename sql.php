<?php
/**
 * develop:/sql.php
 *
 * @created   2016-11-29
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
Env::Set(Unit::_DIRECTORY_, '/www/op/7/unit/');

/* @var $db db */
$db = Unit::Factory('db');
$args['driver']		 = 'mysql';
$args['host']		 = 'localhost';
$args['database']	 = 'test';
$args['user']		 = 'test';
$args['password']	 = '';
$args['charset']	 = 'utf8';
d($db->Connect($args));

/* @var $sql sql */
if( $sql = Unit::Factory('sql') ){
	$sql->SetDatabase($db);
	$args = [];
	$args['table']	 = 't_test';
	$args['column']	 = 'id, text, timestamp';
	$qu = $sql->Select($args, $db);
	d($qu);
	$records = $db->Query($qu);
	d($records);
}