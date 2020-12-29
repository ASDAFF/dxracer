<?
require_once("../classes/Sklad.php");
require_once("../classes/Invoice.php");
require_once("../classes/Reordring.php");
$sk = new Sklad();
if ($_SERVER['REMOTE_USER'] == 'sklad') {
    $admin = true;
} else {
    $admin = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Склад</title>

	<!-- Bootstrap -->
	<link href="/t/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		#kernelTable tr[visible='false'] {
			display: none;
		}

		#kernelTable tr[visible='true'] {
			display: table-row;
		}

		.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
			padding: inherit !important;
		}

		.row-centered {
			text-align: center;
		}

		#contextMenu {
			position: absolute;
			display: none;
		}

		.glyphicon {
			top: 0 !important;
		}
	</style>
</head>
<body style="font-size: 13px;">
<? // if(!isset($_GET['debug'])){?>
<!--<h1 style="color: red">Техническое обслуживание!</h1>-->
<? //
//die();
//}?>

<div class="col-md-12 text-center">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#sales">Продажи</button>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shipment">Отправки</button>
	<button type="button" class="btn btn-refusals" data-toggle="modal" data-target="#Refusals">Отказы</button>
	<button type="button" class="btn btn-problems" data-toggle="modal" data-target="#Problems">Проблемы</button>
    <button type="button" class="btn btn-other" data-toggle="modal" data-target="#Other">Прочее</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#coming">Поставка</button>
	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#coming_money">Приход денег за отправки</button>
    <button class="startUpdate btn btn-danger" href="javascript:void(0)">Обновить наличие</button>
    <? if ($admin) { ?>
		<a type="button" class="btn btn-info" href="statistic.php">Показать статистику</a>
        <a class="btn btn-info" href="/t/sklad/logs/">Логи</a>
		<div class="btn-group dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				Прочие действия
			</button>
			<ul class="dropdown-menu">
				<li>
					<a data-toggle="modal" href="javascript:void(0)" data-target="#re_ordering">Дозаказ</a>
				</li>
				<li>
					<a data-toggle="modal" href="javascript:void(0)" data-target="#sellPeriod">Продажи за период</a>
				</li>
				<li>
					<a data-toggle="modal" href="/t/sklad/invoice/">Закупка</a>
				</li>
				<li class="divider"></li>
				<li>
					<a id="startUpdate" href="javascript:void(0)">Обновить наличие</a>
				</li>
				<li>
					<a id="exportExcelAll" href="all_exel.php">Выгрузить в Эксель</a>
				</li>
				<li>
					<a id="invent" href="invent.php">Инвентаризация</a>
				</li>
				<li>
					<a id="invent" href="invent.php?exel=1">Инвентаризация EXEL</a>
				</li>
				<li>
					<a id="sklad_out" href="sklad_out.php?exel=1">Выгрузка склад+едет</a>
				</li>
				<li class="divider"></li>
				<li>
					<a id="closeMonth" href="javascript:void(0)">Закрыть месяц</a>
				</li>
				<li>
					<a target="_blank" id="closeMonth" href="log_close_sklad.php">Лог выгрузок</a>
				</li>
				<li class="divider"></li>
				<li>
					<a target="_blank" href="/t/search/">Архив</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="javascript:void(0)" data-toggle="modal" data-target="#setCourierList">Заполнить список курьеров</a>
				</li>
				<li class="divider"></li>
				<li class="col-sm-12">
					<button class="btn btn-danger" onclick="logout()">Выход</button>
				</li>
			</ul>
		</div>
    <? } ?>

