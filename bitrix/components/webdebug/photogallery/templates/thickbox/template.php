<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<div class="webdebug-photogallery-thickbox" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('WEBDEBUG_IMAGE_ITEM_DELETE')));?>
			<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="thickbox"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a>
		<?endforeach?>
		<div class="webdebug-photogallery-thickbox-footer"></div>
	</div>
	<script type="text/javascript">
		var
			webdebug_tb_pathToImage = "<?=$this->__folder?>/images/loadingAnimation.gif",
			webdebug_tb_close_title = "<?=GetMessage("WEBDEBUG_IMAGE_TB_CLOSE_TITLE")?>",
			webdebug_tb_close_text = "<?=GetMessage("WEBDEBUG_IMAGE_TB_CLOSE_TEXT")?>",
			webdebug_tb_esc_notice = "<?=GetMessage("WEBDEBUG_IMAGE_TB_ESC_NOTICE")?>";
	</script>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
<?endif?>