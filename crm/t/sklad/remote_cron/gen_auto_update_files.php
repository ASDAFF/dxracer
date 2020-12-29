<?php
/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 31.08.16
 * Time: 22:42
 */

require_once(__DIR__."/../../classes/Sklad.php");

$sk = new Sklad();
if(isset($_REQUEST["file_name"])) {
    echo $sk->action('genAutoUpdateFiles', $_REQUEST["file_name"]); //формируем файлы при удаленном запросе
}

if(isset($_REQUEST["update"])){ //просим zakaz1234 сфомировать и забрать файлы
    file_get_contents("http://sklad:132449@zakaz1234.ru/q/sklad/cron/gen_auto_update_files.php?remote=1"); //формируем файл
}