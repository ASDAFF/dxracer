<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</head>
<style type="text/css">
	@media print, screen {
		/* Стиль для отображения в браузере */
		body {
			color: #000;
			background: #fff;
			font-family: Times, 'Times New Roman', serif; /* Шрифт с засечками */
			font-size: 14px; /* Размер шрифта */
		}

		table {
			width: 100%; /* Ширина таблицы */
			border-collapse: collapse; /* Отображать только одинарные линии */
			page-break-inside: avoid;
		}

		tr {
			page-break-inside: avoid;
		}

		th {
			text-align: center; /* Выравнивание по левому краю */
			padding: 3px; /* Поля вокруг содержимого ячеек */
			border: 1px solid black; /* Граница вокруг ячеек */
			font-size: 16px;
			font-weight: bold;
		}

		td {
			page-break-inside: avoid;
			padding: 3px; /* Поля вокруг содержимого ячеек */
			border: 1px solid black; /* Граница вокруг ячеек */
		}

		td:nth-child(5) {
			word-break: break-all;
		}

	}

	@media screen {
		table {
			width: 60%;
			margin: 0 auto;

		}

	}

	@page {
		/*margin-top: 2cm;*/
		margin-bottom: 2cm;
	}
</style>
<body onload="window.print()">
<?
require_once("../classes/edit.php");

$edit = New EDIT($settings);
if (!empty($_REQUEST['id'])) {
	$dop_sql = $_REQUEST['id'];
	$keyName = 'id';
}
$result = $edit->getRecords($dop_sql, $keyName); ?>

<table>
	<tr>
		<th>Телефон</th>
		<th>ФИО</th>
		<th>Адрес</th>
		<th>Модель</th>
		<th>Цена</th>
		<th>Комментарий</th>
	</tr>

	<? foreach ($result as $value) { ?>
		<tr>
			<td>
				<?= $value['phone'] ?>
			</td>
			<td>
				<?= $value['name'] ?>
			</td>
			<td>
				<?= $value['adress'] ?>
			</td>
			<td>
				<?= nl2br($value['models']) ?>
			</td>
			<td>
				<?= nl2br(str_replace('.00', '', $value['prices'])) ?>
			</td>
			<td>
				<?= $value['details'] ?>
			</td>
		</tr>
	<? } ?>

</table>

</body>
</html>