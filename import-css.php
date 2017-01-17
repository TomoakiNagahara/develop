<?php
/**
 * develop:/import-js.php
 *
 * @creation  2017-01-17
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	OP_DIR
$op_dir = '/www/op/7/core/';
if(!file_exists($op_dir)){
	print "Does not found op dir. ($op_dir)";
	return;
}

//	Boot onepice-framework.
include($op_dir.'Bootstrap.php');

//	Setup error hendler.
include($_OP[OP_ROOT].'/error.php');

//	Corresponded to alias.
$_OP[APP_ROOT] = __DIR__.'/';

//	...
$mime = 'text/css';

//	...
Env::Set('mime',$mime);

//	...
header("Content-type: $mime");

//	...
$path = ConvertPath('op:/Template/Css/');
foreach( ['Base','Color','Dump','Mark','Notice'] as $file ){
	print file_get_contents("{$path}{$file}.css");
}
