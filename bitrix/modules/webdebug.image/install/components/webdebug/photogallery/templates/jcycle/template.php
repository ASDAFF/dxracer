<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<div class="webdebug-photogallery-cycle" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<div class="webdebug-photogallery-cycle-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" />
			</div>
		<?endforeach?>
	</div>
	<script type="text/javascript">
		$('#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>').cycle({
			fx: "<?=implode(",",$arParams["JQUERY_CYCLE_EFFECT"])?>", 
			timeout: <?=(is_numeric($arParams["JQUERY_CYCLE_TIMEOUT"]) ? $arParams["JQUERY_CYCLE_TIMEOUT"] : "4000")?>,
			pause: <?=($arParams["JQUERY_CYCLE_PAUSE"]=="Y" ? "true" : "false")?>,
			pauseOnPagerHover: <?=($arParams["JQUERY_CYCLE_PAUSE"]=="Y" ? "true" : "false")?>,
			speed: <?=(isset($arParams["JQUERY_CYCLE_SPEED"]) && is_numeric($arParams["JQUERY_CYCLE_SPEED"]) ? $arParams["JQUERY_CYCLE_SPEED"] : "600")?>,
			prev: "#banner-prev",
			next: "#banner-next"
			});
	</script>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
<?endif?>