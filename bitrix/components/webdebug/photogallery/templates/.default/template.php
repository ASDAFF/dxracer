<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<div class="webdebug-photogallery-default" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a>
		<?endforeach?>
		<div class="webdebug-photogallery-default-footer"></div>
	</div>
	<script type="text/javascript">
		$('#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?> a').touchGallery();
	</script>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
<?endif?>