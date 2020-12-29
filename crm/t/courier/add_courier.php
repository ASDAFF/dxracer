<? require_once("../classes/Courier.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Склад</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../js/jquery-1.11.1.min.js?<?= md5_file('js/jquery-1.11.1.min.js'); ?>"></script>
    <style>
        .glyphicon {
            top: 0 !important;
        }
    </style>
    <script>
        $(function () {
            $('body input').filter(function () {
                return this.value == 'here'
            }).val('gone');


            $('#add_new_courier').on('click', function () {
                $('.for_clone:last').clone().insertBefore('.add_courier').show();
            })

            $('body').on('submit', 'form', function (event) {
                event.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    url: 'ajax.php',
                    type: "POST",
                    data: data,
                    success: function (data) {
                        var result = $.parseJSON(data);
                        console.log(result.text);
                        console.log(result.sql);
                    }
                });

            })


        })
    </script>
</head>
<body>
<div class="container">
    <h2>Курьеры</h2>
    <?
    $courier = new Courier();
    $arr = $courier->getAllCourier();

    foreach ($arr as $value) {
        ?>
        <form class="this_courier form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">ФИО </label>
                <div class="col-sm-10">
                    <input id="name" name="name" type="text" value="<?= $value["name"] ?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pass_seriya">Серия</label>
                <div class="col-sm-10">
                    <input id="pass_seriya" name="pass_seriya" type="text" value="<?= $value["pass_seriya"] ?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pass_nomer">Номер</label>
                <div class="col-sm-10">
                    <input id="pass_nomer" name="pass_nomer" type="text" value="<?= $value["pass_nomer"] ?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pass_vidan">Выдан</label>
                <div class="col-sm-10">
                    <input id="pass_vidan" name="pass_vidan" type="text" value="<?= $value["pass_vidan"] ?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="adress">Адрес</label>
                <div class="col-sm-10">
                    <input id="adress" name="adress" type="text" value="<?= $value["adress"] ?>" class="form-control">
                </div>
            </div>

            <input name="id" type="hidden" value="<?= $value["id"] ?>">
            <input name="action" type="hidden" value="addEdit">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Сохранить</button>
                </span>
            <hr>
        </form>
    <? } ?>
    <div class="row add_courier">
        <div class="input-group col-lg-3 col-lg-offset-4">
            <button id="add_new_courier" class="btn btn-info" type="button">Добавить курьера</button>
        </div>
    </div>
</div>

<form class="this_courier form-horizontal for_clone" style="display: none">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">ФИО </label>
        <div class="col-sm-10">
            <input id="name" name="name" type="text" value="" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pass_seriya">Серия</label>
        <div class="col-sm-10">
            <input id="pass_seriya" name="pass_seriya" type="text" value="" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pass_nomer">Номер</label>
        <div class="col-sm-10">
            <input id="pass_nomer" name="pass_nomer" type="text" value="" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pass_vidan">Выдан</label>
        <div class="col-sm-10">
            <input id="pass_vidan" name="pass_vidan" type="text" value="" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="adress">Адрес</label>
        <div class="col-sm-10">
            <input id="adress" name="adress" type="text" value="" class="form-control">
        </div>
    </div>

    <input name="id" type="hidden" value="">
    <input name="action" type="hidden" value="addEdit">
    <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Сохранить</button>
                </span>
    <hr>
</form>

</body>
</html>