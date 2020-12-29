<?php session_start(); ?>

<?require_once('../classes/edit.php');
require_once('../classes/longpolling.php');
$id = intval($_POST['id']);
$type = $_POST['type'];
$edit = New EDIT($settings);
if ($id > 0 AND $type == 'save_comment') {
	$user = ADMIN::getCurrentUser();
	$text = 'Комментарий(' . $user["name"] . '): ' . $_POST['text'];
	$edit->saveComment($_POST, $text);

	$command_for_client = array('command' => 'UPD_APPLICATION', 'id' => $id);
	$ids = longPolling::getOnlineIds();
	longPolling::push($ids, $command_for_client);

} elseif ($id > 0 AND $type == 'getComment') {
	echo $edit->getComment($id);
}

