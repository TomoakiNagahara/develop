<?php
/**
 * develop:/form.php
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   develop
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$_form = [];
$_form['label']	 = 'テストフォーム';
$_form['name']	 = 'test';
$_form['action'] = '';
$_form['method'] = 'post';
$_form['style']	 = 'border:1px solid black;';
$_form['class']	 = '';

//	...
$input = [];
$input['label']	 = '隠しタグ';
$input['type']	 = 'hidden';
$input['name']	 = 'file';
$input['value']	 = 'form';
$input['class']	 = '';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = '１行テキスト';
$input['name']	 = 'text';
$input['type']	 = 'text';
$input['value']	 = 'text';
$input['class']	 = 'text';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = '複数行テキスト';
$input['name']	 = 'textarea';
$input['type']	 = 'textarea';
$input['value']	 = 'textarea';
$input['class']	 = 'textarea';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = 'セレクト';
$input['name']	 = 'select';
$input['type']	 = 'select';
$input['value']	 = 'select';
$input['class']	 = 'select';
$input['style']	 = '';
$input['option'] = ['', 'A','B', 1, 1.1];
$input['option'][] = ['label'=>'Value of C', 'value'=>'C'];
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = 'チェックボックス';
$input['name']	 = 'checkbox';
$input['type']	 = 'checkbox';
$input['value']	 = 'checkbox';
$input['class']	 = 'checkbox';
$input['style']	 = '';
$input['values'] = ['iOS','Android','WindowsPhone'];
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = '利用規約に同意する';
$input['name']	 = 'agree';
$input['type']	 = 'checkbox';
$input['value']	 = '1';
$input['class']	 = '';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = '性別';
$input['name']	 = 'gender';
$input['type']	 = 'radio';
$input['class']	 = '';
$input['style']	 = '';
$input['value']	 = '';
$input['values'][] = ['label'=>'男性', 'value'=>'male'];
$input['values'][] = ['label'=>'女性', 'value'=>'female'];
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = 'ボタン';
$input['name']	 = 'button';
$input['type']	 = 'button';
$input['value']	 = 'button';
$input['class']	 = 'button';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

//	...
$input = [];
$input['label']	 = '送信ボタン';
$input['name']	 = 'submit';
$input['type']	 = 'submit';
$input['value']	 = 'submit';
$input['class']	 = 'button';
$input['style']	 = '';
$_form['input'][$input['name']] = $input;

/* @var $form Form */
$form = Unit::Factory('form');
$form->Init($_form);
$form->Save(Http::Request());

//	...
$form->Test();
?>
<hr/>
<?= $form->Start() ?>
<?= $form->Input('file') ?>
<table>
	<tr><th><?= $form->Label('text')     ?></th><td><?= $form->Input('text')        ?></td></tr>
	<tr><th><?= $form->Label('textarea') ?></th><td><?= $form->Input('textarea')    ?></td></tr>
	<tr><th><?= $form->Label('select')   ?></th><td><?= $form->Input('select')      ?></td></tr>
	<tr><th><?= $form->Label('checkbox') ?></th><td><?= $form->Checkbox('checkbox') ?></td></tr>
	<tr><th><?= $form->Label('agree')    ?></th><td><?= $form->Input('agree')       ?></td></tr>
	<tr><th><?= $form->Label('gender')   ?></th><td><?= $form->Radio('gender')      ?></td></tr>
	<tr><th><?= $form->Label('button')   ?></th><td><?= $form->Input('button')      ?></td></tr>
	<tr><th><?= $form->Label('button')   ?></th><td><?= $form->Button('button')     ?></td></tr>
	<tr><th><?= $form->Label('submit')   ?></th><td><?= $form->Input('submit')      ?></td></tr>
</table>
<?= $form->Finish() ?>
<style>
.button {
	font-size: 12pt;
	font-weight: bold;
	color: red;
}
</style>
<hr/>
<form action="./?file=form" method="post">
	<button>submit</button>
</form>