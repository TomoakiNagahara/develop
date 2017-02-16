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
	$price = 100;
	$tax = Japan\Tax::Calc($price, $date);
	$tia = $price + $tax; // Tax included amount
	d("$date --> $price + $tax = $tia");
}
