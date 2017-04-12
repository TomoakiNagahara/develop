<?php
/**
 * develop:/self-test/index.php
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
<script src="<?= ConvertURL("app:/self-test/inspector.js.php") ?>"></script>
<?php d($result) ?>
<style>
div.inspection {
	_border: 1px solid black;
}

div.inspection ol.root {
	_border: 1px solid black;
}

div.inspection ol.root li[data-result="true"] span{
	color: blue;
}

div.inspection ol.root li[data-result="false"] span{
	color: red;
}
</style>