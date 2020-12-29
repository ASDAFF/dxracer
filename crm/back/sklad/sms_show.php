<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 19.01.17
 * Time: 21:21
 */

require_once("../classes/Sklad.php");
require_once("../classes/SkladSMS.php");
$sk_sms = new SkladSMS();
//$res_arr = $sk_sms->getNotSendSMS();

$query = "SELECT * FROM sklad_sms ORDER BY id DESC";
$res_arr = $sk_sms->DB->select($query);

foreach ($res_arr as $value) {

echo "<pre>";
print_r($value);
echo "</pre>";
    echo "<hr>";
}