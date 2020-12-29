<? require_once("../classes/Sklad.php"); ?>
<? require_once("../classes/SkladStatistic.php"); ?>
<? require_once("../classes/WorkINGlobalDB.php"); ?>
<?
if (isset($_GET['exel'])) {
    header('Content-Type: application/vnd.ms-excel');
    header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    header('Content-transfer-encoding: binary');
    header('Content-Disposition: attachment; filename=Статистика_' . date("d.m.Y H:i:s") . '.xls');
    header('Content-Type: application/x-unknown');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Статистика</title>

    <!-- Bootstrap -->
    <link href="/m/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="font-size: 13px;">
<div class="col-md-6 col-md-offset-5">
    <a type="button" class="btn btn-info" href="/m/sklad/">Назад к складу</a>
</div>

<?
$sk = new WorkINGlobalDB();
$all_orders = $sk->getEventTableCnt();

$skk = new Sklad();
$all_orders_make = array_merge($skk->getSalesFromDate($sk->date_from),$skk->getComMoneyFromDate($sk->date_from));


$not_make_orders = array_diff($all_orders,$all_orders_make);

?>

<div class="row">
    <div class="col-lg-12">
        <table id="kernelTable" class="table table-striped table-bordered table-hover" style="width: 75%;margin: 0 auto;">
            <tr>
                <th>кол-во принятых заказов</th>
                <th>кол-во выполненных заказов</th>
                <th>% выполненных</th>
            </tr>
            <tr>
                <td><?=count($all_orders)?></td>
                <td><?=count($all_orders_make)?></td>
                <!--                <td><a href="#" data-toggle="tooltip" title="--><?//=implode("<br>",$not_make_orders)?><!--">--><?//=round((count($all_orders_make)*100)/count($all_orders))?><!--</a>-->
                <!---->
                <!--                    </td>-->
                <td><?=round((count($all_orders_make)*100)/count($all_orders))?></td>
            </tr>
        </table>
    </div>
</div>
<br>
<?
$sk = new SkladStatistic();
$all_array = array();
?>

<? $arr = $sk->action("full");

foreach ($arr as $value)
    $all_array[$value["brand"]][1] = $value["cnt"];


$arr = $sk->action("sales");
foreach ($arr as $value)
    $all_array[$value["brand"]][2] = $value["cnt"];


$arr = $sk->action("shipment");
foreach ($arr as $value)
    $all_array[$value["brand"]][3] = $value["cnt"];

$arr = $sk->action("discard");
foreach ($arr as $value)
    $all_array[$value["brand"]][4] = $value["cnt"];

$arr = $sk->action("averageCheck");
foreach ($arr as $value)
    $all_array[$value["brand"]][5] = $value["cnt"];

$arr = $sk->action("money");
foreach ($arr as $value)
    $all_array[$value["brand"]][6] = $value["cnt"];

$arr = $sk->action("shipmentGO");
foreach ($arr as $value)
    $all_array[$value["brand"]][7] = $value["cnt"];

$arr = $sk->action("shipmentInHand");
foreach ($arr as $value)
    $all_array[$value["brand"]][8] = $value["cnt"];

$arr = $sk->action("paymentCard");
foreach ($arr as $value)
    $all_array[$value["brand"]][9] = $value["cnt"];

?>

<div class="row">
    <div class="col-lg-12">
        <table id="kernelTable" class="table table-striped table-bordered table-hover" style="width: 75%;margin: 0 auto;">

            <tr>
                <td></td>
                <? foreach ($all_array as $key => $value) { ?>
                    <td><?= $key ?></td>
                <? } ?>
                <td>Итого</td>
            </tr>
            <tr>
                <td>Количество на складе</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[1] ?></td>
                    <? $sum += $value[1];
                } ?>
                <td><?= $sum ?></td>
            </tr>
            <tr>
                <td>Продажи</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[2] ?></td>
                    <? $sum_sales += $value[2];
                } ?>
                <td><?= $sum_sales ?></td>
            </tr>
            <tr>
                <td>Отправки всего</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[3] ?></td>
                    <? $sum += $value[3];
                } ?>
                <td><?= $sum ?></td>
            </tr>
            <tr>
                <td>Отправки в пути</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[7] ?></td>
                    <? $sum += $value[7];
                } ?>
                <td><?= $sum ?></td>
            </tr>
            <tr>
                <td>Отправки вручено</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[8] ?></td>
                    <? $sum += $value[8];
                } ?>
                <td><?= $sum ?></td>
            </tr>
	        <tr style="font-weight: bold;">
		        <td>Итого продаж</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
			        <td><?= $value[8]+$value[2] ?></td>
                    <? $sum += $value[8]+$value[2];
                } ?>
		        <td><?= $sum ?></td>
	        </tr>
            <tr>
                <td>Оплата картой курьеру</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= number_format(round($value[9]), 0, '', ' ') . " руб." ?></td>
                    <? $sum += $value[9];
                } ?>
                <td><?= number_format(round($sum), 0, '', ' ') . " руб." ?></td>
            </tr>
            <tr>
                <td>Брак</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= $value[4] ?></td>
                    <? $sum += $value[4];
                } ?>
                <td><?= $sum ?></td>
            </tr>
            <tr>
                <td>Средний чек</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= number_format($value[5], 0, '', ' ') . " руб." ?></td>
                <? } ?>
                <? $sum_full = 0 ?>
                <? foreach ($all_array as $key => $value) { ?>
                    <? $sum_full += $value[6];
                } ?>
                <?
                $full_average = $sk->action("averageCheckFull");

                $check = $full_average[0]["cnt"];
                ?>

                <td><?= number_format(round($check), 0, '', ' ') . " руб." ?></td>
            </tr>
            <tr style="font-weight: bold">
                <td>Выручка</td>
                <? $sum = 0;
                foreach ($all_array as $key => $value) { ?>
                    <td><?= number_format($value[6], 0, '', ' ') . " руб." ?></td>
                    <? $sum += $value[6];
                } ?>
                <td style="border: 3px solid red"><?= number_format($sum, 0, '', ' ') . " руб." ?></td>
            </tr>


        </table>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <table id="kernelTable" class="table table-striped table-bordered table-hover" style="width: 75%;margin: 0 auto;">
            <tr>
                <th colspan="2">ЗП курьеров</th>
            </tr>
            <?
            $query = "SELECT *,SUM(price) AS price FROM `sklad_courier_price` GROUP BY courier_name HAVING price >0";
            $arr_couriers = $sk->DB->select($query);
            foreach ($arr_couriers as $value) {
                ?>
                <tr>
                    <td>
                        <?= $value['courier_name'] ?>
                    </td>
                    <td>
                        <?= $value['price'] ?>
                    </td>
                </tr>
            <? }
            ?>
        </table>
    </div>
