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
$arr = [1, 1.0];
$arr[] = '3';
$arr['bool'] = true;
$arr['null'] = null;

//	...
$obj = new stdClass();
$obj->foo = 1;
$obj->bar = '1';
$obj->obj = new stdClass();
$obj->obj->hoge = true;

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
D('<h1>XSS');
D($obj);
D($arr);
D(null, true, false, 100, 0.1, -1, -0.1, 'string 文字列');
