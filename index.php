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

//	file list.
$file_list = ['phpinfo','mark','dump','path','notice','onepiece','time','session','template','layout','database','sql','japan'];

//	Dispatch.
include('index.phtml');
