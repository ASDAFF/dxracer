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
$t = 1;
$domein = 0;
?>
<div class='feed_table'>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?if($domein!=1):?>
<?/*<td>
<div class="feedback-block" >

		
		<div class='video-feed'>
			<div class='video-img-box'>
			<div class='video-feed-img'>
			<iframe  width="100%" height="190" src="https://www.youtube.com/embed/oO_KgIMBUHA" frameborder="0" allowfullscreen=""></iframe>
		
		</div>
		</div>
		<div class='video-feed-text' style='padding:0px 30px!important;'>
			<p class='text-left'><a style='margin:0px!important;' href='https://www.youtube.com/embed/oO_KgIMBUHA' target="_blank">Посмотреть видео на Youtube</a></p>
		
			<span class='date-feed'>1 Ноября</span>
		</div>
		
		</div>
		</div>
</td>*/?>
<div class="feedback-block col-xs-12 col-lg-4">
		<div class='text-feed'>
			<b class='col-xs-7 text-left'><?=$arItem['NAME']?></b>
			<span class='date-feed col-xs-5 text-right'><?=FormatDateFromDB($arItem['ACTIVE_FROM'],'DD MMMM');?></span>
			<div class='clearfix'></div><br>
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
				);?><br>
			<p><?=$arItem['PREVIEW_TEXT']?></p>
			
			
			<?// echo "<pre>"; print_r($arItem); echo "</pre>";?>
		</div>
	</div>

<?else:?>
	<div class="feedback-block col-xs-12 col-lg-4">
		<div class='text-feed'>
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
			<span class='date-feed'><?=FormatDateFromDB($arItem['ACTIVE_FROM'],'DD MMMM');?></span>
			<?// echo "<pre>"; print_r($arItem); echo "</pre>";?>
		</div>
	</div>
<?endif;?>
<?
$t++;
endforeach;?>
</div>