<?php
/**
 * develop:/onepiece.php
 *
 * @created   2016-12-05
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	Static method.
OnePiece::Hoge();
//d(OnePiece::hoge);

//	method.
$op = new OnePiece();
$op->Hoge();
$op->foo = 1;
d($op->bar);
