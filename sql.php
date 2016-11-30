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
if(!$db = Unit::Factory('db')){
	return;
}
$args['driver']		 = 'mysql';
$args['host']		 = 'localhost';
$args['database']	 = 'test';
$args['user']		 = 'test';
$args['password']	 = '';
$args['charset']	 = 'utf8';
if(!$db->Connect($args) ){
	Notice::Set("Database connection was failed.");
	return;
}

/* @var $sql sql */
if(!$sql = Unit::Factory('sql') ){
	return;
}

//	database
$sql->SetDatabase($db);

//	insert
if( $text = ifset($_GET["text"]) ){
	$args = [];
	$args['table'] = 't_test';
	$args['set']['text'] = $text;
	if( $qu = $sql->Insert($args) ){
		$id = $db->Query($qu);
		d($qu);
		d($id);
	}
}

//	select
$args = [];
$args['table'] = 't_test';
$args['limit'] = 10;
//$args['column']	 = 'id, text';
$args['where']['id']['eva']   = '>=';
$args['where']['id']['value'] = '1';
if( $qu = $sql->Select($args) ){
	$records = $db->Query($qu);
	d($qu);
	d($records);
}