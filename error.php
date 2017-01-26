<?php
/**
 * develop:/error.php
 *
 * @created   2017-01-19
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
if(!Unit::Load('digit') ){
	d("Load to unit-digit was failed.");
	return;
}

//	...
$temp = [];
$temp['ERROR']['E_ALL']['value'] = E_ALL;
$temp['ERROR']['E_ALL']['label'] = Digit::toBinary(E_ALL, 16);
$temp['current']['value'] = error_reporting();
$temp['current']['label'] = Digit::toBinary(error_reporting(), 16);
