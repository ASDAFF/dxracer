<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?/*http://www.serie3.info/s3slider/demonstration*/?>

<?if (!empty($arResult["ITEMS"])):?>
	<div class="s3slider" id="S3Slider<?=$arResult["GALLERY_ID"];?>">
		<ul class="s3sliderContent" id="S3Slider<?=$arResult["GALLERY_ID"];?>Content">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));?>
				<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
				<li class="SliderImage S3Slider<?=$arResult["GALLERY_ID"];?>Image" <?/*id="<?=$this->GetEditAreaId($arItem['ID']);?>"*/?>>
					<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?>" />
					<span class="t"><strong><?=$arItem["NAME"]?></strong></span>
				</li>
			<?endforeach?>
			<li class="SliderImage S3Slider<?=$arResult["GALLERY_ID"];?>Image clear"></li>
		</ul>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#S3Slider<?=$arResult["GALLERY_ID"];?>').s3Slider({
				timeOut: 3000
			});
		});
	</script>
<?endif?>