<?php
/**
 * develop:/session.php
 *
 * @created   2016-11-30
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	Separated each object.
d( OnePiece::Session('test',  'op') );
d( Developer::Session('test', 'dev') );
d( $_SESSION );

//	Common value static class and instantiate object.
$op = new OnePiece();
d( $op->Session('test') );

//	Common value static class and instantiate object.
$dev = new Developer();
d( $dev->Session('test') );

//	Common value static class and instantiate object.
$count = OnePiece::Session('count');
$count += 1;
if( $count % 2 ){
	OnePiece::Session('count', $count);
}else{
	$op->Session('count', $count);
}
d($count);