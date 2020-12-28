<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["ITEMS"])):?>
	<div class="webdebug-photogallery-easy-slider" id="webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>">
		<ul>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
				<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
				<li><a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["DETAIL_PICTURE"]["DESCRIPTION"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" /></a></li>
			<?endforeach?>
		</ul>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#webdebug-photogallery-<?=$arResult["GALLERY_ID"];?>").easySlider({
				auto: true,
				continuous: true,
				prevText: "",
				nextText: "",
			});
		});	
	</script>
<?endif?>