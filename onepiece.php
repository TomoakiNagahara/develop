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

//	...
class onepiece
{
	use OP_CORE;
}

//	static
try{
	//	Static method.
	onepiece::Hoge();
	onepiece::_HOGE_;
}catch( Throwable $e ){
	Notice::Set($e->getMessage());
}

//	dynamic
$op = new onepiece();
$op->Hoge();
$op->foo = 1;
$op->bar;
