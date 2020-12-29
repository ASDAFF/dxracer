<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 26.08.16
 * Time: 13:15
 */
require_once("../classes/Sklad.php");
require_once("../classes/Reordring.php");

$date_to = $_REQUEST["date_to"];
$date_from = $_REQUEST["date_from"];

$reordering = new Reordring();
$res = $reordering->getRecordsByDates($date_from, $date_to);


$arr_out = array();

while ($arr = $res->fetch_assoc()) {

    $elements = json_decode($arr['json_elements']);
    if (is_array($elements)) {

        foreach ($elements as $val_arr) {
            $arr_out[$val_arr[0]]["cnt"] +=1;
        }
    } elseif (is_object($elements)) {
        $elements = json_decode($arr['json_elements'],true);
        foreach ($elements as $key_arr => $val_arr) {
            $arr_out[$key_arr]["cnt"] +=$val_arr["cnt"];
        }
    }


}
ksort($arr_out);
header('Content-Type: text/html; charset=windows-1251');
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-transfer-encoding: binary');
header("Content-Disposition: attachment; filename=Продажи за период_({$date_from} - {$date_to}).xls");
header('Content-Type: application/x-unknown');
?>
<table>
	<tr>
		<td>Наим.</td>
		<td>кол.</td>
	</tr>
    <? foreach ($arr_out as $key => $value) { ?>
		<tr>
			<td><?= $key ?></td>
			<td><?= $value["cnt"] ?></td>
		</tr>
    <? } ?>

</table>

