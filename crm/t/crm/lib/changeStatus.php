<?php
require_once("../classes/edit.php");
require_once('../classes/longpolling.php');
$edit = New EDIT($settings);
$id = intval($_POST['id']);
$type = $_POST['save'];
$type = $_POST['type'];
if ($type == 'save') {
	//изменяем поля запись с номером id
	unset($_POST['type']);

	$id = $_POST['id'];
	unset($_POST['id']);

	if (is_array($id)) {
		foreach ($id as $valueID) {
			$edit->saveForm($valueID, $_POST);

			$command_for_client = array('command' => 'UPD_APPLICATION', 'id' => $valueID);
			$ids = longPolling::getOnlineIds();
			longPolling::push($ids, $command_for_client);
		}
	} else {
		$edit->saveForm($id, $_POST);
		$command_for_client = array('command' => 'UPD_APPLICATION', 'id' => $id);
		$ids = longPolling::getOnlineIds();
		longPolling::push($ids, $command_for_client);
	}

}

if ($type == 'getgroups') {

	$out .= '<div style="height: 300px;">
<script>
	(function ($) {
		$(function () {
			$("input, select").styler({});
		});
	})(jQuery);
</script>
<span>Перенести заявки</span><br>
<form id="save_form" action="lib/changeStatus.php" method="post">' . $edit->get_groups() . '
<input type="hidden" name="type" value="save">
<input id="set_group" type="button" value="Изменить" class="save styler" onclick="save();">';

	foreach ($_POST['id'] as $value) {
		$out .= '<input type="hidden" name="id[]" value="' . $value . '">';
	}
	$out .= '</div></form>';
	echo $out;

}


?>