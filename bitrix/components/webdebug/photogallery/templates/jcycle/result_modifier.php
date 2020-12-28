<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if(empty($arParams["JQUERY_CYCLE_EFFECT"])) $arParams["JQUERY_CYCLE_EFFECT"] = array("fade");
if(IntVal($arParams["JQUERY_CYCLE_TIMEOUT"])<0) $arParams["JQUERY_CYCLE_TIMEOUT"] = 4000;
if(!in_array($arParams["JQUERY_CYCLE_PAUSE"],array("Y","N"))) $arParams["JQUERY_CYCLE_PAUSE"] = "Y";
if(IntVal($arParams["JQUERY_CYCLE_SPEED"])<=0) $arParams["JQUERY_CYCLE_SPEED"] = 600;
?>