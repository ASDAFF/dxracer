<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
$this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
?>
<div class="col-xs-12 feedback-block">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<? //echo "<pre>"; print_r($arItem); echo "</pre>";?>
	<?if(!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
		<div class='video-feed'>
			<div class='video-img-box'>
			<div class='video-feed-img'>
			<img src='<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>' class='img-responsive'>
		</div><span class='video-ic'><img src='/local/templates/main/img/videoPlay.png'></span>
		</div>
		<div class='video-feed-text'>
			<p class='text-center'><a href='<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>' target="_blank">Посмотреть видео на Youtube</a></p>
		<br>
			<b><?=$arItem['NAME']?></b>
			<span class='date-feed'><?=FormatDateFromDB($arItem['TIMESTAMP_X'],'DD MMMM');?></span>
		</div>
		
		</div>
	<?else:?>
		<div class='text-feed'>
			<span class='feedback-ic'><img src='/local/templates/main/img/feedback.png'></span>
			<?$APPLICATION->IncludeComponent(
					"bitrix:iblock.vote",
					"flat",
					Array(
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"ELEMENT_ID" => $arItem["ID"],
						"MAX_VOTE" => $arParams["MAX_VOTE"],
						"VOTE_NAMES" => $arParams["VOTE_NAMES"],
						"CACHE_TYPE" => $arParams["CACHE_TYPE"],
						"CACHE_TIME" => $arParams["CACHE_TIME"],
						"DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
						"SHOW_RATING" => "N",
					),
					$component
				);?>
			<p><?=$arItem['PREVIEW_TEXT']?></p>
			<br>
			<b><?=$arItem['NAME']?></b>
			<span class='date-feed'><?=FormatDateFromDB($arItem['TIMESTAMP_X'],'DD MMMM');?></span>
		</div>
	<?endif;?>
<?endforeach;?>
</div>
<div class='clearfix'></div>