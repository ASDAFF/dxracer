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
<?// echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<? //echo "<pre>"; print_r($arItem); echo "</pre>";?>
	<?if(!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
	<div class='col-xs-4'>
		<div class="col-xs-12 feedback-block" style='min-height:280px!important;'>

		
		<div class='video-feed'>
			<div class='video-img-box'>
			<div class='video-feed-img'>
			<iframe  width="100%" height="190" src="<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>" frameborder="0" allowfullscreen=""></iframe>
		
		</div>
		</div>
		<div class='video-feed-text' style='padding:0px 30px!important;'>
			<p class='text-left'><a style='margin:0px!important;' href='<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>' target="_blank">Посмотреть видео на Youtube</a></p>
		
			<span class='date-feed'><?=FormatDateFromDB($arItem['ACTIVE_FROM'],'DD MMMM');?></span>
		</div>
		
		</div>
		</div>
	</div>
	<?else:?>
	<div class='col-xs-4'>
		<div class="col-xs-12 feedback-block">
		
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
		</div>
	
		
	
	<?endif;?>
<?endforeach;?>
<div class='clearfix'></div>
<?
	if ($arParams["DISPLAY_TOP_PAGER"])
	{
		echo $arResult["NAV_STRING"];
	}
?>
<div class='clearfix'></div>