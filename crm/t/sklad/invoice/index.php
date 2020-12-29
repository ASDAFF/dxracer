<?
if($_SERVER['REMOTE_USER']=='sklad'){
    $admin = true;
}else{
    $admin = false;
}

if(!$admin){
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
    <title>Закупка</title>

    <!-- Bootstrap -->
    <link href="/t/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Modal purchase-->
<?
require_once("../../classes/Sklad.php");
require_once("../../classes/Invoice.php");

$invoice = new Invoice();
$arr = $invoice->getAllInvoice();

?>
<div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Закупка</h4>
            <input type="checkbox" name="two_col">Выгрузка в 2 столбца
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Дата</th>
                    <th>Поставщик</th>
                    <th>Статус</th>
                    <th class="text-right">Выгрузки</th>
                    <th class="text-right">Комментарий</th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($arr as $value) { ?>
                    <tr class="<?= $value['close'] == 0 ? "alert-success" : "alert-danger hide" ?> alert " data-toggle="collapse" data-target="#invoice_content_<?= $value['id'] ?>"
                        style="cursor: pointer;">
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['date_insert'] ?></td>
                        <td><?= $value['provider'] ?></td>
                        <td><?= $value['close'] == 0 ? "Открыта" : "Закрыта" ?></td>
                        <td class="text-right">
                            <a href="export.php?id_invoice=<?= $value["id"] ?>&tip=all" type="button" class="btn btn-xs btn-info export">
                                <span class="glyphicon glyphicon-flash"></span>Все
                            </a>
                            <a href="export.php?id_invoice=<?= $value["id"] ?>&tip=in" type="button" class="btn btn-xs btn-warning export">
                                <span class="glyphicon glyphicon-plane"></span>В пути
                            </a>
                            <a href="export.php?id_invoice=<?= $value["id"] ?>&tip=not" type="button" class="btn btn-xs btn-danger export">
                                <span class="glyphicon glyphicon-trash"></span>Не пришли
                            </a>
                            <a href="export.php?id_invoice=<?= $value["id"] ?>&tip=ok" type="button" class="btn btn-xs btn-success export">
                                <span class="glyphicon glyphicon-ok"></span>Пришли
                            </a>
                        </td>
                        <td class="text-right">
                            <button type="button" class="btn btn-xs btn-default comment tooltip_el" title="<?= $value['comment'] ?>" data-text="<?= $value['comment'] ?>" data-placement="bottom" data-toggle="modal"
                                    data-target="#edit_comment" data-id="<?= $value["id"] ?>">
                                <span class="glyphicon glyphicon-pencil"></span>Коммент
                            </button>


                        </td>
                        <? $invoice_content = $invoice->getContentInvoice($value['id']) ?>
                    </tr>
                    <tr id="invoice_content_<?= $value['id'] ?>" class="collapse">
                        <td colspan="3">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Наименование</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <? foreach ($invoice_content as $element) { ?>
                                    <? if (is_null($element['date_get']) AND $element['not_obtained'] == 0) {
                                        $class_alert = "alert-warning";
                                    } elseif ($element['not_obtained'] == 1) {
                                        $class_alert = "alert-danger ";
                                    } else {
                                        $class_alert = "alert-success";
                                    } ?>


                                    <tr class="<?= $class_alert ?>">
                                        <td><?= $element["model"] ?></td>
                                        <td><?= is_null($element['date_get']) ? "" : date('d.m.Y', strtotime($element['date_get'])) ?></td>
                                        <td class="status">
                                            <? if (is_null($element['date_get']) AND $element['not_obtained'] == 0) { ?>
                                                В пути
                                            <? } elseif ($element['not_obtained'] == 1) { ?>
                                                Не получены
                                            <? } else { ?>
                                                Получены
                                            <? } ?>

                                        </td>
                                        <td>
                                            <? if (is_null($element['date_get']) AND $element['not_obtained'] == 0) { ?>
                                                <button data-id="<?= $element["id"] ?>" type="button" class="btn btn-xs btn-danger not_obtained">
                                                    <span class="glyphicon glyphicon-trash"></span>Не получены
                                                </button>
                                            <? } ?>
                                        </td>
                                    </tr>
                                <? } ?>
                            </table>
                        </td>
                    </tr>
                <? } ?>


                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#new_invoce">
                <span class="glyphicon glyphicon-plus"></span> Создать накладную
            </button>
	        <button type="button" class="btn btn-success btn-sm pull-left" data-toggle="modal" data-target="#add_positions">
		        <span class="glyphicon glyphicon-plus"></span>Добавить в накладную
	        </button>
        </div>
    </div>
</div>


<!-- add invoce -->
<div class="modal fade" id="new_invoce" role="dialog">
    <div class="modal-dialog modal-lg">
        <form id="new_invoce_form">
            <input type="hidden" name="action" value="newInvoce">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Новая накладная</h4>
                    <div class="alert alert-info">
                        <p>
                            единым столбцом с повторами <br>
                            или <br>
                            двумя столбцами без повторов с указанием количества во втором столбце.
                        </p>
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
                        <label for="provider">Поставщик</label>
                        <input id="provider" name="provider" type="text" class="input-sm form-control" value="" required/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control vresize" rows="15" name="data" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- add invoce -->
<!-- edit comment-->
<div class="modal fade" id="edit_comment" role="dialog">
    <div class="modal-dialog modal-lg">
        <form id="edit_comment_form">
            <input type="hidden" name="action" value="edit_comment">
            <input type="hidden" name="id_invoice" value="">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Комментарий</h4>
                    <div class="alert alert-danger" style="display: none;">
                        <strong>Ошибка!</strong><span></span>
                    </div>
                    <div class="alert alert-success" style="display: none;">
                        <strong><span>Сохранено!</span></strong>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control vresize" rows="15" name="data"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- edit comment-->
<!-- добавить позиции в накладную-->
<div class="modal fade" id="add_positions" role="dialog">
	<div class="modal-dialog modal-lg">
		<form id="add_positions_form">
			<input type="hidden" name="action" value="addPos2Invoce">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Добавить позиции</h4>
					<div class="alert alert-info">
						<p>
							единым столбцом с повторами <br>
							или <br>
							двумя столбцами без повторов с указанием количества во втором столбце.
						</p>
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
						<label for="number_invent">Номер накладной</label>
						<select name="number_invent" id="number_invent" class="form-control" required>
                            <? foreach ($arr as $value) { ?>
	                            <?if($value['close'] == 1)
	                            	continue;
	                            	?>
							<option><?= $value['id'] ?></option>
							<?}?>
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control vresize" rows="15" name="data" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info">OK</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- добавить позиции в накладную-->

<!-- Modal purchase-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="/t/bootstrap/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>