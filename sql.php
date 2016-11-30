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

//	...
$id		 = ifset($_GET['id']);
$text	 = ifset($_GET["text"]);
$delete	 = ifset($_GET["delete"]);

//	insert
if( $id === null and $text ){
	$args = [];
	$args['table'] = 't_test';
	$args['set']['text'] = $text;
	if( $qu = $sql->Insert($args) ){
		$id = $db->Query($qu);
		d($qu);
		d($id);
	}
}

//	update
if( $id and $text ){
	$args = [];
	$args['table'] = 't_test';
	$args['limit'] = 1;
	$args['set']['text'] = $text;
	$args['where']['id']['value'] = $id;
	if( $qu = $sql->Update($args) ){
		$io = $db->Query($qu);
		d($qu);
		d($io);
	}
}

//	delete
if( $id and $delete ){
	$args = [];
	$args['table'] = 't_test';
	$args['limit'] = 1;
	$args['where']['id']['value'] = $id;
	if( $qu = $sql->Delete($args) ){
		$io = $db->Query($qu);
		d($qu);
		d($io);
	}
}

//	select
$args = [];
$args['table'] = 't_test';
$args['limit'] = 10;
$args['offset'] = 0;
$args['column'] = ifset($_GET['column']);
$args['where']['id']['evalu'] = '>=';
$args['where']['id']['value'] = $id;
if( $qu = $sql->Select($args) ){
	$records = $db->Query($qu);
	d($qu);
	d($records);
}

//	count
if( $qu = $sql->Count($args) ){
	$records = $db->Query($qu, 'count');
	d($qu);
	d($records);
}
