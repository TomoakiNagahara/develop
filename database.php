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
/* @var $db db */
$db = Unit::Factory('db');

//	Database connect.
$args = [];
$args['driver']		 = 'mysql';
$args['host']		 = 'localhost';
$args['database']	 = 'test';
$args['user']		 = 'test';
$args['password']	 = '';
$args['charset']	 = 'utf8';
d($db->Connect($args));

//	Quick select.
d($db->Quick(" test.t_test.id = 12 "));
d($db->Quick(" test.t_test.id > 12 "));
d($db->Quick(" test.t_test.id < 13 "));
d($db->Quick(" text <- test.t_test "));
