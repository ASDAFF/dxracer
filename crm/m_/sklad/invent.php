<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 22.10.16
 * Time: 23:10
 */
ini_set('output_buffering', true); // no limit
ini_set('output_buffering', 12288); // 12KB limit
require_once("../classes/Sklad.php");
require_once("../classes/dompdf/dompdf_config.inc.php");
$sk = new Sklad();

if(!isset($_REQUEST["id"])) {

    $sql = "SELECT
  SC.model,
  count(model) AS cnt
FROM `sklad_coming` AS SC
WHERE SC.id NOT IN (
  SELECT model_id
  FROM `sklad_sales`
  UNION
  SELECT model_id
  FROM `sklad_shipment`
  UNION
  SELECT model_id
  FROM `sklad_discard`

)
GROUP BY model
ORDER BY SC.sort,SC.model ASC
                ";
    $result_db_arr = $sk->DB->select($sql);
    $sk->insertInvent(json_encode($result_db_arr));
}else {

    $result_db_arr = json_decode($sk->getInvent((int)$_REQUEST["id"]), true);
}

if(isset($_REQUEST['exel'])){

    $data = date("d.m.Y");
    header('Content-Type: text/html; charset=windows-1251');
    header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    header('Content-transfer-encoding: binary');
    header('Content-Disposition: attachment; filename=Инвентаризация_'.$data.'.xls');
    header('Content-Type: application/x-unknown');?>
    <table>
        <? foreach ($result_db_arr as $value) {?>
            <tr>
                <td><?= $value["model"] ?></td>
                <td><?= $value["cnt"] ?></td>
            </tr>

        <? }?>
    </table>


<?}else {

    $out = '<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Transitional//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\'>
<html xmlns=\'http://www.w3.org/1999/xhtml\'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
	body{
	    text-align: center;
	}
		table {
			border-collapse: collapse;
			display: inline-block;
			width: 30%;
			    font-size: 14px;
			
			font-weight: bold;
		}

		td {
			border: 1px solid #000;
	
		}
		
		td:nth-child(1){
		text-align: left;
		}
		
		td:nth-child(2){
		text-align: center;
		}

	</style>
</head>

<body>';


    $out .= ' 
<table>

    <tr>
        <td>Часы</td>
        <td>Кол-во</td>
        <td>Факт</td>
    </tr>
   
';

    $count_table = 0;
    $count_string = 0;
    foreach ($result_db_arr as $value) {


        if ($count_string >= 40) {
            $count_table++;
            $count_string = 0;
            if ($count_table >= 3) {
                $break = '<div style="page-break-before: always;"></div>';
                $count_table = 0;
            } else {
                $break = "";
            }


            $out .= '</tbody></table>' . $break . '
                <table>
                <tr>
                    <td>Часы</td>
                    <td>Кол-во</td>
                    <td>Факт</td>
                </tr>
                ';

        }

        $out .= "<tr>
                <td>
                {$value["model"]}
                </td>
                <td>
                {$value["cnt"]}
                </td>
                <td></td>
            </tr>";

        $count_string++;
    }

    $out .= '</table>';


    $out .= '
<script type="text/javascript">
	window.print();
</script>
</body></html>';
    echo $out;
}
//
//$dompdf = new DOMPDF();
//$dompdf->load_html($out);
////$dompdf->set_paper('a4', 'portrait');
//$dompdf->render();
//$dompdf->stream('Инвентаризация'. 'pdf');
//$pdf = $dompdf->output();
//file_put_contents(__DIR__."/1.pdf", $pdf);


