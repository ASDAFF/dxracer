<?php require_once('../classes/edit.php');
$edit = new EDIT();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script>
	(function ($) {
		$(function () {
			$('input').styler({});
		});
	})(jQuery);
</script>
<table width="500">
	<tr>
		<td>
			<table width="300">
				<tr>
					<td>
						<label for="WT"> MS</label><input id="WT" type="radio" name="radio" value="WT" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" placeholder="Цель обращения" id="art" onkeydown="if (event.keyCode == 13) getbyart();"
							   class="styler" style="width: 190px;">
					</td>
					<td>
						<input type="button" onclick="getbyart();" value="Найти" class="styler" style="width: 80px;">
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<div id="elements">

			</div>
		</td>
	</tr>
</table>
<form id="save_form" onsubmit="return false;">
	<table id="zayzvka" style="display: none;">
		<tr>
			<td colspan="2">
				<table cellspacing="2" border="0" cellpadding="5" class="addselemets" align="center">
					<tr>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				Телефон:
			</td>
			<td colspan="3">
				<input type="hidden" name="type" value="save">
				<input type="tel" name="phone" id="phone" placeholder="Введите 10 цифр номера" class="styler">
			</td>
		</tr>
		<tr>
			<td>
				Имя:
			</td>
			<td colspan="3">
				<input type="text" name="name" id="name" placeholder="Иванов Иван Иванович" class="styler">
			</td>
		</tr>
		<tr>
			<td>
				Адрес:
			</td>
			<td colspan="3">
				<textarea rows="3" cols="45" name="adress" id="adress" class="styler"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Детали доставки:
			</td>
			<td colspan="3">
				<textarea rows="3" cols="45" name="details" id="details" class="styler"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Дата доставки:
			</td>
			<td>
				<input type="date" name="date_delivery" id="date_delivery" class="styler" value="">
			</td>
			<td>
				с &nbsp;<input style="width: 17px;" type="text" size="2" name="time_delivery_from" id="time_delivery_from" class="styler" value="">
			</td>
			<td>
				до &nbsp;<input style="width: 17px;" type="text" size="2" name="time_delivery_to" id="time_delivery_to" class="styler" value="">
			</td>
		</tr>
		<tr>
			<td>
				Группа заявки
			</td>
			<td colspan="3">
				<?= $edit->get_groups('К сбору'); ?>
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Отправить на MS" onclick="sending('wt');" class="styler save">
			</td>
		</tr>

	</table>
</form>
</body>
</html>