<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 23.08.16
 * Time: 10:06
 */


require_once("../classes/Sklad.php");

$action = $_POST["action"];
$data = $_POST["data"];
$model_id = $_POST["model_id"];
$post = $_POST;

$sk = new Sklad();
echo $sk->action($action,$data,$model_id,$post);
