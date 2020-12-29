<?php session_start();
if (empty($_SESSION["uid"])) die(); ?>
<? require_once('../classes/edit.php');
$edit = New EDIT($settings);
$type = $_POST['type'];
if ($type == 'search') {
	$edit->search($_POST);
}