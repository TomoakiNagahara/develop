<?php
/**
 * develop:/notice.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   localhost
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
print __FILE__.'<br/>';
D("<h1>?");
D(Time::Datetime());
Notice::Set("1st message.");
Notice::Set("2nd message.");
D(Notice::Get());
