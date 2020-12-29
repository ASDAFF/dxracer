<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 09.01.17
 * Time: 14:03
 * 1. Отслеживать поступающие заказы и их номера
 *
 * 2. Отслеживать заносимые в склад заказы по их номерам
 *
 * в Статистике добавить отдельной строчкой инфу о кол-ве принятых и выполненных заказов и % выполнения высчитывать.
 */
require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("Sklad.php");
require_once("Configuration.php");

class WorkINGlobalDB
{

    public $DB_WT;
    public $date_from;
    private $date_to;

    function __construct() //если нужно то используем БД от WT
    {
        $settings = array(
            'server' => Configuration::MYSQL_SERVER,
            'username' => Configuration::MYSQL_USERNAME,
            'password' => Configuration::MYSQL_PASSWORD,
            'db' => Configuration::MYSQL_DB_SITE,
            'port' => Configuration::MYSQL_PORT,
           // 'charset' => 'cp1251',
        );

        $this->DB_WT = new simpleMysqli($settings);


    }

    /**
     * @return array
     * Получаем количество заказов с WT
     */
    function getEventTableCnt()
    {
        $arr_out = array();
        $sk = new Sklad();
        $this->date_from = $sk->getLastDateCloseSklad();
        $this->date_to = date('Y-m-d 23:59:59');
//        $this->date_to = '2019-06-30 23:59:59';
        $sql = "SELECT C_FIELDS FROM `b_event` WHERE `EVENT_NAME` IN ('NEW_ORDER_FROM_SEARCH','SALE_NEW_ORDER')
                AND DATE_INSERT BETWEEN 
                STR_TO_DATE('{$this->date_from}', '%Y-%m-%d %H:%i:%s') 
                AND 
                STR_TO_DATE('{$this->date_to}', '%Y-%m-%d %H:%i:%s')
                ORDER BY ID DESC ";

        $arr = $this->DB_WT->simpleQuery($sql);

        while ($res = $arr->fetch_row()) {

//            preg_match('/CODE_FOR_CLIENT=[A-Z0-9]{1,10}/', $res[0], $value);

            $uns_arr =  unserialize($res["C_FIELDS"]);
//        preg_match('/ORDER_ID=[A-Z0-9]{1,10}/', $arr["C_FIELDS"], $value);

//        if (count($value) > 0) {
            $arr_out[] = $uns_arr['ORDER_ID'];
        }

//        $arr_CL = $this->getEventTableCntByCL();
//        $arr_out = array_merge($arr_out, $arr_CL);

        return $arr_out;
    }


    /**
     * @return int|
     * получаем количество заказов с CL
     */
//    private function getEventTableCntByCL()
//    {
//        $stream_opts = [
//            "ssl" => [
//                "verify_peer" => false,
//                "verify_peer_name" => false,
//            ]
//        ];
//        $res = file_get_contents('https://maxwatches.ru/api/?getCountOrders=1&auth=XDFDD3e45fvsdfvvfg4&date_from=' . $this->date_from, false, stream_context_create($stream_opts));
//
//        return json_decode($res, true);
//
//    }


}