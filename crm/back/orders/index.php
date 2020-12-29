<?
require_once("../classes/class.simpleDB.php");
require_once("../classes/class.simpleMysqli.php");
$settings = array(
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'j59Rtilmysql',
    'db' => 'zakaz1234',
    'port' => 3306,
    'charset' => 'utf8'
);
$db = new simpleMysqli($settings);
$query = $db->select('SELECT *,(NOW() - INTERVAL 7 DAY) as date_from, now() date_to FROM `orders`  WHERE DATE(date1) BETWEEN NOW() - INTERVAL 7 DAY AND NOW() ORDER BY id DESC ');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Заказы</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-dark">
<!-- Navigation-->

<div class="content-wrapper" style="overflow: hidden;">

		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i>&nbsp; Заказы (c <?=$query[0]['date_from']?> по  <?=$query[0]['date_to']?> )
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-sm table-hover" id="dataTableOrders" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th>Модель</th>
							<th>Телефон</th>
							<th>Информация</th>
							<th>Цена</th>
							<th>Дата</th>
							<th>Дата</th>
							<th>Коммент</th>
						</tr>
						</thead>
						<tbody>
                        <? foreach ($query as $value) { ?>
							<tr data-id="<?= $value["id"] ?>">
								<td>
									<span class="field"><?= nl2br($value["model"]) ?></span>
								</td>

								<td>
									<span class="field"><?= nl2br($value["phone"]) ?></span>
								</td>
								<td>
									<span class="field"><?= $value["info"] ?></span>
								</td>
								<td>
									<span class="field"><?= nl2br($value["price"]) ?></span>
								</td>
								<td>
                                    <?= date('d.m.Y', strtotime($value["date1"])) ?>
								</td>
								<td>
                                    <?= date('d.m.Y', strtotime($value["date2"])) ?>
								</td>
								<td>
                                    <?= nl2br($value["comment"]) ?>
								</td>
							</tr>
                            <?
                        } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
</div>

<!-- /.container-fluid-->
<!-- /.content-wrapper-->



<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->

<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="vendor/inputmask/dist/jquery.inputmask.bundle.js"></script>
<script src="vendor/inputmask/dist/inputmask/phone-codes/phone.js"></script>
<script src="vendor/inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
<script src="js/main.js"></script>
</body>

</html>