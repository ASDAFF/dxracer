<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<div class="webdebug-photogallery-labeled-wrapper">
		<div class="webdebug-photogallery-labeled" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
				<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
				<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arItem["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arItem["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" />
			<?endforeach?>
		</div>
	</div>
	<script type="text/javascript">
		$('#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>').prettygallery();
	</script>
<?endif?>