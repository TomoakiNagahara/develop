<?php
/**
 * develop:/layout.php
 *
 * @created   2016-12-05
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
Env::Set(Layout::_EXECUTE_,    true);
Env::Set(Layout::_DIRECTORY_, 'app:/app/layout/');
Env::Set(Layout::_NAME_,      'develop');

$route[Router::_END_POINT_] = ConvertPath('app:/app/layout/develop/content.php');
Router::Set($route);
Layout::Dispatch();