</div>
<? if ($admin) { ?>
	<div class="form-group col-sm-6 col-md-offset-3">
		<input type="text" class="search form-control" placeholder="Мгновенный поиск">
	</div>

	<div class="form-group col-xs-6 col-md-offset-3">
		<div class="checkbox-inline">
			<label><input id="showFullTable" type="checkbox" value="" class="checkbox-inline">Показать полную таблицу</label>
		</div>
		<div class="checkbox-inline">
			<label><input id="activateAutoUpdate" type="checkbox" value="" class="checkbox-inline">Активировать автообновление наличия</label>
		</div>

	</div>

	<table id="kernelTable" class="table table-striped table-bordered table-hover" style="width: 57%;margin: 0 auto;">

	</table>
	<div id="contextMenu" class="dropdown clearfix">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
			<li><a id="aDiscard" tabindex="-1" href="#">Отбраковать</a></li>
			<li><a id="aReturn" tabindex="-1" href="#">Оформить возврат</a></li>
			<li><a id="aEdit" tabindex="-1" href="#">Редактировать</a></li>
			<li><a id="aEditPositionPrice" tabindex="-1" href="#">Редактирование стоимости</a></li>
			<!--        <li class="divider"></li>-->
			<!--        <li><a tabindex="-1" href="#">Separated link</a></li>-->
		</ul>
	</div>
<? } else { ?>
	<style>
		.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
			padding: 15px !important;
		}
	</style>
	<div class="container">
		<table id="kernelTable" class="table table-bordered table-hover">
		</table>
	</div>
<? } ?>
<!--Modal couriers-->
<div class="modal fade" id="setCourierList" role="dialog">
	<div class="modal-dialog modal-sm">
		<form id="setCourierList_form">
			<input type="hidden" name="action" value="setCourierList">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Список курьеров</h4>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group hidden">
						<div class="input-group input-group-sm">
							<input class="form-control" name="data[]" value="">
							<span class="input-group-btn">
                                <button class="btn btn-danger glyphicon glyphicon-minus" type="button" onclick="$(this).closest('.form-group').remove();"></button>
                            </span>
						</div>
					</div>

                    <?
                    $arr_couriers = $sk->getCourierList();
                    foreach ($arr_couriers as $value) {
                        ?>
						<div class="form-group">
							<div class="input-group input-group-sm">
								<input class="form-control" name="data[]" value="<?= $value["name"] ?>">
								<span class="input-group-btn">
                                <button class="btn btn-danger glyphicon glyphicon-minus" type="button" onclick="$(this).closest('.form-group').remove();"></button>
                            </span>
							</div>
						</div>
                    <? } ?>
					<button type="button" class="btn btn-success btn-sm"
					        onclick="$('#setCourierList_form .form-group:first').clone().insertBefore($(this)); $('#setCourierList_form  .form-group:last').removeClass('hidden');">
						<span class="glyphicon glyphicon-plus"></span> Добавить
					</button>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Сохранить</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!--Modal couriers-->

<!-- Modal sales-->
<div class="modal fade" id="sales" role="dialog">
	<div class="modal-dialog modal-lg">
		<form method="post" id="sales_form">
			<input type="hidden" name="action" value="sales">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Продажи</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>"T035.617.16.051.00
TT"	89242863818	Заборский Николай Витальевич, znv167@mail.ru, Сахалинская область, г. Холмск, ул.А.Матросова,д.8,кв.41.. Заказ №N38V9	24200	23.08.2016	31.08.2016	201630200253</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div id="couriers_list" class="col-lg-5">

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Занести продажи</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Modal coming-->
<div class="modal fade" id="coming" role="dialog">
	<div class="modal-dialog modal-lg">
		<form id="coming_form">
			<input type="hidden" name="action" value="coming">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Поставка</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>артикул {табуляция} поставщик</span><br>
						<span>AR2447    T</span>
					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-lg-5 form-inline text-left">
						<label for="provider">Поставщик
							<input id="provider" class="form-control" type="text" name="provider" value="">
						</label>
                        <?
                        $invoice = new Invoice();
                        $arr = $invoice->getAllInvoice(true);
                        ?>
						<label for="invoice" style="display: none;">
							<select id="invoice" name="invoice" class="form-control">
								<option value="0" disabled selected>Выберите накладную</option>
                                <? foreach ($arr as $value) { ?>
									<option value="<?= $value['id'] ?>"><?= $value["id"] ?> - <?= $value['date_insert'] ?> - <?= $value['provider'] ?></option>
                                <? } ?>
							</select>
						</label>
					</div>
					<div class="form-inline col-lg-4">
						<label for="by_invoice">
							<input id="by_invoice" class="checkbox-inline" type="checkbox" name="by_invoice" value="by_invoice">
							Поставка по накладной
						</label>
					</div>
					<div class="form-inline col-lg-3">
						<button type="submit" class="btn btn-info">OK</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Modal Refusals-->
