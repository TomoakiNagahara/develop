<?php
/**
 * develop:/fatal.php
 *
 * @created   2017-01-19
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

if(!Unit::Load('digit') ){
	d("Load to unit-digit was failed.");
	while( $notice = Notice::Get() ){
		d($notice);
	}
	return;
}

$temp = [];
$temp['current']['value'] = error_reporting();
$temp['current']['label'] = '';
d($temp);

return;

//	...
$obj = new Hoge();
$obj->Hoge();
