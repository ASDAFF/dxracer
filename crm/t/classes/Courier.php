<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 07.11.16
 * Time: 22:51
 */

require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("Configuration.php");

class Courier
{
    public $DB;

    function __construct()
    {
        setlocale(LC_ALL, 'ru_RU.utf8');
        $settings = array(
            'server' => Configuration::MYSQL_SERVER,
            'username' => Configuration::MYSQL_USERNAME,
            'password' => Configuration::MYSQL_PASSWORD,
            'db' => Configuration::MYSQL_DB,
            'port' => Configuration::MYSQL_PORT,
            'charset' => Configuration::MYSQL_CHARSET

        );
        $this->DB = new simpleMysqli($settings);
    }

    public function addEditCourier($name, $id=0,$pass_seriya,$pass_nomer,$pass_vidan,$adress)
    {


        if(empty($name) and $id>0){
            $sql ="DELETE FROM `courier` WHERE `id` = {$id}";
            $this->DB->delete($sql);
            return json_encode(array('error' => 0, 'text' => 'Удалили','sql'=>$sql));
        }

        if ($id > 0) {
            $sql = "UPDATE `courier` SET 
                          `name` =  '{$name}',
                          `pass_seriya` =  '{$pass_seriya}',
                          `pass_nomer` =  '{$pass_nomer}',
                          `pass_vidan` =  '{$pass_vidan}',
                          `adress` =  '{$adress}'
                           WHERE `id` =$id";
            if ($this->DB->update($sql)) {
                return json_encode(array('error' => 1, 'text' => 'Ошибка при добавлении куррьера','sql'=>$sql));
            } else {
                return json_encode(array('error' => 0, 'text' => 'Курьер добавлен(обновление)','sql'=>$sql));
            }
        } else {

            $sql = "INSERT INTO `courier` (
                    `id`,
                    `name`,
                    `pass_seriya`,
                     `pass_nomer`,
                     `pass_vidan`,
                     `adress`
                    ) 
                    
                    VALUES (NULL, '{$name}','{$pass_seriya}','{$pass_nomer}','{$pass_vidan}','{$adress}');";
            if ($this->DB->insert($sql)) {
                return json_encode(array('error' => 1, 'text' => 'Ошибка при добавлении куррьера','sql'=>$sql));
            } else {
                return json_encode(array('error' => 0, 'text' => 'Курьер добавлен(вставка)','sql'=>$sql));
            }
        }

    }

    public function getAllCourier()
    {
        $sql = "SELECT * FROM `courier`";

        return $this->DB->select($sql);
    }

    public function getOneCourier($id)
    {
        $sql = "SELECT * FROM `courier` WHERE `id`=$id";

        return $this->DB->selectRow($sql);
    }

    public function getOrg($id=1){
        $sql = "SELECT `name` FROM `courier_org` WHERE `id`=$id";

        return $this->DB->selectCell($sql);
    }

    public function setOrg($id=1,$name){
        $sql = "UPDATE `courier_org` SET `name` =  '{$name}' WHERE `id` =$id";
        return $this->DB->update($sql);
    }
}