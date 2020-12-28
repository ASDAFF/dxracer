<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>
<div class="bx-auth-reg">

<?if($USER->IsAuthorized()):?>

<?else:?>
<?
if (count($arResult["ERRORS"]) > 0):
	foreach ($arResult["ERRORS"] as $key => $error)
		if (intval($key) == 0 && $key !== 0) 
			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	ShowError(implode("<br />", $arResult["ERRORS"]));

elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
?>
<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
<?endif?>

<form method="post" action="<?=POST_FORM_ACTION_URI?>" class='col-md-4' name="regform" enctype="multipart/form-data">
<?
if($arResult["BACKURL"] <> ''):
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
endif;
?>
<h4>РЕГИСТРАЦИЯ НА САЙТЕ</h4>
	
	<div class='row'>
		<div class='col-2'></div>
		<div class='col'>
			<div class='form-group'><input type="text" name="REGISTER[LOGIN]"  value="<?=$arResult["VALUES"]["LOGIN"]?>" placeholder='Логин' class='form-control' /></div>
	<div class='form-group'><input type="password" placeholder='Пароль' class='form-control' name="REGISTER[PASSWORD]" value="<?=$arResult["VALUES"]["PASSWORD"]?>" autocomplete="off" /></div>
	<div class='form-group'><input type="password" placeholder='Повторите пароль' class='form-control' name="REGISTER[CONFIRM_PASSWORD]" value="<?=$arResult["VALUES"]["CONFIRM_PASSWORD"]?>" autocomplete="off" /></div>
	<div class='form-group'><input type="text" placeholder='Имя' class='form-control' name="REGISTER[NAME]"  value="<?=$arResult["VALUES"]["NAME"]?>" /></div>
	<div class='form-group'><input type="text" placeholder='фамилия' class='form-control' name="REGISTER[LAST_NAME]" value="<?=$arResult["VALUES"]["LAST_NAME"]?>"  /></div>
	<div class='form-group'><input type="text" placeholder='Телефон' class='form-control' name="REGISTER[PERSONAL_PHONE]" value="<?=$arResult["VALUES"]["PERSONAL_PHONE"]?>"  /></div>
	<div class='form-group'><input type="text" placeholder='Email' class='form-control' name="REGISTER[EMAIL]" value="<?=$arResult["VALUES"]["EMAIL"]?>"  /></div>
	<div class='form-group'><input type="submit" class="btn btn-main" name="register_submit_button" value="Зарегистрироваться" /></div>
		</div>
		<div class='col-2'></div>
		<div class='clearfix'></div>
	</div>

</form>
<?endif?>
</div>