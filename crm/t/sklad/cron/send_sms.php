<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 17.01.17
 * Time: 14:33
 */

require_once(__DIR__ . "/../../classes/Sklad.php");
require_once(__DIR__ . "/../../classes/SkladSMS.php");
$sk_sms = new SkladSMS();
$res_arr = $sk_sms->getNotSendSMS();

foreach ($res_arr as $value) {

    if ($value['project'] == 'KW') {
        $sk_sms->from = 'KingWatches';
        $sk_sms->sendSms_KW($value['phone'], $value['text']);
    }

    if ($value['project'] == '9PM') {
        $sk_sms->from = '9PM';
        $sk_sms->sendSms_KW($value['phone'], $value['text']);
    }

    if ($value['project'] == 'MS') {
        $sk_sms->from = 'maxwatches';
        $sk_sms->sendSms_KW($value['phone'], $value['text']);
    }


    $sk_sms->insertUpdateResultSMS($value['id']);
}