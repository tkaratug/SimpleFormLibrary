<?php

if($_POST) {
	echo 'Form submitted ! <br>';
	echo '<a href="Example.php">&laquo; Back</a>';
} else {
	include 'Form.php';

	$form = new Form();

	echo $form->open('form_1', ['action' => 'Example.php', 'method' => 'post']);

	echo $form->label('test', 'Test Giriniz', ['style' => 'display: block;']);
	echo $form->input('firstname', ['placeholder' => 'Ad, Soyad']) . '<br><br>';

	echo $form->hidden('user_id', 15);

	echo $form->textarea('aciklama', 'test', ['class' => 'eghe']) . '<br><br>';

	echo $form->password('password') . '<br><br>';

	echo $form->custom('email', 'email', ['class' => 'test']) . '<br><br>';

	echo $form->select('adaylar', ['Hasan' => 1, 'Fehmi' => 2], 2, ['class' => 'aga']) . '<br><br>';

	echo $form->multiSelect('gruplar', ['Meyve' => 1, 'Sebze' => 2, 'Tatli' => 3, 'Tahil' => 4], 2, ['class' => 'aga']) . '<br><br>';

	echo $form->checkbox('gerekli', 1, false, ['style' => 'width: 15px;']) . '<br><br>';

	echo $form->radio('radyo', 1, true, ['style' => 'width: 15px;']);
	echo $form->radio('radyo', 2, false, ['style' => 'width: 15px;']) . '<br><br>';

	echo $form->file('image', true) . '<br><br>';

	echo $form->submit('submit', 'Submit Form');

	echo $form->button('submit', 'Submit Form');

	echo $form->reset('reset', 'Reset Form') . '<br><br>';

	echo $form->close();
}

?>