<?php
/**
 * develop:/japan.php
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$before = Time::Datetime();

//	Set unit directory.
Env::Set(Unit::_DIRECTORY_, '/www/op/7/unit/');

//	Load japan unit.
if( Unit::Load('japan') ){
	$after = Time::Datetime();
	d("japan unit is load was successful. $before --> $after");
}else{
	d("japan unit is load was failed.");
	return;
}

//	...
d("Get tax by date.");
foreach(['1988-12-31', '1989-01-01','1997-04-01','2014-04-01'] as $date){
	$tax = japan::Tax($date);
	d("$date --> $tax");
}
