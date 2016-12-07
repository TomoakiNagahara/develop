<?php
/**
 * develop:/sql/index.php
 *
 * @created   2016-12-07
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
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
include('./menu.phtml');

return;

//	...
$id		 = ifset($_GET['id'], 1);
$text	 = ifset($_GET["text"]);
$number	 = ifset($_GET["number"]);
$where	 = ifset($_GET["where"], 'id');
$evalu	 = ifset($_GET["evalu"], '=');
$value	 = ifset($_GET["value"]);
$limit	 = ifset($_GET["limit"], 10);
$offset	 = ifset($_GET["offset"]);
$delete	 = ifset($_GET["delete"]);

//	show databases.
$qu = $sql->Show([]);
$io = $db->Query($qu);
d($io);

//	show tables.
$qu = $sql->Show(['database'=>'test']);
$io = $db->Query($qu);
d($io);

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
	$args['limit'] = $limit;
	$args['set']['text'] = $text;
	$args['where'][$where]['value'] = $id;
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
	$args['limit'] = $limit;
	$args['where'][$where]['value'] = $id;
	if( $qu = $sql->Delete($args) ){
		$io = $db->Query($qu);
		d($qu);
		d($io);
	}
}

//	select
$args = [];
$args['table']  = 't_test';
$args['limit']  = $limit;
$args['offset'] = $offset;
$args['column'] = ifset($_GET['column']);
$args['where'][$where]['evalu'] = $evalu;
$args['where'][$where]['value'] = $id;
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