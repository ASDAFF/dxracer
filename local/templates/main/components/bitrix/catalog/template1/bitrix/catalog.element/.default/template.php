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
$templateLibrary = array('popup');
$currencyList = '';
//    print_r($arResult);
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);
$strMainID = $this->GetEditAreaId($arResult['ID']);

$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BASIS_PRICE' => $strMainID.'_basis_price',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'BASKET_ACTIONS' => $strMainID.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
	'SUBSCRIBE_LINK' => $strMainID.'_subscribe',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
?><div class="bx_item_detail <? echo $templateData['TEMPLATE_CLASS']; ?>" id="<? echo $arItemIDs['ID']; ?>">
<?
if ('Y' == $arParams['DISPLAY_NAME'])
{
?>
 
<?
}
reset($arResult['MORE_PHOTO']);
$arFirstPhoto = current($arResult['MORE_PHOTO']);
?>
	<div class="bx_item_container">
	<div class="bx_lt ">
	
	
<div class="bx_item_slider" id="<? echo $arItemIDs['BIG_SLIDER_ID']; ?>">

	<div class="bx_bigimages" id="<? echo $arItemIDs['BIG_IMG_CONT_ID']; ?>">
	
<?if(!empty($arResult['PROPERTIES']['HIT']) || !empty($arResult['PROPERTIES']['SALE']) ):?>
	<div class='label-stic'>
		<?
		if(!empty($arResult['PROPERTIES']['SALE'])){?>
			<span class='sale'>СКИДКА</span>
		<?}?>
		<div></div>
		<?if(!empty($arResult['PROPERTIES']['HIT'])){?>
			<span class='hit'>ХИТ</span>
		<?}
		?>
		
	</div>
	<?//echo "<pre>"; print_r($arItem); echo "</pre>";?>
<?endif;?>
	<div class="bx_bigimages_imgcontainer">
	<span class="bx_bigimages_aligner"><img id="<? echo $arItemIDs['PICT']; ?>" src="<? echo $arFirstPhoto['SRC']; ?>" alt="<? echo $strAlt; ?>" title="<? echo $strTitle; ?>"></span>
<?
if ('Y' == $arParams['SHOW_DISCOUNT_PERCENT'])
{
	if (!isset($arResult['OFFERS']) || empty($arResult['OFFERS']))
	{
		if (0 < $arResult['MIN_PRICE']['DISCOUNT_DIFF'])
		{
?>
	<div class="bx_stick_disc right bottom" id="<? echo $arItemIDs['DISCOUNT_PICT_ID'] ?>"><? echo -$arResult['MIN_PRICE']['DISCOUNT_DIFF_PERCENT']; ?>%</div>
<?
		}
	}
	else
	{
?>
	<div class="bx_stick_disc right bottom" id="<? echo $arItemIDs['DISCOUNT_PICT_ID'] ?>" style="display: none;"></div>
<?
	}
}
?>
	<div class="bx_stick average left top" <?= (empty($arResult['LABEL'])? 'style="display:none;"' : '' ) ?> id="<? echo $arItemIDs['STICKER_ID'] ?>" title="<? echo $arResult['LABEL_VALUE']; ?>"><? echo $arResult['LABEL_VALUE']; ?></div>
	</div>
	</div>
