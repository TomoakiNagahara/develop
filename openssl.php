<?php
/**
 * develop:/openssl.php
 *
 * @created   2017-03-15
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
if(!function_exists('openssl_encrypt')){
	Html::E("Does not enable openssl.");
	return;
}

//	...
$iv       = "1234567890123456";
$password = '1234567890123456';
$method   = 'aes-256-cbc';
$option   = 0;

//	...
$request = Http::Request();
if( $str = ifset($request['text']) ){
	$enc = openssl_encrypt($str, $method, $password, $option, $iv);
	$dec = openssl_decrypt($enc, $method, $password, $option, $iv);

	//	...
	$arg = [];
	$arg['io']  = $str === $dec ? true: false;
	$arg['str'] = $str;
	$arg['enc'] = $enc;
	$arg['dec'] = $dec;
	d($arg);
}

/** Use to command line decrypt.
 *
 * @see http://qiita.com/zaburo/items/ffb7728cb9a9efe907d9
 */
function strtohex($x)
{
	$s = '';
	foreach( str_split($x) as $c ){
		$s .= sprintf("%02X", ord($c));
	}
	return $s;
}
?>
<form method="post" action="./?file=openssl">
	<textarea name="text" style="width: 90vw; height: 50vh;"><?= $str ?></textarea><br/>
	<button> Submit </button>
</form>