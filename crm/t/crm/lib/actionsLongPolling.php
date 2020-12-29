<?php
require_once('../classes/admin.php');
require_once('../classes/edit.php');
$command = $_POST['command'];
$id = $_POST['id'];
$locked = $_POST['locked'];
switch ($command) {
	case 'UPD_ACTIVE_LIST_USERS':
		sleep(1);
		ADMIN::genOnlineUsersList();
		break;
	case 'UPD_APPLICATION':
		EDIT::genOneApplication($id);
		break;
}
?>