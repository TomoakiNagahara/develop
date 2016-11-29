<?php
/**
 * develop:/time.php
 *
 * @created   2016-11-29
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
d(gmdate('Y-m-d H:i:s'));
d(date('Y-m-d H:i:s'));
d(Time::Datetime());
Time::Timezone('Asia/Tokyo');
d(Time::Datetime());