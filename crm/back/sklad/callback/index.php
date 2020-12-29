<?
require_once(__DIR__ . "/../../classes/Sklad.php");
require_once(__DIR__ . "/../../classes/SkladSMS.php");
$sk_sms = new SkladSMS();
echo $sk_sms->callback($_POST);
//$sk_sms->insertUpdateResultSMS();
?>