<?
if ($arResult['SHOW_SLIDER'])
{
	if (!isset($arResult['OFFERS']) || empty($arResult['OFFERS']))
	{
		
		// if (5 < $arResult['MORE_PHOTO_COUNT'])
		// {
		// 	$strClass = 'bx_slider_conteiner full';
		// 	$strOneWidth = (100/$arResult['MORE_PHOTO_COUNT']).'%';
		// 	$strWidth = (20*$arResult['MORE_PHOTO_COUNT']).'%';
		// 	$strSlideStyle = '';
		// }
		// else
		// {

			$dragscroll='';
			$strClass = 'bx_slider_conteiner';
			$strOneWidth = '20%';
			$strWidth = '100%';
			$strSlideStyle = '';
			if (5 < $arResult['MORE_PHOTO_COUNT'])
			{
			$dragscroll='dragscroll';	
			$strClass .= ' lar';
			}
		// }
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_ID']; ?>">
	<div class="bx_slider_scroller_container <?php echo $dragscroll;?>">
	<div class="bx_slide">
	<ul style="width: <? echo $strWidth; ?>;" id="<? echo $arItemIDs['SLIDER_LIST']; ?>">
<?
		$i=0;
		foreach ($arResult['MORE_PHOTO'] as &$arOnePhoto)
		{
?>
	<li <?=($i==0?'class=bx_active':'');?> data-value="<? echo $arOnePhoto['ID']; ?>" style="width: 100%; padding-top: <? echo $strOneWidth; ?>;"><span class="cnt"><span class="cnt_item" style="background-image:url('<? echo $arOnePhoto['SRC']; ?>');"></span></span></li>
<?
		$i++;
		}
		unset($arOnePhoto);
?>
	</ul>
	</div>
	<div class="bx_slide_left" id="<? echo $arItemIDs['SLIDER_LEFT']; ?>" style="<? echo $strSlideStyle; ?>"></div>
	<div class="bx_slide_right" id="<? echo $arItemIDs['SLIDER_RIGHT']; ?>" style="<? echo $strSlideStyle; ?>"></div>
	</div>
	</div>
<?
	}
	else
	{
		foreach ($arResult['OFFERS'] as $key => $arOneOffer)
		{
			if (!isset($arOneOffer['MORE_PHOTO_COUNT']) || 0 >= $arOneOffer['MORE_PHOTO_COUNT'])
				continue;
			$strVisible = ($key == $arResult['OFFERS_SELECTED'] ? '' : 'none');
			// if (5 < $arOneOffer['MORE_PHOTO_COUNT'])
			// {
			// 	$strClass = 'bx_slider_conteiner full';
			// 	$strOneWidth = (100/$arOneOffer['MORE_PHOTO_COUNT']).'%';
			// 	$strWidth = (20*$arOneOffer['MORE_PHOTO_COUNT']).'%';
			// 	$strSlideStyle = '';
			// }
			// else
			// {
				$strClass = 'bx_slider_conteiner';
				$strOneWidth = '20%';
				$strWidth = '100%';
				$strSlideStyle = 'display: none;';
			// }
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>" style="display: <? echo $strVisible; ?>;">
	<div class="bx_slider_scroller_container">
	<div class="bx_slide">
	<ul style="width: <? echo $strWidth; ?>;" id="<? echo $arItemIDs['SLIDER_LIST_OF_ID'].$arOneOffer['ID']; ?>">
<?
			$i=0;
			foreach ($arOneOffer['MORE_PHOTO'] as &$arOnePhoto)
			{
?>
	<li <?=($i==0?'class=bx_active':'');?> data-value="<? echo $arOneOffer['ID'].'_'.$arOnePhoto['ID']; ?>" style="width: <? echo $strOneWidth; ?>; padding-top: <? echo $strOneWidth; ?>"><span class="cnt"><span class="cnt_item" style="background-image:url('<? echo $arOnePhoto['SRC']; ?>');"></span></span></li>
<?
			$i++;
			}
			unset($arOnePhoto);
?>
	</ul>
	</div>
	<div class="bx_slide_left" id="<? echo $arItemIDs['SLIDER_LEFT_OF_ID'].$arOneOffer['ID'] ?>" style="<? echo $strSlideStyle; ?>" data-value="<? echo $arOneOffer['ID']; ?>"></div>
	<div class="bx_slide_right" id="<? echo $arItemIDs['SLIDER_RIGHT_OF_ID'].$arOneOffer['ID'] ?>" style="<? echo $strSlideStyle; ?>" data-value="<? echo $arOneOffer['ID']; ?>"></div>
	</div>
	</div>
<?
		}
	}
}
?>
</div>
		</div>
		

		
		<div class="bx_lb col-xs-12">
			<div class="el-name">
				<div class='col-xs-12' style="padding-left:0px!important;">
					<h1><?=$arResult['NAME']?></h1>
				</div>
				<div class='clearfix'></div>
			</div>
			<div class="item_price row">
				<div class="item-buy">
					<div class="col-xs-12 col-lg-6">
							<?
							$minPrice = (isset($arResult['RATIO_PRICE']) ? $arResult['RATIO_PRICE'] : $arResult['MIN_PRICE']);
							$boolDiscountShow = (0 < $minPrice['DISCOUNT_DIFF']);
							?>
							<?if($arResult['PRICES']['OLD_PRICE']['VALUE']!=0 && !empty($arResult['PRICES']['OLD_PRICE']['VALUE'])):?>
							<div class="item_current_price" id="<? echo $arItemIDs['PRICE']; ?>"><? echo CurrencyFormat($minPrice['DISCOUNT_VALUE'], 'RUB'); ?></div>
							
							<div class='old-price-time'><?=CurrencyFormat($arResult['PRICES']['OLD_PRICE']['VALUE'], 'RUB');?></div>
							<? $skdprice = $arResult['PRICES']['OLD_PRICE']['VALUE'] - $minPrice['DISCOUNT_VALUE'];
										$percent = round(($skdprice * 100) / $arResult['PRICES']['OLD_PRICE']['VALUE']);
										
										?>
					</div>
					<div class="col-xs-12 col-lg-3">
						<p class='text_econom'>Вы экономите <span class="text-red"><?=$arResult['PRICES']['OLD_PRICE']['VALUE'] - $minPrice['DISCOUNT_VALUE']?> руб.(<?=$percent?>%) </span>  </p>
						<?
						setlocale(LC_ALL, 'rus');
						$arr = [
							'января',
							'февраля',
							'марта',
							'апреля',
							'мая',
							'июня',
							'июля',
							'августа',
							'сентября',
							'октября',
							'ноября',
							'декабря'
						];
						$date_arr = array(
							strtotime('30.11.2020 23:59:59'),
							strtotime('07.12.2020 23:59:59'),
							strtotime('14.12.2020 23:59:59'),
							strtotime('21.12.2020 23:59:59'),
							strtotime('28.12.2020 23:59:59'),
							strtotime('07.01.2021 23:59:59'),
							strtotime('14.01.2021 23:59:59'),
							strtotime('21.01.2021 23:59:59'),
							strtotime('28.01.2021 23:59:59')
						);
						$end_day = "";
						foreach ($date_arr as $v) {
							if ($v > time()) {
								$month = date('n',$v)-1;
								$end_day = date('j', $v);
								$end_y = date('Y', $v);
								break;
							}
						}
						?>
					</div>
					
					<div class='col-xs-12 col-lg-3'>
						<?if($arResult['CATALOG_QUANTITY']>0):?>
							<? //echo "<pre>"; print_r($arResult['PROPERTIES']['PROP13']); echo "</pre>";?>
							<span class='instock'><img src="/local/templates/main/img/in_stock.png"></span>
						<?else:?>
						<span class='nostock' style="font-size:10px;">Нет в наличии</span>
						<?endif;?>
					</div>
				</div>
				<div class='clearfix'></div>

					<p class="cena_deistvuet">Цена действует до:<br><span id="countDown" class='sale-detail-box'><?=$end_day?> <?=$arr[$month]?> <?=$end_y?> 23:59</span></p>

					<?else:?>

						<div class="item_current_price" id="<? echo $arItemIDs['PRICE']; ?>"><? echo CurrencyFormat($arResult['MIN_PRICE']['VALUE'], 'RUB'); ?></div>
							
					</div>
					<div class="col-xs-12 col-lg-3">				
					</div>
					
					<div class='col-xs-12 col-lg-3'>
						<?if($arResult['CATALOG_QUANTITY']>0):?>
							<? //echo "<pre>"; print_r($arResult['PROPERTIES']['PROP13']); echo "</pre>";?>
							<span class='instock'><img src="/local/templates/main/img/in_stock.png"></span>
						<?else:?>
						<span class='nostock' style="font-size:10px;">Нет в наличии</span>
						<?endif;?>
					</div>
				</div>
				<div class='clearfix'></div>

					<?endif;?>
					
					<div class="only_original"><img src="/local/templates/main/img/only_original.png"></div>
					<br>
					<?if($arResult['CATALOG_QUANTITY']>0){?>
					<div class="item_buttons vam col-xs-12">
					<div class='item_buttons_counter_block' id="<? echo $arItemIDs['BASKET_ACTIONS']; ?>">
					<a href="javascript:void(0);" class="footer-mail detail-button js-add" id="<? echo $arItemIDs['ADD_BASKET_LINK']; ?>">В корзину</a><a href='#detailForm' data-toggle='modal' class='detailFormLink'>Нашли дешевле?</a>
					</div></div>
					
					<?}?>
						<div class='clearfix'></div>
						<div class="free_delivery">
							<img src="/local/templates/main/img/free_delivery.png">
							<p>Бесплатная доставка</p>
							<span>Заказ привезет курьер, возможен осмотр товара до момента оплаты</span>						
						</div>
						<div class='clearfix'></div>
					</div>
					
				</div>
			<div style="clear: both;"></div>
	</div>
	<div class="clb"></div>
