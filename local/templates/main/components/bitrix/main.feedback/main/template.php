<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="form-group">
		<input type="text" class='form-control' name="user_name" placeholder='ФИО*' required value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="form-group">
		
		<input type="text" class='form-control' name="user_email" placeholder='E-MAIL*' required value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<div class="form-group">
		<textarea name="MESSAGE" class='form-control' rows="5" placeholder='КОММЕНТАРИЙ*' required cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha form-group">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" class='form-control' size="30" maxlength="50" value="">
	
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<?//<button type="submit" class='btn footer-mail' style='border-radius:0px!important;' name="submit"> Отправить<span><img src="/local/templates/main/img/arWhite.png"></span></button>?>
	<input type="submit" name="submit"  class='footer-mail' value="<?=GetMessage("MFT_SUBMIT")?>">
	
</form>
</div>