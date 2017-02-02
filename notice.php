<?php
/**
 * develop:/notice.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
D("<h1>?");
D(Time::Datetime());
Notice::Set("1st message.");
Notice::Set("<h1>2nd message.");
D(Notice::Get());

//	...
$arr = [true, null];
$obj = new stdClass();
$obj->xss = "<h1>xss";
$obj->num = 12.5;
$obj->bool = true;
$obj->null = null;
hoge(null, true, false, 1.0, 'hoge', $arr, $obj);

function hoge($null, $true, $false, $num, $str, $arr, $obj){
	Notice::Set("3rd message.");
}
