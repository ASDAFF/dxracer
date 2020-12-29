<? require_once("../classes/UpdatePrice.php"); ?>
<?
$up_price = new UpdatePrice();
if (isset($_REQUEST["hand_recalc"])) {
//    die();
    $up_price->calc1Group();
    echo "ok";
    exit();
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
    <link href="/m/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?


//$up_price->getByWatchtown();
//$up_price->getByChasolink();
//if(isset($_GET["hand_recalc"])) {
//    $up_price->calc1Group();
//    die();
//}
$arr = $up_price->genKernelTable();

?>
<div class="table-responsive" style="margin-top: 30px;">
    <form id="all">
        <table id="generalTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
            <thead>
            <tr style="font-size: 12px">
                <th>Часы</th>
                <th>Кол-во</th>
                <th>Не менять цену</th>
                <th>Текущая цена</th>
                <th>Расчётная цена</th>
	            <th>Спец</th>
                <th>Новая цена</th>
                <th>%</th>
                <th>Конкурент1</th>
                <th>Цена конкурента1</th>
                <th>Конкурент2</th>
                <th>Цена конкурента2</th>
                <th>Конкурент3</th>
                <th>Цена конкурента3</th>
                <th>Конкурент4</th>
                <th>Цена конкурента4</th>
                <th>Конкурент5</th>
                <th>Цена конкурента5</th>
            </tr>
            </thead>
            <tbody>
            <? for ($i = 0; $i < count($arr); $i++) {

                unset($con);
                unset($price);

                $con[1] = $arr[$i]["competitor"];
                $price[1] = $arr[$i]["price"];

                if ($arr[$i]["model"] == $arr[$i + 1]["model"]) {
                    $con[2] = $arr[$i + 1]["competitor"];
                    $price[2] = $arr[$i + 1]["price"];
                    $i++;
                }

                if ($arr[$i]["model"] == $arr[$i + 2]["model"]) {
                    $con[3] = $arr[$i + 2]["competitor"];
                    $price[3] = $arr[$i + 2]["price"];
                    $i++;
                }

                if ($arr[$i]["model"] == $arr[$i + 3]["model"]) {
                    $con[4] = $arr[$i + 3]["competitor"];
                    $price[4] = $arr[$i + 3]["price"];
                    $i++;
                }

                if ($arr[$i]["model"] == $arr[$i + 4]["model"]) {
                    $con[5] = $arr[$i + 4]["competitor"];
                    $price[5] = $arr[$i + 4]["price"];
                    $i++;
                }

                if ($arr[$i]["specialoffer"]) {
                    $spec = 1;
                    $spec_checked = "checked";
                } else {
                    $spec = 0;
                    $spec_checked = "";
                }


                if ($arr[$i]["dnt_chn_price"]) {
                    $dnt_chn_price = 1;
                    $dnt_chn_price_checked = "checked";
                } else {
                    $dnt_chn_price= 0;
                    $dnt_chn_price_checked = "";
                }


                while ($arr[$i]["model"] == $arr[$i + 1]["model"]) {
                    $i++;
                    if ($i >= count($arr)) {
                        break;
                    }
                }

                echo "
                    <tr id='{$arr[$i]["model"]}' style='background-color:{$arr[$i]["color"]} '>
                        <td>{$arr[$i]["model"]}</td>
                         <td>{$arr[$i]["cnt"]}</td>
                      <td style='background: #3c763d;'>
                        <div class=\"checkbox\">
                          <label><input id=\"dnt_chn_price\" type=\"checkbox\" value=\"{$dnt_chn_price}\" {$dnt_chn_price_checked}></label>
                        </div>
                        </td>
                        <td>{$arr[$i]["cur_price"]}</td>
                        <td>{$arr[$i]["recalc_price"]}</td>                                        <td>
                        <div class=\"checkbox\">
                          <label><input id=\"spec-'{$arr[$i]["model"]}'\" type=\"checkbox\" value=\"{$spec}\" {$spec_checked}></label>
                        </div>
                        </td>
                        
                        <td>
                        <div class=\"input-group\">
                        <input name=\"new_recalc_price[{$arr[$i]["model"]}]\" type='number' value='{$arr[$i]["recalc_price"]}' class=\"form-control\" style='width: 85px;'>
                         <span class=\"input-group-btn\">
                          <button id=\"save_price\" class=\"btn btn-default glyphicon glyphicon-floppy-saved\" type=\"button\"></button>
                        </span>
             
                        </div>
                        </td>
                        <td>{$arr[$i]["percent_change"]}</td>
                        <td>$con[1]</td>
                        <td>$price[1]</td>
                        <td>$con[2]</td>
                        <td>$price[2]</td>
                        <td>$con[3]</td>
                        <td>$price[3]</td>
                        <td>$con[4]</td>
                        <td>$price[4]</td>
                        <td>$con[5]</td>
                        <td>$price[5]</td>
                    </tr>
                ";


            } ?>
            </tbody>
        </table>
    </form>
    <div class="row">
        <div class="col-lg-12 fixed">
            <button id="save_new_price" type="button" class="btn btn-info">Сохранить</button>
            <button id="update_all_price" type="button" class="btn btn-success">Загрузить цены</button>
            <button id="history" type="button" class="btn btn-warning" data-toggle="modal" data-target="#showHistory">История цены</button>
            <button id="history" type="button" class="btn btn-alert" data-toggle="modal" data-target="#gridСoefficients">Сетка коэффициентов</button>
            <button id="recalcByCoef" type="button" class="btn btn-danger">Пересчитать по коэффициентам</button>
            <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#schedule">Расписание парсинга</button>
            <button id="startHandUpdate" type="button" class="btn btn-danger">Запуск парсинга</button>
            <!--            <span>--><? //= $all_count ?><!--</span>-->
        </div>

    </div>
</div>

<!-- Modal showHistory-->
<div class="modal fade" id="showHistory" role="dialog">
    <div class="modal-dialog modal-sm">
        <form id="show_history_form">
            <input type="hidden" name="action" value="getLog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    Введите артикул:
                    <div class="form-group">
                        <input class="form-control" name="model" value="">
                    </div>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button id="search" type="submit" class="btn btn-info">Найти</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal showHistory-->
<!-- Modal schedule-->
<div class="modal fade" id="schedule" role="dialog">
    <div class="modal-dialog modal-lg">
        <form id="show_schedule_form">
            <input type="hidden" name="action" value="setSchedule">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    Расписание парсинга цен
                </div>

                <? $arr = $up_price->getSchedule();
                foreach ($arr as $key => $value) {
                    ?>
                    <div class="modal-body form-inline" style="text-align: center;">
                        <button class="btn btn-default <?= $value["active"] == 1 ? "active" : "" ?> day_of_week" data-toggle="button" data-time="<?= $value["id"] ?>"><?= $value["day_of_week"] ?></button>
                        <input id="time_<?= $value["id"] ?>" class="form-control input-sm" data-format="hh:mm:ss" type="time" name="time" value="<?= $value["time"] ?>">
                    </div>
                <? } ?>
            </div>
        </form>
    </div>
</div>
<!-- Modal schedule-->
<!-- Modal gridСoefficients-->
<div class="modal fade" id="gridСoefficients" role="dialog">
    <?
    $query = "SELECT * FROM  `price_settings` ";
    $arr = $up_price->DB->select($query);
    foreach ($arr as $value){
        $arr_params[$value['param']]=$value['value'];
    }
    ?>
    <div class="modal-dialog modal-lg">
        <form id="grid_coefficients_form">
            <input type="hidden" value="gridСoefficients" name="action" >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="priceUpWOopponent">Коэф роста цены в отсутствии конкурентов</label>
                                <input type="text" class="form-control" name="priceUpWOopponent" id="priceUpWOopponent" value="<?=$arr_params["priceUpWOopponent"]?>">
                            </div>
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Вариации</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="сoef2Demping12000">< 12000</label>
                                        <input type="text" class="form-control" name="сoef2Demping12000" id="сoef2Demping12000" value="<?=$arr_params["сoef2Demping12000"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="сoef2Demping1215">>= 12000 И < 15000 </label>
                                        <input type="text" class="form-control" name="сoef2Demping1215" id="сoef2Demping1215" value="<?=$arr_params["сoef2Demping1215"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="сoef2Demping1520">>= 15000 И < 20000 </label>
                                        <input type="text" class="form-control" name="сoef2Demping1520" id="сoef2Demping1520" value="<?=$arr_params["сoef2Demping1520"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="сoef2Demping2027">>= 20000 И < 27000 </label>
                                        <input type="text" class="form-control" name="сoef2Demping2027" id="сoef2Demping2027" value="<?=$arr_params["сoef2Demping2027"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="сoef2Demping2740">>= 27000 И < 40000 </label>
                                        <input type="text" class="form-control" name="сoef2Demping2740" id="сoef2Demping2740" value="<?=$arr_params["сoef2Demping2740"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="сoef2Demping40000">>= 40000 </label>
                                        <input type="text" class="form-control" name="сoef2Demping40000" id="сoef2Demping40000" value="<?=$arr_params["сoef2Demping40000"]?>">
                                    </div>
                                </div>
                            </div>
                        </div>
	                    <div class="col-lg-3">
		                    <div class="panel panel-info">
			                    <div class="panel-heading">
				                    <h3 class="panel-title">цена товара снижается на n% для спецпредложений</h3>
			                    </div>
			                    <div class="panel-body">
				                    <div class="form-group">
					                    <label for="сoef2Spec12000">< 12000</label>
					                    <input type="text" class="form-control" name="сoef2Spec12000" id="сoef2Spec12000" value="<?=$arr_params["сoef2Spec12000"]?>">
				                    </div>
				                    <div class="form-group">
					                    <label for="сoef2Spec1215">>= 12000 И < 15000 </label>
					                    <input type="text" class="form-control" name="сoef2Spec1215" id="сoef2Spec1215" value="<?=$arr_params["сoef2Spec1215"]?>">
				                    </div>
				                    <div class="form-group">
					                    <label for="сoef2Spec1520">>= 15000 И < 20000 </label>
					                    <input type="text" class="form-control" name="сoef2Spec1520" id="сoef2Spec1520" value="<?=$arr_params["сoef2Spec1520"]?>">
				                    </div>
				                    <div class="form-group">
					                    <label for="сoef2Spec2027">>= 20000 И < 27000 </label>
					                    <input type="text" class="form-control" name="сoef2Spec2027" id="сoef2Spec2027" value="<?=$arr_params["сoef2Spec2027"]?>">
				                    </div>
				                    <div class="form-group">
					                    <label for="сoef2Spec2740">>= 27000 И < 40000 </label>
					                    <input type="text" class="form-control" name="сoef2Spec2740" id="сoef2Spec2740" value="<?=$arr_params["сoef2Spec2740"]?>">
				                    </div>
				                    <div class="form-group">
					                    <label for="сoef2Spec40000">>= 40000 </label>
					                    <input type="text" class="form-control" name="сoef2Spec40000" id="сoef2Spec40000" value="<?=$arr_params["сoef2Spec40000"]?>">
				                    </div>
			                    </div>
		                    </div>
	                    </div>
                        <div class="col-lg-3">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">подсветка строк с ценами</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="colorwhite">от 0 белый(<=)</label>
                                        <input type="text" class="form-control" name="colorwhite" id="colorwhite" value="<?=$arr_params["colorwhite"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="colorwhite">>белый <=желтый</label>
                                        <input type="text" class="form-control" name="coloryellow" id="coloryellow" value="<?=$arr_params["coloryellow"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="colorred">> красный</label>
<!--                                        <input  type="text" class="form-control" name="colorred" id="colorred" value="--><?//=$arr_params["colorred"]?><!--">-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <button id="search" type="submit" class="btn btn-info">Сохранить</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<!-- Modal gridСoefficients-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/moment.js"></script>
<script src="locale/ru.js"></script>
<script src="js/transition.js"></script>
<script src="js/collapse.js"></script>
<script src="/m/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.inputmask.bundle.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script src="js/script.js?<?= time() ?>"></script>
</body>
</html>