</div>
<br>
<div class='col-xs-12 detail-page'>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#panel1" class='border-no-left' style='border-left:none!important;'>Описание</a></li>
  <?/*<li><a data-toggle="tab" href="#panel2">Отзывы</a></li>*/?>
<li><a  data-toggle="tab" href="#panel3" class='border-no-right' style='border-right:none!important;'>Возврат и обмен</a></li>
</ul>
 
<div class="tab-content">
  <div id="panel1" class="tab-pane fade in active">
	<?=$arResult['DETAIL_TEXT']?><br>
	<br>
	<table class='table table-bordered'>
		<?foreach($arResult['DISPLAY_PROPERTIES'] as $itemProps):?>
			<tr>
				<td>
					<b><?=$itemProps['NAME']?></b>
				</td>
				<td>
					<?=$itemProps['VALUE']?>
				</td>
			</tr>
		<?endforeach;?>
	</table>
  </div>
  <div id="panel2" class="tab-pane fade">
	<?//$GLOBALS["Feed"] = array('IBLOCK_ID'=>10,'PROPERTY_TOVAR' => $arResult['ID']);?>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "detailFeed", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "",
		),
		"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
		"FILTER_NAME" => "Feed",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "10",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MAX_VOTE" => "5",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "Y",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "round",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Отзывы",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"SEARCH_PAGE" => "",
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "Y",	// Показ специальной страницы
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "Y",
		"USE_SHARE" => "N",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		)
	),
	false
);?>
  </div>
