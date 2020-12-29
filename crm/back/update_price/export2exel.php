<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 12.11.17
 * Time: 13:45
 */
require_once("../classes/UpdatePrice.php");
require_once("../classes/PHPExcel.php");

$up_price = new UpdatePrice();
$arr = $up_price->genKernelTable();

if (isset($_GET['gen_file'])) {
    $up_price = new UpdatePrice();
    $arr = $up_price->genKernelTable();
    foreach ($arr as $for_count_competitor) {
        $temp_arr[$for_count_competitor['model']]++;

        $table_arr[$for_count_competitor['model']]["competitor_arr"][$for_count_competitor['competitor']] = $for_count_competitor['price'];
        $table_arr[$for_count_competitor['model']]["cur_price"] = $for_count_competitor['cur_price'];
        $table_arr[$for_count_competitor['model']]["recalc_price"] = $for_count_competitor['recalc_price'];
        $table_arr[$for_count_competitor['model']]["cnt"] = $for_count_competitor['cnt'];
        $table_arr[$for_count_competitor['model']]["percent_change"] = $for_count_competitor['percent_change'];
    }
    $competitor_max = max($temp_arr);
    ?>
	<table id="generalTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
		<tr style="font-size: 12px">
			<th>Часы</th>
			<th>Кол-во</th>
			<th>Текущая цена</th>
			<th>Расчётная цена</th>
			<th>%</th>
			<?for($m=1;$m<=$competitor_max;$m++){?>
			<th>Конкурент<?=$m?></th>
			<th>Цена конкурента<?=$m?></th>
			<?}?>

		</tr>
		</thead>
		<tbody>
        <?foreach ($table_arr as $key => $value){?>
		<tr>
			<td><?=$key?></td>
			<td><?=$value["cnt"]?></td>
			<td><?=$value["cur_price"]?></td>
			<td><?=$value["recalc_price"]?></td>
			<td><?=$value["percent_change"]?></td>
			<?foreach ($value["competitor_arr"] as $c_key => $c_value){?>
				<td><?=$c_key?></td>
				<td><?=$c_value?></td>
			<?}?>
		</tr>
		<?}?>
		</tbody>
	</table>
<? } else {
    date_default_timezone_set('Etc/GMT+3');
    $file_name = 'export2exel.html';
    $data = file_get_contents('https://sklad:132449@crm.maxwatches.ru/t/update_price/export2exel.php?gen_file=1');

    $f = fopen($file_name, 'w');
    fwrite($f, $data);
    fclose($f);

    $objPHPExcel1 = PHPExcel_IOFactory::load($file_name);
    $objPHPExcel1->getActiveSheet()->setTitle("Цены");
    foreach (array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T') as $val_col) {
        $objPHPExcel1->getActiveSheet()->getColumnDimension($val_col)->setAutoSize(true);
    }


    $date = date('d.m.Y H:i:s');
//    header('Content-type: application/vnd.ms-excel');
//    header('Content-Disposition: attachment; filename="update_price' . $date . '.xls"');
//    header("Cache-Control: max-age=0");
//    ob_end_clean();
    // Write file to the browser
//    $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel1);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel1, 'Excel2007');
//    $objWriter->save('php://output');
    $objWriter->save('update_price' . $date . '.xls');
    ob_end_clean();
    header('Location: https://crm.maxwatches.ru/t/update_price/update_price' . $date . '.xls');
    exit;

} ?>
		
		
		