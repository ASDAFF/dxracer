<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 26.08.16
 * Time: 13:15
 */
require_once("../classes/Sklad.php");

$save = $_REQUEST["save"];
$date_to = $_REQUEST["date_to"];
$date_from = $_REQUEST["date_from"];
$sk = new Sklad();
if(isset($_REQUEST["id"])){
    $arr = $sk->getOneReorder($_REQUEST["id"]);

}else{
    $arr = $sk->reOrder($save, $date_from, $date_to);
}

header('Content-Type: text/html; charset=windows-1251');
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-transfer-encoding: binary');
header('Content-Disposition: attachment; filename=Дозаказ_'.date('d.m.Y').'.xls');
header('Content-Type: application/x-unknown');
?>
<table>
	<tr>
		<td>Наим.</td>
		<td>кол.</td>
		<td>склад(кол.)</td>
	</tr>
    <? foreach ($arr as $key => $value) { ?>
	    <tr>
		    <td><?= $key ?></td>
		    <td><?= $value["cnt"] ?></td>
		    <td><?= $value["cnt_skld"] ?></td>
	    </tr>
    <? } ?>

</table>