<div id="panel3" class="tab-pane fade">
<p>
	 При обнаружении недостатков товара клиент может отказаться от товара (либо заменить его) и потребовать возврат средств. Такая возможность сохраняется в течение 7 дней со дня получения заказа (статья 26.1.0 о дистанционном способе продажи товара от 25.10. 2007 г., № 234-ФЗ). После 7 дней товар можно вернуть, если:
</p>
<ul>
	<li>
		 Обнаружен критический недостаток.&nbsp;
	</li>
	<li>
		 Если невозможно использовать устройство в течение гарантийного срока сроком более 30 дней (в совокупности) после их сервиса.
	</li>
	<li>
		 Нарушение срока устранения дефекта, предусмотренного Законом.&nbsp;
	</li>
</ul>
<p>
	 П.4. «Статья 18. Права потребителя при обнаружении в товаре недостатков».
</p>
<p>
	 Возврат денежных средств должен быть осуществлен в течение 10 дней с момента получения требования.
</p>
<p><b>Товар можно вернуть</b></p>
<ul>
	<li>
		 Почтовой посылкой.
	</li>
	<li>
		 Его забирает продавец.
	</li>
	<li>
		 Самостоятельный возврат.
	</li>
</ul>
<p>
	 Детали уточняются у оператора.&nbsp;
</p>
<p><b>Как вернуть обычный товар?</b></p>
<p>
	 Для того чтобы вернуть устройство необходимо следующее:
</p>
<ul>
	<li>
		 Целостный товар (с пломбами).
	</li>
	<li>
		 Упаковка и бирка.
	</li>
	<li>
		 Товарные документы и чек.
	</li>
