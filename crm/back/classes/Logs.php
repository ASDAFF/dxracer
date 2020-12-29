<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 28.04.17
 * Time: 16:36
 */
class Logs extends Sklad
{

    public $error_text;

    public function setLog($query=array(),$table_name){
        $who = $_SERVER['REMOTE_USER'];

        $table_name = str_replace('`', '',$table_name);

        $this->DB->transactionStart();
        foreach ($query as $value_sql){
            $value_sql = str_replace('\\', '', $value_sql);
            $value_sql = str_replace('..', '.', $value_sql);
            $value_sql = str_replace('%', '', $value_sql);


            $value_sql = str_replace($table_name, 'sklad_log_big',$value_sql);

            if(!$this->DB->insert($value_sql)){

                
                $this->error_text = "Ошибка записи общего лога";
                $this->DB->transactionRollBack();

                return false;
            }

            $last_insert_id = mysqli_insert_id($this->DB->_getObject());
            $this->DB->simpleQuery("UPDATE `sklad_log_big` SET  `who` =  '{$who}', `table_name` = '{$table_name}' WHERE `id` = {$last_insert_id}");
        }
        $this->DB->transactionCommit();
        return true;
    }

    public function getLog($table_name,$date){


        $date_from = $date.' 00:00:00';
        $date_to =  $date.' 23:59:59';
        $query ="SELECT * FROM  `sklad_log_big` WHERE `table_name`='{$table_name}' AND 
                (`date_insert` BETWEEN STR_TO_DATE('{$date_from}', '%d.%m.%Y %H:%i:%s') 
                AND STR_TO_DATE('{$date_to}', '%d.%m.%Y %H:%i:%s'))";
//        echo "<pre>";
//        print_r($query);
//        echo "</pre>";
        $ob= $this->DB->simpleQuery($query);
        return $ob;



    }
}