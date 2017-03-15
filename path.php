<?php
/**
 * develop:/path.php
 *
 * @created   2016-11-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
?>
CompressPath：__FILE__ --> <?= CompressPath(__FILE__) ?><br/>
ConvertPath：app:/index.php --> <?= ConvertPath('app:/index.php') ?><br/>
ConvertURL：__FILE__ --> <?= ConvertURL(__FILE__) ?><br/>
ConvertURL：app:/foo/bar/index.php --> <?= ConvertURL('app:/foo/bar/index.php') ?><br/>