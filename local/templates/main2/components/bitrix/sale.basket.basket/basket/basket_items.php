<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @var array $arUrls */
/** @var array $arHeaders */


if (!empty($arResult["ERROR_MESSAGE"]))
	ShowError($arResult["ERROR_MESSAGE"]);

$bDelayColumn  = false;
$bDeleteColumn = false;
$bWeightColumn = false;
$bPropsColumn  = false;
$bPriceType    = false;

if ($normalCount > 0):
?>
<div id='basket_items'>
<?foreach($arResult["GRID"]["ROWS"] as $k => $arItem):
	if (strlen($arItem["PREVIEW_PICTURE_SRC"]) > 0):
		$url = $arItem["PREVIEW_PICTURE_SRC"];
	elseif (strlen($arItem["DETAIL_PICTURE_SRC"]) > 0):
		$url = $arItem["DETAIL_PICTURE_SRC"];
	else:
		$url = $templateFolder."/images/no_photo.png";
	endif;	
	//$arPrice = CPrice::GetByID($arItem['PRODUCT_PRICE_ID']);
	if(CModule::IncludeModule("iblock") && CModule::IncludeModule("catalog")){
		$rest = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>9, "ID"=>$arItem['PRODUCT_ID']), false, false, Array("ID", "NAME", "CATALOG_GROUP_2"));
		if($obl = $rest->GetNext()){
			$oldprice = $obl['CATALOG_PRICE_2'];
			//echo "<pre>"; print_r($obl); echo "</pre>";
		}
	}		
?>
<?// echo "<pre>"; print_r($rest); echo "</pre>";?>
<div class='basket-item-box' id='<?=$arItem["ID"]?>'>
	<div class='col-xs-3'>
		<a href="<?=$arItem["DETAIL_PAGE_URL"] ?>">
			<div class="bx_ordercart_photo" style="background-image:url('<?=$url?>')"></div>
		</a>
	</div>
	<div class='col-xs-5'>
		<a class='basket-item-box-title' href="<?=$arItem["DETAIL_PAGE_URL"] ?>"><span><?=$arItem["NAME"]?></span></a><br>
		<span class='bx_price'><?=$arItem["PRICE_FORMATED"]?></span><span class='oldprice'><?//=$oldprice;?></span>
	</div>
	<div class='col-xs-3'>
	<div id="basket_quantity_control"><br><br>
														<div class="basket_quantity_control">
															<a href="javascript:void(0);" class="minus" onclick="setQuantity(<?=$arItem["ID"]?>, <?=$arItem["MEASURE_RATIO"]?>, 'down', <?=$useFloatQuantityJS?>);"><i class="fa fa-minus-square-o" aria-hidden="true"></i></a>
																		<?
																		$ratio = isset($arItem["MEASURE_RATIO"]) ? $arItem["MEASURE_RATIO"] : 0;
																		$useFloatQuantity = ($arParams["QUANTITY_FLOAT"] == "Y") ? true : false;
																		$useFloatQuantityJS = ($useFloatQuantity ? "true" : "false");
																		?>
																		<input disabled
																			type="text"
																			id="QUANTITY_INPUT_<?=$arItem["ID"]?>"
																			name="QUANTITY_INPUT_<?=$arItem["ID"]?>"
																			maxlength="18"
																			value="<?=$arItem["QUANTITY"]?>"
																			onchange="updateQuantity('QUANTITY_INPUT_<?=$arItem["ID"]?>', '<?=$arItem["ID"]?>', <?=$ratio?>, <?=$useFloatQuantityJS?>)"
																		>
															<a href="javascript:void(0);" class="plus" onclick="setQuantity(<?=$arItem["ID"]?>, <?=$arItem["MEASURE_RATIO"]?>, 'up', <?=$useFloatQuantityJS?>);"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
															
														</div>
													</div>
													<input type="hidden" id="QUANTITY_<?=$arItem['ID']?>" name="QUANTITY_<?=$arItem['ID']?>" value="<?=$arItem["QUANTITY"]?>" />
	</div>
	<div class='col-xs-1 text-right'><br><br>
		<a class='js-delete-<?=$arItem["ID"]?>' href="<?=str_replace("#ID#", $arItem["ID"], $arUrls["delete"])?>"
										onclick="return deleteProductRow(this)">
										<img src='<?=SITE_TEMPLATE_PATH?>/img/close.png'>
									</a>
	</div>
	<div class='clearfix'></div>
	<? 
	$str=strpos($arItem["NAME"]," ");
	$brand=substr($arItem["NAME"], 0, $str);
	
	//echo "<pre>"; print_r($arItem); echo "</pre>";?>
	<?
	if($_SERVER['HTTP_HOST']!="timeavenue.su"){
	$domain = "0";
	}else{
	$domain = "2";
	}
	?>
	<?if($domain!=1):?>
	<script>
	$('.js-delete-<?=$arItem["ID"]?>').click(function(){
		dataLayer.push({
	"ecommerce": {
	"remove": {
	"products": [
	{
	"id": <?=$arItem["ID"]?>, //обязательный параметр id или name
	"name" : "<?=$arItem["NAME"]?>", //обязательный параметр id или name
	"price": <?=$arItem['FULL_PRICE']?>, //стоимость единицы товара
	"brand": "<?=$brand?>",
	"category": "Все товары/Подарки и цветы/Украшения и аксессуары/Наручные часы",
	"quantity": 1
	}
	]
	}
	}
	});
	})
	</script>
	<?endif;?>
</div>
<?endforeach;?>
</div>
			<br>
<div class='summ-block text-right'>
	<? //echo "<pre>"; print_r($arResult); echo "</pre>";?>
	<span class='summ-text'>Итого:</span><span class='max-summ' id='allSum_FORMATED'><?=$arResult["allSum_FORMATED"]?></span>
</div>
<input type="hidden" id="column_headers" value="<?=htmlspecialcharsbx(implode($arHeaders, ","))?>" />
	<input type="hidden" id="offers_props" value="<?=htmlspecialcharsbx(implode($arParams["OFFERS_PROPS"], ","))?>" />
	<input type="hidden" id="action_var" value="<?=htmlspecialcharsbx($arParams["ACTION_VARIABLE"])?>" />
	<input type="hidden" id="quantity_float" value="<?=($arParams["QUANTITY_FLOAT"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="price_vat_show_value" value="<?=($arParams["PRICE_VAT_SHOW_VALUE"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="hide_coupon" value="<?=($arParams["HIDE_COUPON"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="use_prepayment" value="<?=($arParams["USE_PREPAYMENT"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="auto_calculation" value="<?=($arParams["AUTO_CALCULATION"] == "N") ? "N" : "Y"?>" />
<?
endif;