<div class="modal fade" id="Refusals" role="dialog">
	<div class="modal-dialog modal-lg">
		<form method="post" id="Refusals_form">
			<input type="hidden" name="action" value="Refusals">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Отказы</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>AR5905	89268513111	"Михаил, Москва, ул. Новослободская дом 62 корп 15 кв 160, подъезд 8 этаж 4 домофон 2в5904
 Давид 89257271307 - заказчик."	15990	12.06.2016	12.06.2016	коммент</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<div id="couriers_list" class="col-lg-5">

					</div>
					<button type="submit" class="btn btn-info">Занести отказы</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Modal Problems-->
<div class="modal fade" id="Problems" role="dialog">
	<div class="modal-dialog modal-lg">
		<form method="post" id="Problems_form">
			<input type="hidden" name="action" value="Problems">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Проблемы</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>AR5905	89268513111	"Михаил, Москва, ул. Новослободская дом 62 корп 15 кв 160, подъезд 8 этаж 4 домофон 2в5904
 Давид 89257271307 - заказчик."	15990	12.06.2016	12.06.2016	коммент</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<div id="couriers_list" class="col-lg-5">

					</div>
					<button type="submit" class="btn btn-info">Занести проблемы</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Modal Other-->
<div class="modal fade" id="Other" role="dialog">
	<div class="modal-dialog modal-lg">
		<form method="post" id="Other_form">
			<input type="hidden" name="action" value="Other">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Прочее</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>AR5905	89268513111	"Михаил, Москва, ул. Новослободская дом 62 корп 15 кв 160, подъезд 8 этаж 4 домофон 2в5904
 Давид 89257271307 - заказчик."	15990	12.06.2016	12.06.2016	коммент</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<div id="couriers_list" class="col-lg-5">

					</div>
					<button type="submit" class="btn btn-info">Занести прочее</button>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Modal coming-->
<div class="modal fade" id="shipment" role="dialog">
	<div class="modal-dialog modal-lg">
		<form id="coming_form">
			<input type="hidden" name="action" value="shipment">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Отправки</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>"T035.617.16.051.00
TT"	89242863818	Заборский Николай Витальевич, znv167@mail.ru, Сахалинская область, г. Холмск, ул.А.Матросова,д.8,кв.41.. Заказ №N38V9	24200	23.08.2016	31.08.2016	201630200253</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Занести отправки</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Modal coming-->
<div class="modal fade" id="coming_money" role="dialog">
	<div class="modal-dialog modal-lg">
		<form id="coming_form">
			<input type="hidden" name="action" value="coming_money">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Приход денег за отправки</h4>
					<div class="alert alert-info">
						<strong>Пример данных:</strong><br>
						<span>"T035.617.16.051.00
TT"	89242863818	Заборский Николай Витальевич, znv167@mail.ru, Сахалинская область, г. Холмск, ул.А.Матросова,д.8,кв.41.. Заказ №N38V9	24200	23.08.2016	31.08.2016	201630200253</span><br>

					</div>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong><span></span></strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Занести приход денег за отправки</button>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="modal fade" id="editPositionPrice" role="dialog">
	<div class="modal-dialog modal-sm">
		<form id="editPositionPrice_form">
			<input type="hidden" name="action" value="editPositionPrice">
			<input type="hidden" name="model_id" value="">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Введите стоимость</h4>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong>Данные успешно добавлены!</strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" name="data">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Сохранить</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal coming-->
