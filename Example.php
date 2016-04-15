<?php

if($_POST) {
	echo 'Form submitted ! <br>';
	echo '<a href="Example.php">&laquo; Back</a>';
} else {
	include 'Form.php';

	$form = new Form();

	echo $form->open('form_1', ['action' => 'Example.php', 'method' => 'post']);

	echo $form->label('test', 'Full Name', ['style' => 'display: block;']);
	echo $form->input('firstname', ['placeholder' => 'Full Name']) . '<br><br>';

	echo $form->hidden('user_id', 15);

	echo $form->textarea('description', 'test', ['class' => 'foo']) . '<br><br>';

	echo $form->password('password') . '<br><br>';

	echo $form->custom('email', 'email', ['class' => 'bar']) . '<br><br>';

	echo $form->select('adaylar', ['Person A' => 1, 'Person B' => 2], 2, ['class' => 'foo']) . '<br><br>';

	echo $form->multiSelect('groups', ['Group A' => 1, 'Group B' => 2, 'Group C' => 3, 'Group D' => 4], 2, ['class' => 'bar']) . '<br><br>';

	echo $form->checkbox('Accept', 1, false, ['style' => 'width: 15px;']) . '<br><br>';

	echo $form->radio('radio_1', 1, true, ['style' => 'width: 15px;']);
	echo $form->radio('radio_2', 2, false, ['style' => 'width: 15px;']) . '<br><br>';

	echo $form->file('image', true) . '<br><br>';

	echo $form->submit('submit', 'Submit Form');

	echo $form->button('submit', 'Submit Form');

	echo $form->reset('reset', 'Reset Form') . '<br><br>';

	echo $form->close();
}

?>
