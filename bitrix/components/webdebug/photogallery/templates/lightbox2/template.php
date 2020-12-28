<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<div class="webdebug-photogallery-lightbox2" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<div class="item"><a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a></div>
		<?endforeach?>
		<div class="webdebug-photogallery-lightbox2-footer"></div>
	</div>
	<script type="text/javascript">
		$('#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?> a').lightBox({
			imageBlank:"<?=$this->__folder?>/images/blank.gif",
			imageBtnClose:"<?=$this->__folder?>/images/<?=LANGUAGE_ID?>/close.gif",
			imageLoading:"<?=$this->__folder?>/images/loader.gif",
			imageBtnNext:"<?=$this->__folder?>/images/<?=LANGUAGE_ID?>/next.gif",
			imageBtnPrev:"<?=$this->__folder?>/images/<?=LANGUAGE_ID?>/prev.gif",
			txtImage: "<?=GetMessage("WEBDEBUG_PHOTOGALLERY_TXT_IMAGE")?>",
			txtOf: "<?=GetMessage("WEBDEBUG_PHOTOGALLERY_TXT_OF")?>",
		});
	</script>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
<?endif?>