<?php session_start(); ?>

<? require_once('../classes/edit.php'); ?>
<?
$edit = New EDIT($settings);
$id = $_POST['id'];
$type = $_POST['save'];
$type = $_POST['type'];

?>
<?
if ($type == 'copyApp') {
	if (is_array($id)) {
		foreach ($id as $valueID) {
			$edit->copyApp($valueID, $_POST['group']);
		}
	} else {
		$edit->copyApp($id, $_POST['group']);
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
<span>Скопировать заявки</span><br>
<form id="save_form" action="ajax/copyApp.php" method="post">' . $edit->get_groups($_POST['thisGroup']) . '
<input type="hidden" name="type" value="copyApp">
<input id="copy_app" type="button" value="Сохранить" class="copy_app styler" onclick="copyApp();"/>';

	foreach ($_POST['id'] as $value) {
		$out .= '<input type="hidden" name="id[]" value="' . $value . '">';
	}
	$out .= '</div></form>';
	echo $out;

}
?>