<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 26.09.16
 * Time: 20:09
 */

require_once(__DIR__ . "/../../classes/UpdatePrice.php");
require_once(__DIR__ . "/../../classes/Utils.php");


$iteration = 0;
$up_price = new UpdatePrice();

$up_price->dop_sql_limit = "";

$day_of_week = date('N'); //Порядковый номер дня недели в соответствии со стандартом ISO-8601 (добавлен в версии PHP 5.1.0)
$time = date('H:i');
$schedule = $up_price->getSchedule($day_of_week);

if ((php_sapi_name() === 'cli'
        AND $schedule['active'] == 1
        AND $schedule['time']==$time)
    OR (isset($argv[1]) AND $argv[1]=='HandStart')) {
//    exec('/etc/init.d/tor start');

    $date_cur = date('d.m.Y0');
    echo "текущая дата " . $date_cur . "\n";
    $up_price->getAction('campaigns');

//    $up_price->campaigns_id = $up_price->result->response->campaigns[0]->id;
    $up_price->campaigns_id = 10403;

    $up_price->getAction('getInfoPriceCampaign'); //получаем данные о загруженном прайс-листе и

    $date_price_update = date('d.m.Y', strtotime($up_price->result->response->createdAt));

    echo "Дата последнего обновления прайса " . $date_price_update . "\n";

    if ($date_price_update != $date_cur) { // смотрим текущую дату если дата не совпадает тогда обновляем прайс

        $up_price->getByTradeTime();
        echo "Получаем данные с MS\n";
        $up_price->getAction('setPrice');
        echo "Обновляем прайс\n";
    }

    do {
        $up_price->getAction('getInfoPriceCampaign'); //получаем данные о загруженном прайс-листе и
        if (in_array($up_price->result->response->status, array("ERROR", "NOT_ENOUGH_BALANCE_TO_PROCESS"))) {
            die("Ошибка при получении данных прайса {$up_price->result->response->status}");
        }
        sleep(20);
        $iteration++;
        if ($iteration == 30) {
            die("Ошибка");
        }
    } while ($up_price->result->response->status != "PROCESSED");
    $iteration=0;
//---------------------------------------------------//

    $up_price->getAction('getAllReports');
    $up_price->report_id = $up_price->result->response->reports[0]->id; //получаем id отчета (получаем последний созданный отчет)
    echo "получаем id отчета (получаем последний созданный отчет) id-" . $up_price->report_id . "\n";

    $up_price->getAction('getInfoReport'); //получаем информацию по отчету
    $date_report_update = date('d.m.Y', strtotime($up_price->result->response->createdAt));
    echo "Дата последнего отчета " . $date_report_update . "\n";

    $up_price->countOkProducts = $up_price->result->response->countOkProducts; //получаем количество поизиций
    echo "получаем количество поизиций в отчете" . $up_price->countOkProducts . "\n";


    if ($date_price_update != $date_cur) { // смотрим текущую дату если дата не совпадает тогда обновляем отчет
        $up_price->getAction('startReport');
        echo "Создаем отчет\n";
        $up_price->report_id = $up_price->result->response->id; //получаем id отчета
        echo "получаем id отчета id-{$up_price->report_id}\n";
    }

    $report_finished=false;
    do {

        $up_price->getAction('getAllReports');
        $up_price->report_id = $up_price->result->response->reports[0]->id; //получаем id отчета (получаем последний созданный отчет)
        echo "получаем id отчета (получаем последний созданный отчет)\n";

        $up_price->getAction('getInfoReport'); //получаем информацию по отчету
        $date_report_update = date('d.m.Y', strtotime($up_price->result->response->createdAt));
        echo "Дата последнего отчета " . $date_report_update . "\n";

        $up_price->countOkProducts = $up_price->result->response->countOkProducts; //получаем количество поизиций

        if ($up_price->result->response->isSuccessfullyFinished == 1 AND $date_price_update != $date_cur) {//отчет готов

            $up_price->insertReport(true); //только очишаяем таблицы

            $count_pages = ceil($up_price->countOkProducts / 25);
            for ($p = 1; $p <= $count_pages; $p++) {
                $up_price->page = $p;
                $up_price->getAction('getResultParsing');
                $up_price->insertReport();
            }

            $up_price->calc1Group(); //пересчитываем
            $report_finished = true;
        } else {
            echo "Отчет не готов\n";
            echo "\n";
            sleep(60);
            $iteration++;
            if ($iteration == 30) {
                $subject = "=?utf-8?B?".base64_encode("Отчет по ценам MS (Ошибка) от ")."?=";
                Utils::sendFilesOnMail("admin@monarchshop.ru", $subject  . date('m-d-Y'), "",false);
                Utils::sendFilesOnMail("rroldugin@gmail.com", $subject . date('m-d-Y'), "",false);
                die("Ошибка");
            }
        }

    } while (!$report_finished);
//
//
//    $subject = iconv("UTF-8", "windows-1251", );
    $subject = "=?utf-8?B?".base64_encode("Отчет по ценам от ")."?=";
    Utils::sendFilesOnMail("admin@monarchshop.ru",  $subject. date('m-d-Y'), "<a href='http://crm.monarchshop.ru/m/update_price/'>Ссылка MS</a>",false);
    Utils::sendFilesOnMail("rroldugin@gmail.com",  $subject. date('m-d-Y'), "<a href='http://crm.monarchshop.ru/m/update_price/'>Ссылка MS</a>",false);
//    exec('/etc/init.d/tor stop');
}else{
    die();
}
?>