</ul>
<p>
	 Если на товаре обнаруживаются повреждения, то продавец-консультант может отказать клиенту. При сохранности товара, клиент без проблем может вернуть товар в течение 7 дней после получения.
</p>
<p>
	 Продавец обязан вернуть клиенту стоимость товара сроком не более 10 дней после получения требования. Узнать подробности можно в ст. 25 Закона РФ «Защите прав потребителей» от 07.02.1992 № 2300-1.
</p>
<p><b>Дополнительно</b></p>
<p>
	 Существует также возможность возврата средств на банковскую карточку. Для этого нужно заполнить заявление, которое мы высылаем по требованию клиента. Возврат средств осуществляется в течение 10 дней.
</p>
<p>
	 Мы заботимся о наших клиентах и всегда идем им навстречу.
</p>
</div>
</div>
</div>
<div class='col-xs-6 detail_r_b'>
	
</div>
<div class='clearfix'>
</div>
<h3 class='text-center detail_title_serials'>
Модели из той же серии:
</h3>
<?
$filter_code_arr = explode('.', $arResult["CODE"]);
if (count($filter_code_arr) > 2) {
    $filter_code = $filter_code_arr[0] . '%';
} else {
    $filter_code_arr = explode('-', $arResult["CODE"]);
    $filter_code = $filter_code_arr[0] . '%';
} ?>

<?
if ($arResult['ORIGINAL_PARAMETERS']['SECTION_CODE'] == 'casio') {
    $filter_code_arr = explode('-', $arResult["CODE"]);
    $filter_code = '%' . preg_replace('/[^0-9]/', '', $filter_code_arr[1]) . '%';
}
?>
<? $GLOBALS['arrSerials'] = array("!ID" => $arResult['ID'], "PROPERTY_PROP15" => $arResult['PROPERTIES']['PROP15']['VALUE_ENUM_ID']) ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"serial", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/cart/",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:9:59\",\"DATA\":{\"logic\":\"Equal\",\"value\":38}}]}",
		"DETAIL_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "PROPERTY_PROP13",
		"ELEMENT_SORT_FIELD2" => "PROPERTY_PROP14",
		"ELEMENT_SORT_ORDER" => "desc,nulls",
		"ELEMENT_SORT_ORDER2" => "desc,nulls",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrSerials",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "PROP3",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "4",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "OLD_PRICE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "props,price,sku,quantityLimit,quantity,buttons,compare",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(
			0 => "SALE",
			1 => "HIT",
			2 => "OLD_PRICE",
			3 => "",
		),
		"PROPERTY_CODE_MOBILE" => "",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_CODE_PATH" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_CODE",
		"SECTION_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "Y",
		"SEF_RULE" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "index-box",
		"MESS_BTN_COMPARE" => "Сравнить"
	),
	false
);?>


