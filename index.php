<?php
/**
 * index.php
 *
 * @created   2016-06-09
 * @version   1.0
 * @package   localhost
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
include('../core/Bootstrap.php');
$_OP['APP_ROOT'] = __DIR__.'/'; // Corresponded to alias.
header("Content-type: text/html; charset=utf-8");
include('index.phtml');
