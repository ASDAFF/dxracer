<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 20.11.18
 * Time: 19:38
 */

if (isset($_REQUEST['access']) && $_REQUEST['access'] == 'Wcscd54VFDgTy') {
  $loader = require __DIR__ . '/../classes/vendor/autoload.php';

  global $db;
  $db = new MysqliDb('localhost', "root", "3297650586time", "zakaz1234");
  $db->autoReconnect = true;


  $query = "SELECT count(model) as cnt,model FROM `sklad_coming`
                WHERE
                id NOT IN(SELECT model_id FROM sklad_sales) AND 
                id NOT IN(SELECT model_id FROM sklad_shipment) AND 
                id NOT IN(SELECT model_id FROM sklad_discard) AND 
                brand != 'Diesel'
                GROUP BY model";


  $results = $db->rawQuery($query);
  $allCodes = array();
  foreach ($results as $k => $v) {
    $clear_code = preg_replace("/[^0-9A-Za-z]/", "", $v["model"]);
    $allCodes[] = array('cnt' => $v['cnt'], 'model' => $clear_code);
  }
  header('Content-type: application/json');
  echo json_encode($allCodes);
}