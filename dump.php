<?php
/**
 * develop:/dump.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$arr = array(0, 1, 0.1, -1, "1", true, false, null);
$arr[] = ' white space ';
$arr[] = ' tab	space ';
$arr[] = " line \r \n break";
$ass = array("key"=>"value");
$obj   = new stdClass();
$obj->key = 'value';
$obj->obj = new stdClass();
$obj->obj->key = 'value';

//	...
$os['apple'][] = 'iOS';
$os['apple'][] = 'tvOS';
$os['apple'][] = 'macOS';
$os['microsoft'][] = 'MS-DOS';
$os['microsoft'][] = 'Windows';
$os['google'][] = 'Android';
$arr['OS'] = $os;

//	...
D([1,null]);
D($arr);
D($ass);
D($obj);
