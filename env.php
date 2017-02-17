<?php
/**
 * develop:/env.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$text = '<h1>TEST<br/>';
Env::Set('text',$text);
$text = Env::Get('text');
Html::P($text);

//	...
$mime = Env::Mime();
Html::P($mime);