<?
if (isset($arResult['OFFERS']) && !empty($arResult['OFFERS']))
{
	foreach ($arResult['JS_OFFERS'] as &$arOneJS)
	{
		if ($arOneJS['PRICE']['DISCOUNT_VALUE'] != $arOneJS['PRICE']['VALUE'])
		{
			$arOneJS['PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arOneJS['PRICE']['DISCOUNT_DIFF_PERCENT'];
			$arOneJS['BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arOneJS['BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'];
		}
		$strProps = '';
		if ($arResult['SHOW_OFFERS_PROPS'])
		{
			if (!empty($arOneJS['DISPLAY_PROPERTIES']))
			{
				foreach ($arOneJS['DISPLAY_PROPERTIES'] as $arOneProp)
				{
					$strProps .= '<dt>'.$arOneProp['NAME'].'</dt><dd>'.(
	is_array($arOneProp['VALUE'])
	? implode(' / ', $arOneProp['VALUE'])
	: $arOneProp['VALUE']
					).'</dd>';
				}
			}
		}
		$arOneJS['DISPLAY_PROPERTIES'] = $strProps;
	}
	if (isset($arOneJS))
		unset($arOneJS);
	$arJSParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => true,
			'SHOW_DISCOUNT_PERCENT' => ($arParams['SHOW_DISCOUNT_PERCENT'] == 'Y'),
			'SHOW_OLD_PRICE' => ($arParams['SHOW_OLD_PRICE'] == 'Y'),
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
			'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
			'OFFER_GROUP' => $arResult['OFFER_GROUP'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'SHOW_BASIS_PRICE' => ($arParams['SHOW_BASIS_PRICE'] == 'Y'),
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => ($arParams['SHOW_CLOSE_POPUP'] == 'Y'),
			'USE_STICKERS' => true,
			'USE_SUBSCRIBE' => $showSubscribeBtn,
		),
		'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
		'VISUAL' => array(
			'ID' => $arItemIDs['ID'],
		),
		'DEFAULT_PICTURE' => array(
			'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
			'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
		),
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'NAME' => $arResult['~NAME']
		),
		'BASKET' => array(
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'BASKET_URL' => $arParams['BASKET_URL'],
			'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		),
		'OFFERS' => $arResult['JS_OFFERS'],
		'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
		'TREE_PROPS' => $arSkuProps
	);
	if ($arParams['DISPLAY_COMPARE'])
	{
		$arJSParams['COMPARE'] = array(
			'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
			'COMPARE_PATH' => $arParams['COMPARE_PATH']
		);
	}
}
else
{
	$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
	if ('Y' == $arParams['ADD_PROPERTIES_TO_BASKET'] && !$emptyProductProperties)
	{
?>
<div id="<? echo $arItemIDs['BASKET_PROP_DIV']; ?>" style="display: none;">
<?
		if (!empty($arResult['PRODUCT_PROPERTIES_FILL']))
		{
			foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo)
			{
?>
	<input type="hidden" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo htmlspecialcharsbx($propInfo['ID']); ?>">
<?
				if (isset($arResult['PRODUCT_PROPERTIES'][$propID]))
					unset($arResult['PRODUCT_PROPERTIES'][$propID]);
			}
		}
		$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
		if (!$emptyProductProperties)
		{
?>
	<table>
<?
			foreach ($arResult['PRODUCT_PROPERTIES'] as $propID => $propInfo)
			{
?>
	<tr><td><? echo $arResult['PROPERTIES'][$propID]['NAME']; ?></td>
	<td>
<?
				if(
					'L' == $arResult['PROPERTIES'][$propID]['PROPERTY_TYPE']
					&& 'C' == $arResult['PROPERTIES'][$propID]['LIST_TYPE']
				)
				{
					foreach($propInfo['VALUES'] as $valueID => $value)
					{
	?><label><input type="radio" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"checked"' : ''); ?>><? echo $value; ?></label><br><?
					}
				}
				else
				{
					?><select name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]"><?
					foreach($propInfo['VALUES'] as $valueID => $value)
					{
	?><option value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"selected"' : ''); ?>><? echo $value; ?></option><?
					}
					?></select><?
				}
?>
	</td></tr>
<?
			}
?>
	</table>
<?
		}
?>
</div>
<?
	}
	if ($arResult['MIN_PRICE']['DISCOUNT_VALUE'] != $arResult['MIN_PRICE']['VALUE'])
	{
		$arResult['MIN_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arResult['MIN_PRICE']['DISCOUNT_DIFF_PERCENT'];
		$arResult['MIN_BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arResult['MIN_BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'];
	}
	$arJSParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => (isset($arResult['MIN_PRICE']) && !empty($arResult['MIN_PRICE']) && is_array($arResult['MIN_PRICE'])),
			'SHOW_DISCOUNT_PERCENT' => ($arParams['SHOW_DISCOUNT_PERCENT'] == 'Y'),
			'SHOW_OLD_PRICE' => ($arParams['SHOW_OLD_PRICE'] == 'Y'),
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'SHOW_BASIS_PRICE' => ($arParams['SHOW_BASIS_PRICE'] == 'Y'),
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => ($arParams['SHOW_CLOSE_POPUP'] == 'Y'),
			'USE_STICKERS' => true,
			'USE_SUBSCRIBE' => $showSubscribeBtn,
		),
		'VISUAL' => array(
			'ID' => $arItemIDs['ID'],
		),
		'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'PICT' => $arFirstPhoto,
			'NAME' => $arResult['~NAME'],
			'SUBSCRIPTION' => true,
			'PRICE' => $arResult['MIN_PRICE'],
			'BASIS_PRICE' => $arResult['MIN_BASIS_PRICE'],
			'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
			'SLIDER' => $arResult['MORE_PHOTO'],
			'CAN_BUY' => $arResult['CAN_BUY'],
			'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
			'QUANTITY_FLOAT' => is_double($arResult['CATALOG_MEASURE_RATIO']),
			'MAX_QUANTITY' => $arResult['CATALOG_QUANTITY'],
			'STEP_QUANTITY' => $arResult['CATALOG_MEASURE_RATIO'],
		),
		'BASKET' => array(
			'ADD_PROPS' => ($arParams['ADD_PROPERTIES_TO_BASKET'] == 'Y'),
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
			'EMPTY_PROPS' => $emptyProductProperties,
			'BASKET_URL' => $arParams['BASKET_URL'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		)
	);
	if ($arParams['DISPLAY_COMPARE'])
	{
		$arJSParams['COMPARE'] = array(
			'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
			'COMPARE_PATH' => $arParams['COMPARE_PATH']
		);
	}
	unset($emptyProductProperties);
}
?>
<script type="text/javascript">
var <? echo $strObName; ?> = new JCCatalogElement(<? echo CUtil::PhpToJSObject($arJSParams, false, true); ?>);
BX.message({
	ECONOMY_INFO_MESSAGE: '<? echo GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO'); ?>',
	BASIS_PRICE_MESSAGE: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_BASIS_PRICE') ?>',
	TITLE_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR') ?>',
	TITLE_BASKET_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS') ?>',
	BASKET_UNKNOWN_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR') ?>',
	BTN_SEND_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS'); ?>',
	BTN_MESSAGE_BASKET_REDIRECT: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT') ?>',
	BTN_MESSAGE_CLOSE: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE'); ?>',
	BTN_MESSAGE_CLOSE_POPUP: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP'); ?>',
	TITLE_SUCCESSFUL: '<? echo GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK'); ?>',
	COMPARE_MESSAGE_OK: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK') ?>',
	COMPARE_UNKNOWN_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR') ?>',
	COMPARE_TITLE: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE') ?>',
	BTN_MESSAGE_COMPARE_REDIRECT: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT') ?>',
	PRODUCT_GIFT_LABEL: '<? echo GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL') ?>',
	SITE_ID: '<? echo SITE_ID; ?>'
});
</script>
<? /***
 * давай наверное MX и ВТ передвигать автоматом. По достижению срока + 5 дней
 */



