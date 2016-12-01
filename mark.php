<?php
/**
 * develop:/mark.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$arr = [1, 2];
$arr[] = '3';
$arr['bool'] = true;
$arr['null'] = null;

//	...
$obj = new stdClass();
$obj->foo = 1;

//	...
D();
D(null);
D(true);
D(false);
D(1);
D(1.0);
D(1.1);
D(-1);
D(-1.0);
D(-1.1);
D("1");
D(" 日本語\tタブ\r\n改行\r\n改行 ");
D($obj);
D($arr);