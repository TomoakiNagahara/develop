<?php
/**
 * skeleton:/api/index.php
 *
 * @creation  2017-01-11
 * @version   1.0
 * @package   onepiece-framework.com
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $this App */

//	...
$_JSON = [];
$_JSON['status'] = true;
$_JSON['errors'] = null;
$_JSON['result'] = null;
$_JSON['admin']  = null;
$_JSON['admin']['route'][] = __FILE__;

//	...
$_request = Escape($_REQUEST);
$is_html  = ifset($_request['html']);
$mime     = $is_html ? 'text/html': 'text/json';

//	...
Env::Set(Env::_MIME_, $mime);
header("Content-type: $mime");

//	...
if(!$is_html){
	if(!$is_ob = ob_start()){
		Notice::Set("ob_start was failed.");
	}
}

//	...
include('router.php');

//	...
if( Env::isAdmin() ){
	//	...
	while( $notice = Notice::Get() ){
		$_JSON['admin']['notice'][] = $notice;
	}
}else{
	unset($_JSON['admin']);
}

//	...
if( ifset($is_ob) ){
	$content = ob_get_contents();
	ob_end_clean();
	if( isset($_JSON['admin']) ){
		$_JSON['admin']['content'] = $content;
	}
}

//	...
if( $is_html ){
	$app_root = rtrim( ConvertURL('app:/'), '/');
	printf('<script type="text/javascript" src="%s/js/op/core/import.js"></script>',   $app_root).PHP_EOL;
	printf('<link rel="stylesheet" type="text/css" href="%s/css/op/core/import.css">', $app_root).PHP_EOL;
	D($_JSON);
}else{
	print json_encode($_JSON);
}
