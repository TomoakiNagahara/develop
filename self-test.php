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
if(!Unit::Load('self-test')){
	Html::E('Could not load self-test unit.');
	return;
}

//	...
$json = file_get_contents('config.json');
$conf = json_decode($json, true);
//d('conf', $conf);

//	...
$result = Inspector::Inspections($conf);
//d('inspection result', $result);
?>
<div class="inspection"><?php echo json_encode($result) ?></div>
<script src="self-test.api.php"></script>
<?php d($result) ?>