<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 09.08.17
 * Time: 12:17
 */

require_once("Configuration.php");


class Reordring
{
    public $DB;

    function __construct()
    {

        $settings = array(
            'server' => Configuration::MYSQL_SERVER,
            'username' => Configuration::MYSQL_USERNAME,
            'password' => Configuration::MYSQL_PASSWORD,
            'db' => Configuration::MYSQL_DB,
            'port' => Configuration::MYSQL_PORT,
            'charset' => Configuration::MYSQL_CHARSET,
        );
        $this->DB = new simpleMysqli($settings);
    }


    function getAllDatesReordering($desc = true)
    {
        if($desc) {
            $sql = "SELECT DATE_FORMAT(`date_reordering`, '%d.%m.%Y %H:%i') AS date FROM `sklad_reordering` ORDER BY date_reordering ASC";
        }else{
            $sql = "SELECT DATE_FORMAT(`date_reordering`, '%d.%m.%Y %H:%i') AS date FROM `sklad_reordering` ORDER BY date_reordering DESC";
        }
        return $this->DB->simpleQuery($sql);
    }

    function getRecordsByDates($date_from, $date_to)
    {
        $sql = "SELECT json_elements FROM `sklad_reordering` WHERE date_reordering
                BETWEEN STR_TO_DATE('{$date_from}', '%d.%m.%Y %H:%i' ) 
                AND STR_TO_DATE('{$date_to}', '%d.%m.%Y %H:%i' )";

        return $this->DB->simpleQuery($sql);
    }

}