<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 31.08.16
 * Time: 0:57
 * лог выгрузок при закрытии склада
 */
require_once("../classes/Sklad.php");
require_once("../classes/PHPExcel.php");
$sk = new Sklad();
setlocale(LC_ALL, 'rus');


if (isset($_GET["id"])) {

    $base64_out_arr = $sk->action('getCloseSkladOne', (int)$_GET["id"], $_GET["type"]);
//    $base64_out_arr = base64_decode($base64_out_arr);

    $month_year = strftime(" %B  %Y", strtotime($base64_out_arr["date_insert"]));

    if (!isset($_GET["type"]))
        $base64_out_arr['base64'] = $base64_out_arr['save_statistics'];

    if ($_GET["type"] == 'SC')
        $file_name = "Склад MS {$month_year}";
    elseif ($_GET["type"] == 'SFEL')
        $file_name = "Предварительная выгрузка";
    else
        $file_name = "Статистика MS {$month_year}";

    if (isset($_GET["type"])) {

        $f = fopen('sklad.html', 'w');
        $text_html = base64_decode($base64_out_arr['base64']);
        $text_html = preg_replace('#white#', '#FFFFFF', $text_html);
        $text_html = preg_replace('#orange#', '#FFA500', $text_html);

        fwrite($f, "<table>" . $text_html . "</table>");
        fclose($f);


        $objPHPExcel1 = PHPExcel_IOFactory::load('sklad.html');
        $objPHPExcel1->setActiveSheetIndex(0);
        $objPHPExcel1->getActiveSheet()->setTitle("Склад");
        foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N') as $val_col) {
            $objPHPExcel1->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
        }

        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $file_name . '.xls"');
        header("Cache-Control: max-age=0");
        // Write file to the browser
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel2007');
        $objWriter->save('php://output');
    } else {
        $f = fopen('statistic.html', 'w');
        fwrite($f, base64_decode($base64_out_arr['save_statistics']));
        fclose($f);


        $objPHPExcel1 = PHPExcel_IOFactory::load('statistic.html');
        $objPHPExcel1->setActiveSheetIndex(0);
        $objPHPExcel1->getActiveSheet()->setTitle("Статистика");
        foreach (array('A', 'B', 'C') as $val_col) {
            $objPHPExcel1->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
        }


        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $file_name . '.xls"');
        header("Cache-Control: max-age=0");
        // Write file to the browser
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel2007');
        $objWriter->save('php://output');
    }
    exit();
}

$arr = $sk->action('closeSkladLog');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>лог выгрузок при закрытии склада</title>

	<!-- Bootstrap -->
	<link href="/m/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<ul>
    <? while ($value = $arr->fetch_assoc()) { ?>
        <? $month_year = strftime(" %B  %Y", strtotime($value["date_insert"])); ?>

		<li>
			<a href="?id=<?= $value["id"] ?>&type=<?= $value["type"] ?>"> <?= $value["type"] == "SC" ? "Склад MS $month_year" : "Предварительная выгрузка" ?> (<?= $value["date_insert"] ?>)</a>
            <? if ($value["type"] == 'SC') { ?>
				<br>
				<a href="?id=<?= $value["id"] ?>">Статистика MS <?= $month_year ?> (<?= $value["date_insert"] ?>)</a>
            <? } ?>
		</li>
    <? } ?>
</ul>
<hr>
<h1>Инвентаризация</h1>
<?
$arr = $sk->selectInvent();

?>
<ul>
    <? while ($value = $arr->fetch_assoc()) { ?>
		<li><a href="invent.php?id=<?= $value["id"] ?>"> Инвентаризация (<?= $value["date_insert"] ?>)</a></li>
    <? } ?>
</ul>


</body>
