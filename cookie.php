<?php
/**
 * develop:/cookie.php
 *
 * @created   2017-02-25
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$count = Cookie::Get('count');

//	...
Cookie::Set('count', $count+1);

//	...
Html::P("count=$count");