<div class="modal fade" id="discard" role="dialog">
	<div class="modal-dialog modal-lg">
		<form id="discard_form">
			<input type="hidden" name="action" value="discard">
			<input type="hidden" name="model_id" value="">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Введите причину отбраковки</h4>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong>Данные успешно добавлены!</strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">Занести причину отбраковки</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal coming-->
<div class="modal fade" id="return" role="dialog">
	<div class="modal-dialog modal-sm">
		<form id="return_form">
			<input type="hidden" name="action" value="return">
			<input type="hidden" name="model_id" value="">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Подтверждение возврата</h4>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong>Возврат подтвержден!</strong>
					</div>
				</div>
				<div class="modal-footer" style="text-align: center;">
					<button type="submit" class="btn btn-info">Подтвердить возврат</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal coming-->
<div class="modal fade" id="editPosition" role="dialog">
	<div class="modal-dialog modal-sm">
		<form id="return_form">
			<input type="hidden" name="action" value="editPosition">
			<input type="hidden" name="model_id" value="">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Редактирование </h4>
					<div class="alert alert-danger" style="display: none;">
						<strong>Ошибка!</strong><span></span>
					</div>
					<div class="alert alert-success" style="display: none;">
						<strong>Позиция успешна изменена!</strong>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" name="data" value="">
					</div>
				</div>
				<div class="modal-footer" style="text-align: center;">
					<button type="submit" class="btn btn-info">Изменить</button>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Modal coming-->
<?
$date_from = $sk->getDateLastReOrder();
$date_to = date("d.m.Y H:i");

?>
<div class="modal fade" id="re_ordering" role="dialog">
	<div class="modal-dialog">
		<form id="re_ordering_form">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Дозаказ</h4>
					<div class="modal-body">
						<div class="input-daterange input-group" id="datepicker">
							<input id="date_from" name="date_from" type="text" class="input-sm form-control" value="<?= $date_from ?>"/>
							<span class="input-group-addon">по</span>
							<input id="date_to" name="date_to" type="text" class="input-sm form-control" value="<?= $date_to ?>"/>
						</div>
						<div class="modal-body">
							<div class="checkbox-inline">
								<label><input id="lastReorder" type="checkbox" value="" class="checkbox-inline">c последнего дозаказа</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-lg-5">
								<button type="submit" class="btn btn-info">Выгрузить</button>
							</div>
							<div class="dropdown col-lg-5">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Лог дозаказов
								</button>
								<ul class="dropdown-menu">
                                    <? $arr = $sk->getDateReOrderAll();
                                    foreach ($arr as $value) {
                                        ?>
										<li><a href="re-ordering_exel.php?id=<?= $value["id"] ?>"><?= $value["date"] ?></a></li>
                                    <? } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="modal fade" id="sellPeriod" role="dialog">
	<div class="modal-dialog modal-sm">
		<form id="sellPeriod_form" class="form-inline">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Продажи за период</h4>
				</div>
				<div class="modal-body">
                    <? $reordering = new Reordring(); ?>

					<select name="date_from" class="form-control">
                        <? $res_reordering = $reordering->getAllDatesReordering();
                        while ($arr_reordering = $res_reordering->fetch_assoc()) { ?>
							<option><?= $arr_reordering['date'] ?></option>
                        <? } ?>
					</select>
					<select name="date_to" class="form-control">
                        <? $res_reordering = $reordering->getAllDatesReordering(false);
                        while ($arr_reordering = $res_reordering->fetch_assoc()) { ?>
							<option><?= $arr_reordering['date'] ?></option>
                        <? } ?>
					</select>
				</div>

				<div class="modal-footer">
					<button class="btn btn-info">Выгрузить</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/jquery.min.js"></script>
<script src="js/moment.js"></script>
<script src="locale/ru.js"></script>
<script src="js/transition.js"></script>
<script src="js/collapse.js"></script>
<script src="/t/bootstrap/js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/script.js?<?= time() ?>"></script>
</body>
</html>