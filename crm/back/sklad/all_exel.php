<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 26.08.16
 * Time: 13:15
 */
require_once("../classes/Sklad.php");
require_once("../classes/PHPExcel.php");

$sk = new Sklad();


//echo base64_decode($base64_out_arr['base64']);


if ($sk->action('setSkladFullExportLog')) {
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM  `sklad_close` WHERE id={$_GET['id']} LIMIT 1";
    }else{
        $sql = "SELECT * FROM  `sklad_full_export_log` ORDER BY `id` DESC LIMIT 1";
    }


    $data =  $sk->DB->selectRow($sql);

    $f = fopen('sklad.html', 'w');
    $text_html = base64_decode($data['base64']);
    $text_html = preg_replace('#white#', '#FFFFFF', $text_html);
    $text_html = preg_replace('#orange#', '#FFA500', $text_html);
    fwrite($f, $text_html);
    fclose($f);

    $f = fopen('statistic.html', 'w');
    fwrite($f, base64_decode($data['save_statistics']));
    fclose($f);

    $f = fopen('sales.html', 'w');
    fwrite($f, base64_decode($data['sales']));
    fclose($f);

    $f = fopen('refusals.html', 'w');
    fwrite($f, base64_decode($data['refusals']));
    fclose($f);

    $f = fopen('problems.html', 'w');
    fwrite($f, base64_decode($data['problems']));
    fclose($f);

    $f = fopen('other.html', 'w');
    fwrite($f, base64_decode($data['other']));
    fclose($f);


    $objPHPExcel1 = PHPExcel_IOFactory::load('sklad.html');
    $objPHPExcel1->getActiveSheet()->setTitle("Склад");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N') as $val_col) {
        $objPHPExcel1->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }


    $objPHPExcel2 = PHPExcel_IOFactory::load('statistic.html');
    $objPHPExcel2->getActiveSheet()->setTitle("Статистика");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N') as $val_col) {
        $objPHPExcel2->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }

    $objPHPExcel3 = PHPExcel_IOFactory::load('sales.html');
    $objPHPExcel3->getActiveSheet()->setTitle("Выполенные заказы");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G') as $val_col) {
        $objPHPExcel3->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }

    $objPHPExcel4 = PHPExcel_IOFactory::load('refusals.html');
    $objPHPExcel4->getActiveSheet()->setTitle("Отказы");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G') as $val_col) {
        $objPHPExcel4->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }

    $objPHPExcel5 = PHPExcel_IOFactory::load('problems.html');
    $objPHPExcel5->getActiveSheet()->setTitle("Проблеммы");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G') as $val_col) {
        $objPHPExcel5->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }


    $objPHPExcel6 = PHPExcel_IOFactory::load('other.html');
    $objPHPExcel6->getActiveSheet()->setTitle("Прочее");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G') as $val_col) {
        $objPHPExcel6->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }


    $objPHPExcel1->addExternalSheet($objPHPExcel2->getSheet(0));
    $objPHPExcel1->addExternalSheet($objPHPExcel3->getSheet(0));
    $objPHPExcel1->addExternalSheet($objPHPExcel4->getSheet(0));
    $objPHPExcel1->addExternalSheet($objPHPExcel5->getSheet(0));
    $objPHPExcel1->addExternalSheet($objPHPExcel6->getSheet(0));


    $date = date('d.m.Y H:i:s');
    header('Content-type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="Закрытие склад ' . $date . '.xls"');
    header("Cache-Control: max-age=0");

    // Write file to the browser
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel2007');
    $objWriter->save('php://output');


} else {
    echo "Ошибка";
}

