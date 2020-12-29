<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 27.09.16
 * Time: 22:47
 */

 require_once("../classes/UpdatePrice.php");

$action = $_POST["action"];
$model = $_POST["model"];
$price = $_POST["price"];
$spec = $_POST["spec"];
$all_arr = $_POST["new_recalc_price"];


$sk = new UpdatePrice();
if($action=='handPrice') {
    $sk->setHandPrice($model, $price);
}

if($action=='setSpecialoffer'){
    echo $sk->setSpecialoffer($model, $spec);
}

if($action=='setAllHandPrice'){
    echo $sk->setAllHandPrice($all_arr);
}

if($action=='saveToLog'){
     $sk->saveToLog();

}

if($action=='getLog'){
     $sk->getLog($model);


}if($action=='dnt_chn_price'){
     $sk->dnt_chn_price($model, $spec);
}

if($action=='gridСoefficients'){
    $sk->gridСoefficients($_POST);
}

if($action=='setSchedule'){
    echo $sk->setSchedule($_POST);
}

if($action=='startHandUpdate'){
    exec('php -f /home/bitrix/zakaz1234/q/update_price/cron/start_update.php HandStart',$data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}