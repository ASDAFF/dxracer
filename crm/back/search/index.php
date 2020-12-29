<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Поиск</title>

	<!-- Bootstrap -->
	<link href="/t/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/t/bootstrap/js/bootstrap.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.nowrap {
			white-space: nowrap;
		}
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
	<div class="row">
		<form id="searchForm" class="col-lg-6 col-lg-push-3">
	          <span class="button-checkbox">
			        <button type="button" class="btn" data-color="refusals">Отказы</button>
			        <input type="checkbox" class="hidden" name="Refusals" checked/>
            </span>
			<span class="button-checkbox">
			        <button type="button" class="btn" data-color="problems">Проблемы</button>
			        <input type="checkbox" class="hidden" name="Problems" checked/>
            </span>
			<span class="button-checkbox">
			        <button type="button" class="btn" data-color="other">Прочее</button>
			        <input type="checkbox" class="hidden" name="Other" checked/>
            </span>
			<span class="form-group pull-right">
				<a onclick="logout()" class="btn btn-danger">Выход(<?= $_SERVER['REMOTE_USER'] ?>)</a>
			</span>
			<div class="form-group">

				<label for="Refusals">Отказы</label>
				<input id="Refusals" type="text" class="form-control" placeholder="Искать" name="search">
				<!--                <span class="input-group-btn">-->
				<!--        <button class="btn btn-default" type="button">Go!</button>-->
				<!--      </span>-->
			</div><!-- /input-group -->
		</form><!-- /.col-lg-6 -->
	</div>
</div>
<div class="container" style="color:black">
	<div id="search_result" class="row">
        <?
        if (isset($_GET['search'])) {
            require_once("../classes/Sklad.php");
            require_once("../classes/Search.php");
            $search = new Search();
            echo $search->globalSearch($_REQUEST["search"]);
        }
        ?>

	</div>
    <?
    if ($_SERVER['REMOTE_USER'] == 'sklad') {

        require_once("../classes/Sklad.php");
        require_once("../classes/Search.php");


        $search = new Search();
        echo $search->globalSearchAdmin("all", 1, 1, 1, 10000, 10000);
    }
    ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="script.js?<?=time()?>"></script>
</body>
</html>