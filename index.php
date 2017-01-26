<?php
/**
 * develop:/index.php
 *
 * @created   2016-06-09
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	Boot onepice-framework.
include('../core/Bootstrap.php');

//	Setup error hendler.
include($_OP[OP_ROOT].'/error.php');

//	Corresponded to alias.
$_OP[APP_ROOT] = __DIR__.'/';

//	Set charset.
header("Content-type: text/html; charset=utf-8");

//	Set unit directory.
Env::Set(Unit::_DIRECTORY_, '/www/op/7/unit/');

//	Dispatch.
include('index.phtml');

//	...
while( $notice = Notice::Get() ){
	d($notice);
}
