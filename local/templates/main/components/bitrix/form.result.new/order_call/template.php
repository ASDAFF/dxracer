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

    <div class="">
        <? if ($_REQUEST['formresult'] == 'addok' && empty($arResult['FORM_ERRORS'])): ?>
            <div class="alert alert-success text-xs-center" role="alert">
                Ваша заявка принята. Спасибо!
            </div>
            <script>
            $(function() {
                     ym(70338997,'reachGoal','zvonok'); gtag('event', 'send', { 'event_category': 'call', 'event_action': 'send' });
                 });
            
            </script>
            <? endif; ?>
            <div class='form-group '>
                <input type='text' placeholder='Ваше имя' name='form_text_1' class='form-control' required value="">
            </div>
            <div class='form-group '>
                <input type='text' placeholder='Ваш телефон' name='form_text_2' class='form-control' required value="">
            </div>
            <div class='form-group '>
                <input type='text' placeholder='Комментарий' name='form_text_3' class='form-control' value="">
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-main" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
            </div>
        
    </div>

    <?=$arResult["FORM_FOOTER"]?>