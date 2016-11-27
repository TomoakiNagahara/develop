<?php
/**
 * develop:/path.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   localhost
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
d(CompressPath(__FILE__));
d(ConvertPath('app:/index.php'));
d(ConvertURL('app:/foo/bar/index.php'));