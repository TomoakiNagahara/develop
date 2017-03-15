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
d( function_exists('openssl_encrypt') );

//	...
$iv       = "1234567890123456";
$password = '1234567890123456';
$method   = 'aes-256-cbc';
$option   = 0;

//	...
$str = "test";
$enc = openssl_encrypt($str, $method, $password, $option, $iv);
$dec = openssl_decrypt($enc, $method, $password, $option, $iv);
d($str, $enc, $dec);

//	...
function strtohex($x)
{
	$s = '';
	foreach( str_split($x) as $c ){
		$s .= sprintf("%02X", ord($c));
	}
	return $s;
}
