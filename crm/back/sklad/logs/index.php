<? require_once("../../classes/Utils/TimeHelper.php"); ?>
<? require_once("../../classes/Sklad.php"); ?>
<? require_once("../../classes/Logs.php"); ?>

<?
if ($_SERVER['REMOTE_USER'] == 'sklad') {
    $admin = true;
} else {
    $admin = false;
}

if (!$admin) {
    die();
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/t/bootstrap/js/bootstrap.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.panel-heading:hover {
			background-color: #dfdfdf !important;
			cursor: pointer;
		}

		.panel-refusals {
			border-color: #c07d7d;
		}

		.panel-refusals > .panel-heading {
			color: #fff;
			background-color: #ea9999;
			border-color: #c07d7d;
		}

		.panel-problems {
			border-color: #b88fa3;
		}

		.panel-problems > .panel-heading {
			color: #fff;
			background-color: #d5a6bd;
			border-color: #b88fa3;
		}

		.panel-other {
			border-color: #7e999d;
		}

		.panel-other > .panel-heading {
			color: #fff;
			background-color: #a2c4c9;
			border-color: #7e999d;
		}

	</style>
</head>
<body>
<div class="container">
	<div class="panel-other">
		<form class="form-inline">
			<div class="form-group">
				<label for="date_from">Дата с:</label>
				<input id="date_from" type="date" name="date_from" class="form-control form-inline">
			</div>
			<div class="form-group">
				<label for="date_to">Дата по:</label>
				<input id="date_to" type="date" name="date_to" class="form-control form-inline">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">ОК</button>
			</div>
		</form>
	</div>
</div>
<div class="container">
	<div class="panel-group" id="accordion">
        <?
        $max_day = 7;
        $cur_date = date("Y-m-d H:i:s");
        $is_any_date = false;
        if (isset($_GET['date_from']) && isset($_GET['date_to'])) {
            $cur_date = date("Y-m-d H:i:s", strtotime($_GET['date_to']));
            $datetime1 = new DateTime($_GET['date_from']);
            $datetime2 = new DateTime($_GET['date_to']);
            $interval = $datetime1->diff($datetime2);
            $max_day = $interval->format('%a');
            $max_day++;
        }

        for ($d = 0; $d < $max_day; $d++) {
            $th = new TimeHelper($cur_date);
            $number_day = $th->modify(-$d, "day")->datetime(false, 'd');
            $string_day = strtolower($th->dayStr());
            $string_month = trim(strtolower($th->month()));
            $date = $th->datetime(false, 'd.m.Y');
            $panel_header_id = "ph_" . $th->datetime(false, 'dmY');


            $logs = new Logs();
            ?>
			<div class="panel panel-info">
				<div class="panel-heading">
					<a data-toggle="collapse" data-parent="#accordion" href="#<?= $panel_header_id ?>"><?= "{$number_day} {$string_month}, {$string_day}" ?></a>
				</div>
				<div id="<?= $panel_header_id ?>" class="panel-collapse collapse <?= $d == 0 ? "in" : "" ?>">
					<div class="panel-body">

						<div class="panel panel-default">
							<div class="panel-heading">Продажи</div>
							<div class="panel-body">

                                 <?   $ob = $logs->getLog('sklad_sales', $date);?>

                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
							<div class="panel-footer" style="text-align: right;">
								<div style='width:760px'>
									<h4 style="font-weight: bold">Итого: <?= $sum ?></h4>
								</div>
							</div>
						</div>

						<div class="panel panel-primary">
							<div class="panel-heading">Отправки</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_shipment', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
							<div class="panel-footer" style="text-align: right;">
								<div style='width:760px'>
									<h4 style="font-weight: bold">Итого: <?= $sum ?></h4>
								</div>
							</div>
						</div>

						<div class="panel panel-refusals">
							<div class="panel-heading">Отказы</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_refusals', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
						</div>

						<div class="panel panel-problems">
							<div class="panel-heading">Проблемы</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_problems', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
						</div>

						<div class="panel panel-other">
							<div class="panel-heading">Прочее</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_other', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
						</div>
						<div class="panel panel-danger">
							<div class="panel-heading">брак</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_discard', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_insert'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_insert'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">возврат</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_return', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_insert'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_insert'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
						</div>
						<div class="panel panel-warning">
							<div class="panel-heading">Приход денег за отправки</div>
							<div class="panel-body">
                                <? $ob = $logs->getLog('sklad_coming_money', $date); ?>
                                <? $sum = 0; ?>
                                <? while ($value = $ob->fetch_assoc()) { ?>

									<table class="table table-bordered">
										<tr>
											<td style='width:60px'><?= $value['who'] ?></td>
											<td style='width:60px'><?= $value['model'] ?></td>
											<td style='width:110px'><?= $value['phone'] ?></td>
											<td style='width:470px;word-break: break-all'><?= $value['text'] ?></td>
											<td style='width:60px'><?= $value['price'] ?><? $sum += $value['price']; ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_1'])) ?></td>
											<td style='width:90px'><?= date('d.m.Y', strtotime($value['date_2'])) ?></td>
											<td style='width: 130px'><?= $value['comment'] ?></td>
										</tr>
									</table>
                                <? } ?>
							</div>
							<div class="panel-footer" style="text-align: right;">
								<div style='width:760px'>
									<h4 style="font-weight: bold">Итого: <?= $sum ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

        <? } ?>
	</div>
</div>
</body>
</html>