//echo $end_day;

?>
<?/*
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?=$end_day?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countDown").innerHTML = days + " д. " + hours + "ч. "
            + minutes + "м. " + seconds + "с. ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
           // document.getElementById("countDown").innerHTML = "Распродажи окончены";
        }
    }, 1000);
</script>
*/?>
				<div id="detailForm" class="modal fade">
				<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Запрос на сравнение цены</h4>
					</div>
					<div class="modal-body">
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new", 
		"element_form", 
		array(
			"COMPONENT_TEMPLATE" => "element_form",
			"WEB_FORM_ID" => "2",
			"IGNORE_CUSTOM_TEMPLATE" => "N",
			"USE_EXTENDED_ERRORS" => "Y",
			"SEF_MODE" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"LIST_URL" => "",
			"EDIT_URL" => "",
			"SUCCESS_URL" => "",
			"AJAX_MODE" => "Y",  // режим AJAX
			"AJAX_OPTION_SHADOW" => "N", // затемнять область
			"AJAX_OPTION_JUMP" => "Y", // скроллить страницу до компонента
			"AJAX_OPTION_STYLE" => "Y", // подключать стили
			"AJAX_OPTION_HISTORY" => "N",
			"CHAIN_ITEM_TEXT" => "",
			"CHAIN_ITEM_LINK" => "",
			"VARIABLE_ALIASES" => array(
				"WEB_FORM_ID" => "WEB_FORM_ID",
				"RESULT_ID" => "RESULT_ID",
			),
			"NAME_EL"=>$arResult['NAME'],
			"АRTICUL"=>$arResult['CODE']

		),
		false
	);?>
					</div>
					</div>
				</div>
				</div>
