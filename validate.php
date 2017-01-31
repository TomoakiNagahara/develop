<?php
/**
 * develop:/validate.php
 *
 * @created   2017-01-31
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
Unit::Load('form');
Unit::Load('validate');

//	...
$_form = [];
$_form['name']	 = 'test';
$_form['action'] = '';
$_form['method'] = 'post';


//	Numeric, integer, float
$names = ['numeric', 'integer', 'float'];

//	...
foreach($names as $name){
	$input = [];
	$input['name']	 = $name;
	$input['type']	 = 'text';
	$input['value']	 = '';
	$input['label']	 = $name;
	$input['validate'] = $name;
	$_form['input'][$input['name']] = $input;
}

//	String


//	Japanese


//	...
if( $_POST ){
	d($_POST);
	$result = Validate::Get($_form['input'], $_POST, $errors);
}

//	...
d($result);
d($errors);

//	...
$form = new Form();
$form->Test($_form);
$form->AddForm($_form);
$form->Save($result);
?>
<? $form->Start() ?>
<input type="hidden" name="file" value="validate" />
<table>
	<? foreach($names as $name): ?>
	<tr>
		<th><? $form->Label($name) ?></th>
		<td>
			<? $form->Input($name) ?>
			<? if( isset($errors[$name]) ): ?>
				<ul class="error">
				<? foreach($errors[$name] as $key => $val): ?>
					<li><span><?= $key ?> was error. (<?= $val ?>)</span></li>
				<? endforeach; ?>
				</ul>
			<? endif; ?>
		</td>
	</tr>
	<? endforeach; ?>
	<tr>
		<th></th>
		<td>
			<button> Confirm </button>
		</td>
	</tr>
</table>
<? $form->Finish() ?>
<style>
ul.error {
	_border: 1px solid black;
	margin:  0;
	padding: 0;
	padding-left: 1em;
}
ul.error > li {
	margin:  0;
	padding: 0;
}
ul.error > li > span {
	font-weight: bold;
	color: red;
}
</style>