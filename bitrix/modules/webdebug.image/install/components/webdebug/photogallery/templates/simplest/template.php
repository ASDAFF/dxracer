<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<div class="webdebug-photogallery-simplest" id="webdebug-photogallery-simplest-photo-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="" alt="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" />
			<?break?>
		<?endforeach?>
	</div>
	<ul class="webdebug-photogallery-simplest-thumbnails" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
			<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" rel="<?=$arResult["GALLERY_ID"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a></li>
		<?endforeach?>
	</ul>
	<div style="clear:left"></div>
<?endif?>