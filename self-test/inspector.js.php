<?php
/**
 * develop:/self-test/self-test.js.php
 *
 * @created   2017-04-12
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	Boot onepice-framework.
include('../../core/Bootstrap.php');

//	Setup error hendler.
include($_OP[OP_ROOT].'/error.php');

//	Corresponded to alias.
$_OP[APP_ROOT] = __DIR__.'/';

//	Set charset.
header("Content-type: text/javascript; charset=utf-8");

//	Set unit directory.
Env::Set(Unit::_DIRECTORY_, '/www/op/7/unit/');

//	...
if(!Unit::Load('self-test')){
	Html::E('Could not load self-test unit.');
	return;
}

//	...
Inspector::Js();
