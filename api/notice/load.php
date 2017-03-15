<?php
/**
 * skeleton:/api/notice/load.php
 *
 * @creation  2017-01-11
 * @version   1.0
 * @package   onepiece-framework.com
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $this App */
$_JSON['admin']['route'][] = __FILE__;

//	...
if(!Env::isAdmin()){
	return;
}

//	...
$_JSON['result'] = [];
while( $notice = Notice::Get() ){
	$_JSON['result'][] = $notice;
}