</div>
				<div id="detailFormFeed" class="modal fade">
				<div class="modal-dialog ">
					<div class="modal-content">
					<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Добавить отзыв </h4>
					</div>
					<div class="modal-body ">
	<div class='feed-form-box mfeedback'>
  	<form action="javascript:void(0);" method="POST" id="feedbackForm">
	<div class='form-group'>
		<div class='col-xs-6 text-right'>ОЦЕНКА:</div>
		<div class='col-xs-6'>
			<label for='radio_8'><i class="fa fa-star-o"></i></label>
			<label for='radio_9'><i class="fa fa-star-o"></i></label>
			<label for='radio_10'><i class="fa fa-star-o"></i></label>
			<label for='radio_11'><i class="fa fa-star-o"></i></label>
			<label for='radio_12'><i class="fa fa-star-o"></i></label>
			<input type="radio" id="radio_8" name="form_radio_SIMPLE_QUESTION_870" value="1" class="star">
            <input type="radio" id="radio_9" name="form_radio_SIMPLE_QUESTION_870" value="2" class="star">
            <input type="radio" id="radio_10" name="form_radio_SIMPLE_QUESTION_870" value="3" class="star">
            <input type="radio" id="radio_11" name="form_radio_SIMPLE_QUESTION_870" value="4" class="star">
            <input type="radio" id="radio_12" name="form_radio_SIMPLE_QUESTION_870" value="5"class="star">
		</div>
		<div class='clearfix'></div>
	</div>
<div class="form-group">
		<input type="text" class="form-control" name="user_name" placeholder="ФИО *" required="" value="">
	</div>
	<div class="form-group">
		
		<input type="text" class="form-control" name="user_email" placeholder="E-MAIL *" required="" value="">
	</div>

	<div class="form-group">
		<textarea name="MESSAGE" class="form-control" rows="5" placeholder="ОТЗЫВ *" required="" cols="40"></textarea>
	</div>
	
	<button type="submit" class="btn footer-mail" style="border-radius:0px!important;" name="submit"> Отправить<span><img src="/local/templates/main/img/arWhite.png"></span></button>
	<br>
	<div class='ressult'></div>
</form></div>
					</div>
					
					</div>
				</div>
				</div>
<?// echo "<pre>"; print_r($arResult); echo "</pre>";?>
<script type="text/javascript">
	dataLayer.push({
	"ecommerce": {
	"detail": {
	"products": [
	{
	"id": <?=$arResult["ID"]?>, //обязательный параметр id или name
	"name" : "<?=$arResult["NAME"]?>", //обязательный параметр id или name
	"price": <?=$minPrice['DISCOUNT_VALUE']?>, //стоимость единицы товара
	"brand": "<?=$arResult['SECTION']['NAME']?>",
	"category": "Все товары/Подарки и цветы/Украшения и аксессуары/Наручные часы"
	}
	]
	}
	}
	});
	$('.js-add').click(function(){
		dataLayer.push({
	"ecommerce": {
	"add": {
	"products": [
	{
	"id": <?=$arResult["ID"]?>, //обязательный параметр id или name
	"name" : "<?=$arResult["NAME"]?>", //обязательный параметр id или name
	"price": <?=$minPrice['DISCOUNT_VALUE']?>, //стоимость единицы товара
	"brand": "<?=$arResult['SECTION']['NAME']?>",
	"category": "Все товары/Подарки и цветы/Украшения и аксессуары/Наручные часы",
	"quantity": 1
	}
	]
	}
	}
	});
	})
</script>
<script>
	gtag('event', 'product', {
	'send_to': 'AW-650723090',
	'value': '<?=$minPrice["DISCOUNT_VALUE"]?>',
	'items': [{
	'id': '<?=$arResult["ID"]?>',
	'google_business_vertical': 'retail'
	}]
	});
</script>