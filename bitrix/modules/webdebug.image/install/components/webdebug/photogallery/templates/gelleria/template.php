<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<div class="webdebug-photogallery-galleria" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>" style="height:400px">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" rel="<?=$arResult["GALLERY_ID"];?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" data-title="<?=$arItem["NAME"]?>" data-description="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a>
		<?endforeach?>
	</div>
<?endif?>

<script type="text/javascript">
	// Load the classic theme
	Galleria.loadTheme('<?=$this->__folder?>/galleria.classic.min.js');
	// Initialize Galleria
	Galleria.run('#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>');
</script>