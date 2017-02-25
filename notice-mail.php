<?php
/**
 * develop:/notice-mail.php
 *
 * @created   2017-02-25
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
Notice::Set("Mail test");

//	...
$notice = Notice::Get();

//	...
$content = Template::Get('op:/Template/Notice/Sendmail.phtml', $notice);

//	...
echo "<hr/>{$content}<hr/>";