</div>
<br>
<?
$itogo = $sk->getSaveItogo();
$count_days = date("t", time());
$count_days_start_month = date("j", time());
$calc = ($itogo * $count_days_start_month) / $count_days;

if (($sum - $calc) > 0) {
    $class = "alert-success";
} else {
    $class = "alert-danger";
}
?>
<? if (isset($_GET['exel'])) { ?>
    <table>
        <tr>
            <td>План итого</td>
            <td><?= number_format($itogo, 0, '', ' ') ?></td>
        </tr>
        <tr>
            <td>План на сегодня</td>
            <td><?= number_format($calc, 0, '', ' ') ?></td>
        </tr>
        <tr>
            <td>Расхождение</td>
            <td><?= number_format($sum - $calc, 0, '', ' ') ?></td>
        </tr>
    </table>
<? }else{ ?>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="input-group input-group-lg">
                <span class="input-group-addon">План итого&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input id="plan" class="form-control input-lg" name="plan" value="<?= number_format($itogo, 0, '', ' ') ?>" type="text">
                <span class="input-group-btn">
            <button id="save_itogo" class="glyphicon glyphicon-floppy-saved btn btn-default" aria-hidden="true"></button>
                </span>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon">План на сегодня</span>
                <input id="this_day_plan" class="form-control" name="this_day_plan" value="<?= number_format($calc, 0, '', ' ') ?>" type="text" disabled>
                <span class="input-group-addon">руб</span>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon alert <?= $class ?>">Расхождение&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input id="difference" class="form-control" name="difference" value="<?= number_format($sum - $calc, 0, '', ' ') ?>" type="text" disabled>
            </div>
        </div>
    </div>
    <style>
        table tr td:not(:nth-child(1)) {
            text-align: center;
        }

        .glyphicon {
            position: static !important;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        (function ($) {
            $.fn.extend({
                formatPrice: function () {
                    $(this).bind("keyup", function () {
                        var elem = $(this)
                            , return_val;
                        return_val = elem.val().replace(/[^\d]/g, "").replace(/(\d)(?=(?:\d{3})+$)/g, "$1 ");
                        elem.val(return_val);
                    });
                }
            });
        })(jQuery);

        $(function () {
            $('input').formatPrice();


            $(window).unload(function () {
                var itogo = $('#plan').val();
                $.ajax({
                        type: "post",
                        url: "actions.php",
                        data: 'action=saveItogo&data=' + itogo,
                        success: function (text) {

                        }

                    }
                )
            });

            $('#save_itogo').on('click', function () {
                var itogo = $('#plan').val();
                $.ajax({
                        type: "post",
                        url: "actions.php",
                        data: 'action=saveItogo&data=' + itogo,
                        success: function (text) {

                        },
                        error: function () {
                            alert('Ошибка')
                        }
                    }
                )
            })
        })
    </script>
<? } ?>
</body>
</html>