<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var CBitrixComponent $component */
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
?>
<?=$arResult["FORM_HEADER"]?>

        <? if ($_REQUEST['formresult'] == 'addok' && empty($arResult['FORM_ERRORS'])): ?>
            <div class="alert alert-success text-xs-center" role="alert">
                Ваша заявка принята. Спасибо!
            </div>
            <script>
            	$(function() {
            		ym(70338997,'reachGoal','vopros'); 
			gtag('event', 'send', { 'event_category': 'cheaper', 'event_action': 'send' });
                });
            
            </script>
            <? endif; ?>
          <div class='form-group'>
            <input type='text'  name='form_text_6' class='form-control' required value="<?=$arParams['NAME_EL']?>">
          </div>
          <div class='form-group'>
          <input type='text'  name='form_text_4' class='form-control' required value="" placeholder='Ваше имя'>
          </div>
          <div class='form-group'>
            <input type='text'  name='form_text_5' class='form-control' required value="" placeholder='Ваш телефон'>
          </div>
          <div class='form-group'>
            <input type='text'  name='form_text_10' class='form-control' required value="" placeholder='Цена'>
          </div>
          <div class='form-group'>
            <input type='text'  name='form_text_11' class='form-control' required value="" placeholder='Торговая площадка'>
          </div>
          <div class='form-group'>
          <input type="submit" class="btn btn-main" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
          </div>
    
            
          
    
    

    <?=$arResult["FORM_FOOTER"]?>