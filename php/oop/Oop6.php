<?php
header('Content-Type: text/html; charset=utf-8');
include('Form.php');

$form = new Form();
echo $form->open();
echo $form->input();
?>