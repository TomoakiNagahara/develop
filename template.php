<?php
/**
 * develop:/template.php
 *
 * @created   2016-12-05
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
Env::Set(Template::_DIRECTORY_, 'app:/app/template/');

//	...
Template::Run('template.phtml');

//	...
D(Template::Get('template.phtml'));
