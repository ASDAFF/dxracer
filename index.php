<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<a href='/catalog/'>
<div class='block-slide' style="background:url(/local/templates/main/img/slider_top.jpg) center center; height: 600px; background-size: cover; background-repeat: no-repeat;">

		<div class='col-xs-12 block-slide-text'> 
			<h2>
			КРЕСЛА
			</h2>
		     <h1>
			 DXRacer
			 </h1>
			 <p>
				 <b class="text-red">
				 С 2006 года DXRacer 
				</b>
				 разрабатывает и производит
				 <br>
				  высококачественные игровые стулья для игр и офисов.
			 </p>
			 <img src="/local/templates/main/img/tocat.png" class="tocat-img">
		</div>
		
        <div class='clearfix'></div>

</div></a>

<div class='block-trends'>
	<div class='container'>
		<p class='text-center'>ПОПУЛЯРНЫЕ МОДЕЛИ</p>
				<?$GLOBALS["tab1"] = array('IBLOCK_ID'=>11,'PROPERTY_42' => 33,'PROPERTY_59' => 38);?>
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
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "timestamp_x",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
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
		"PAGE_ELEMENT_COUNT" => "12",
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
		"COMPONENT_TEMPLATE" => "serial",
		"MESS_BTN_COMPARE" => "Сравнить",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
			<br>
			<p class='text-center'><a href="/catalog/" class='footer-mail'>ВСЕ МОДЕЛИ</a></p>
	</div>
</div>

<div class='block-feedbacks'>
    <div class='container'>
		
	<p class='text-center f-title'>ОТЗЫВЫ О НАС</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"flat_feed", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "10",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "TEXT_F",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "VIDEO",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "flat_feed",
		"TEMPLATE_THEME" => "blue",
		"STRICT_SECTION_CHECK" => "N",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "Y",
		"USE_SHARE" => "N",
		"FILE_404" => "",
		"DISPLAY_AS_RATING" => "rating",
		"MAX_VOTE" => "5",
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
	<br>
	<div class="feed-box">
    <div class="container">
			<p class='text-center'><a href="/feedbacks/" class='footer-mail'>ВСЕ ОТЗЫВЫ<span></span></a></p>
    </div>
</div>
</div>


<div class='block-little-about'>

	<div class="container">
		<p class='text-center l-title'>Немного о <i class='text-red'>DxRacer</i></p>
		<p>
			<i class='text-red'>С 2006 года DXRacer </i>  разрабатывает и производит высококачественные игровые стулья для игр и офисов.
			</p>	<p>
			С самого начала DXRacer не был и не является просто геймерским стулом. Передовые технологии игровых кресел, импортированные из гоночной техники, сочетают в себе высочайший стандарт, долговечность и идеальный комфорт сиденья. Каждый игровой стул имеет сложную конструкцию стальной рамы и функции, которые поддерживают и способствуют эргономично здоровой осанке. DXRacer является кратным победителем тестирования в области игровых стульев и гордится тем, что его поддерживает большая фан-база по всему миру.
            </p>	<p>
			DXRacer означает эргономичный дизайн, качество, комфорт и разнообразие. Для каждого телосложения доступна подходящая модель, которая может быть дополнительно настроена с помощью регулируемых подлокотников и регулируемых подушек. Шейные и поясничные позвонки, руки и ноги оптимально поддерживаются, что обеспечивает длительное сидение без усталости. Множество различных конструкций и цветов игровых стульев также не оставляют желать лучшего.
		</p>
	</div> 


   
</div>


<div class='block-subscribe text-center'>
<p class='text-center'>Подписка на новости</p>
    <div class='container'>
        <?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "template1", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"USE_PERSONALIZATION" => "N",	// Определять подписку текущего пользователя
		"CONFIRMATION" => "N",	// Запрашивать подтверждение подписки по email
		"SHOW_HIDDEN" => "N",	// Показать скрытые рассылки для подписки
		"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "Y",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "Y",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"HIDE_MAILINGS" => "N",	// Скрыть список рассылок, и подписывать на все
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
);?>
    </div>
</div><?

$APPLICATION->SetPageProperty("description", "RTX интернет магазин новейших видеокарт. Мы предлагаем видеокарты c гарантией MSI RADEON RTX, MSI GEFORCE RTX. Бесплатная доставка видеокарт в течение дня по г. Москве");
$APPLICATION->SetPageProperty("keywords", "RTX, Видеокарты RTX, MSI RADEON RTX, MSI GEFORCE RTX, Видеокарты RTX с доставкой, Новейшая RTX");
$APPLICATION->SetPageProperty("title", "RTX интернет-магазин видеокарт| RTXshop");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
