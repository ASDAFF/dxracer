<?php
session_start();
$edit = New EDIT($settings);
$admin = New ADMIN();
if (!empty($_REQUEST["group"])) {
	$dop_sql['group'] = $_REQUEST["group"];
}
if ($_REQUEST["type"] == 'search') {
	$dop_sql = $_REQUEST['id'];
	$keyName = 'id';
}


$result = $edit->getRecords($dop_sql, $keyName);

foreach ($result as $key => $value) {
	$prices = nl2br(str_replace('.00', '', $value['prices']));
//	$color = '#fafafa';
	switch ($value['group']) {
		case 'K прозвону':
			$color = '#0000';
			break;
		case 'Резерв':
			$color = '#006FFF';
			break;
		case 'К сбору':
			$color = '#FFE599';
			break;
		case 'Собрано':
			$color = '#FF9900';
			break;
		case 'На доставке':
			$color = '#FFFF00';
			break;
		case 'Доставлено':
			$color = '#B6D7A8';
			break;
		case 'Отказ на доставке':
			$color = '#F4CCCC';
			break;
		case 'Выполнен':
			$color = '#00FF00';
			break;
		case 'Отказ':
			$color = '#E06666';
			break;
		case 'Проблема':
			$color = '#FF00FF';
			break;
	}

	$style = 'style="background: ' . $color . '"';
	if (ADMIN::isAdmin())
		$adminButton = "<a href='admin' id='admin' class='styler right button'>АДМИН</a>";
	else
		$adminButton = "";

	$delivery_name = ADMIN::getVarArr($admin->getServicesDelivery($value['dlvr_id']), 'name');
	if (empty($delivery_name))
		$delivery_name = "&nbsp";

	if ($value['date_delivery'] != '0000-00-00 00:00:00')
		$delivery_time = date('d.m', strtotime($value['date_delivery'])) . " с " . $value['time_delivery_from'] . " до " . $value['time_delivery_to'];
	else
		$delivery_time = "&nbsp";

	$delivery_details = $value['details'];
	if (empty($delivery_details))
		$delivery_details = "&nbsp";

	$delivery_trac = $value['dlvr_trac'];
	if (empty($delivery_trac))
		$delivery_trac = "&nbsp";


	if ($_REQUEST["group"] == 'Выполнен') {
		$name_date = 'Дата получ. денег';
		$date = date_create($value['made']);
	} elseif ($_REQUEST["group"] == 'Доставлено') {
		$name_date = 'Дата доставки';
		$date = date_create($value['delivery']);
	} elseif ($_REQUEST["group"] == 'Отказ') {
		$name_date = 'Дата отказа';
		if ($value['fail'] == '0000-00-00 00:00:00')
			$date = '';
		else
			$date = date_create($value['fail']);
	} else {
		$name_date = 'Дата заказа';
		$date = date_create($value['data_insert']);
	}
	unset($lock);
	if (intval($value['lock']) > 0) {
		$lock = 'class="locked"';
		$locked = "<td></td><td>" . ADMIN::getVarArr(ADMIN::getUsersByID($value['lock']), 'name') . "</td>";
	} else {
		$locked = "<td><input id='" . $value['id'] . "' type='checkbox'/></td>
<td>
<a href='edit.php?id=" . $value['id'] . " ' target='_blank'><img id='img" . $value['id'] . "' class='edit' src='images/edit.png' width='18' height='18' alt='редактировать' title='редактировать'>
</a>
</td>";
	}
	$out_table .= "<tr id='tr" . $value['id'] . "' " . $lock . ">
" . $locked . "
	<td  " . $style . ">" . nl2br($value['models']) . "</td>
	<td  " . $style . ">" . $value['name'] . "</td>
	<td  class='phoneInTable'" . $style . ">" . $value['phone'] . "</td>
	<td  " . $style . ">" . $value['adress'] . "</td>

	<td  " . $style . ">
	<table>
	<tr>
	<td  " . $style . ">" . $prices . "</td>
	<td  " . $style . ">" . preg_replace("/ /", "<br>", $delivery_time, 1) . "</td>
	<td  " . $style . ">" . date_format($date, "d.m.Y") . "</td>
	</tr>
	<tr>
	<td  " . $style . ">" . $delivery_name . "</td>
	<td  " . $style . ">" . $delivery_details . "</td>
	<td  " . $style . ">" . $value['dlvr_trac'] . "</td>

	</tr>
	</table>
	</td>

	<td  " . $style . ">" . $edit->getComment($value['id'], 1) . "</td>


	</tr>";
}

echo "<table class='firts'>
	<tr>
	<td>&nbsp;</td>
		<td>
			<div class='menu'>
				<button id='actions' class='styler left'>Действия</button>
				<ul style='display: none;'>
					<li><span onclick='print();'>Печать</span></li>
					<li><span onclick='changeGroups();'>Изменение группы</span></li>
					<li><span onclick='copy();'>Копировать</span></li>
				</ul>
			</div>
		</td>
		<td>
			<img src='images/add.png' id='addapp' alt='Добавить заявку' title='Добавить заявку'>
		</td>
		<td>
			<div class='filter'>
				<ul>
					<li><a class='button' href='/t/crm/?group=К прозвону'>К прозвону</a></li>
					<li><a class='button' href='/t/crm/?group=Резерв'>Резерв</a></li>
					<li><a class='button' href='/t/crm/?group=К сбору'>К сбору</a></li>
					<li><a class='button' href='/t/crm/?group=Собрано'>Собрано</a></li>
					<li><a class='button' href='/t/crm/?group=На доставке'>На доставке</a></li>
					<li><a class='button' href='/t/crm/?group=Доставлено'>Доставлено</a></li>
					<li><a class='button' href='/t/crm/?group=Отказ на доставке'>Отказ на доставке</a></li>
					<li><a class='button' href='/t/crm/?group=Выполнен'>Выполнен</a></li>
					<li><a class='button' href='/t/crm/?group=Отказ'>Отказ</a></li>
					<li><a class='button' href='/t/crm/?group=Проблема'>Проблема</a></li>
				</ul>
			</div>
		</td>
		<td>
			<input type='text' placeholder='Поиск' id='search' class='styler'>
		</td>
		<td>
			" . $adminButton . "
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td colspan='14'>
	<span>Вы вошли как: " . $_SESSION['username'] . " </span><a href='?type=logout'>Выйти</a>
	</td>
	<td>&nbsp;</td>
</tr>
</table>
<br>
<br>
";


echo "<table class='simple-little-table' cellspacing='0'>
<tr>
<th></th>
<th></th>
<th>Модель</th>
<th>ФИО</th>
<th>Телефон</th>
<th>Адрес</th>
<th style='padding: 0;width: 300px'>

<table>
<tr>
<th>Цена</th>
<th>Время доставки</th>
<th>" . $name_date . "</th>
</tr>
<tr>
<th>Служба доставки</th>
<th>Детали доставки</th>
<th>трек номер</th>
</tr>
</table>
</th>
<th>Комментарий</th>
</tr>
" . $out_table . "</table>";
?>