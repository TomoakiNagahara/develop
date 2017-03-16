<?php
/**
 * develop:/self-test.php
 *
 * @created   2017-03-16
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
if(!$db = Unit::Factory('db')){
	Html::E('Could not load db unit.');
	return;
}

//	...
if(!$sql = Unit::Factory('sql')){
	Html::E('Could not load sql unit.');
	return;
}

//	...
if(!Unit::Load('self-test')){
	Html::E('Could not load self-test unit.');
	return;
}

//	...
$json   = file_get_contents('self-test.json');
$config = json_decode($json, true);

d($json);
d($config);

$result = Doctor::Inspection($config);
d($result);