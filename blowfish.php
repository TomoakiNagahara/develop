<?php
/**
 * develop:/blowfish.php
 *
 * @created   2017-03-01
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
$str = 'This is secret string.';
$enc = Blowfish::Encrypt($str, 'password');
$dec = Blowfish::Decrypt($enc, 'password');

Html::P($str);
Html::P($enc);
Html::P($dec);
