<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="navbar navbar-default">
  <!-- Контейнер (определяет ширину Navbar) -->
  <div class="container">
    <!-- Заголовок -->
    <div class="navbar-header col-xs-3">
      <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main2">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Бренд или название сайта (отображается в левой части меню) -->    
    </div>
	<div class='col-xs-8 phone header-block-box' style="text-align:center">
		<a href='/'>
			<img src='/local/templates/main/img/logo.png' class='img-responsive'>
		</a>
		<a href='tel:88004441607' class='phone-link'>8 (800) 444-16-07</a><?/*
		<a href='https://wa.me/79510534267' class='header_social'><img src='/local/templates/main/img/wt.png' ></a>
		<a href='tg://resolve?domain=timeavenuecom' class='header_social'><img src='/local/templates/main/img/telegram.png'></a><br>
		<div class='text-left'>
			<span class="free_call">Звонок бесплатный</span>
			<a href='#callback' data-toggle="modal" class='callback_new'>Заказать звонок</a>
		</div>*/?>
	</div>
	<div class='col-xs-1'>	
		<?$APPLICATION->IncludeComponent(
			"bitrix:sale.basket.basket.line", 
			"basket_mob", 
			array(
				"HIDE_ON_BASKET_PAGES" => "N",
				"PATH_TO_BASKET" => SITE_DIR."/cart/",
				"PATH_TO_ORDER" => SITE_DIR."order/",
				"PATH_TO_PERSONAL" => SITE_DIR."personal/",
				"PATH_TO_PROFILE" => SITE_DIR."personal/",
				"PATH_TO_REGISTER" => SITE_DIR."login/",
				"POSITION_FIXED" => "N",
				"POSITION_HORIZONTAL" => "right",
				"POSITION_VERTICAL" => "top",
				"SHOW_AUTHOR" => "N",
				"SHOW_DELAY" => "N",
				"SHOW_EMPTY_VALUES" => "Y",
				"SHOW_IMAGE" => "N",
				"SHOW_NOTAVAIL" => "N",
				"SHOW_NUM_PRODUCTS" => "N",
				"SHOW_PERSONAL_LINK" => "N",
				"SHOW_PRICE" => "N",
				"SHOW_PRODUCTS" => "N",
				"SHOW_SUMMARY" => "N",
				"SHOW_TOTAL_PRICE" => "Y",
				"COMPONENT_TEMPLATE" => "basket",
				"PATH_TO_AUTHORIZE" => ""
			),
			false
		);?>
	</div>
	<div class='clearfix'>
	
	</div>
    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
    <div class="collapse navbar-collapse" id="navbar-main2">
     <ul class="nav navbar-nav">
	        <li><a href="/catalog/">КАТАЛОГ</a></li><?/*
		<li>
			<a href="javascript:void(0);" data-toggle="dropdown">КАТАЛОГ</a>
			<ul class="dropdown-menu dop-menu">
				<?$arFilter = Array('IBLOCK_ID'=>9, 'GLOBAL_ACTIVE'=>'Y');
				$db_list = CIBlockSection::GetList(Array("SORT"=>"­­DESC"), $arFilter, true);
				$db_list->NavStart(20);
				while($ar_result = $db_list->GetNext())
				{
					//echo "<pre>"; print_r($ar_result); echo "</pre>";?>
					<li class='vert'><a href="<?=$ar_result['SECTION_PAGE_URL']?>" class='<?if($ar_result['NAME']=='Diesel' || $ar_result['NAME']=='Tissot' || $ar_result['NAME']=='Calvin Klein' || $ar_result['NAME']=='Casio'):?>liBold<?endif;?>'><?=$ar_result['NAME']?></a></li>
				<?}?>
				<li class='last-link-catalog'><a href='/catalog/'>ВСЕ МОДЕЛИ&nbsp;&nbsp;&nbsp;</a></li>
	          	</ul>
		</li>*/?>
		<li><a href="javascript:void(0);" data-toggle="dropdown">ДЛЯ ПОКУПАТЕЛЕЙ</a>
			<ul class="dropdown-menu dop-menu">
				<li class='vert'><a href="/about/">О магазине</a></li>
				<li class='vert'><a href="/dostavka/">Доставка</a></li>
				<li class='vert'><a href="/kak-kupit/">Как купить</a></li>
				<li class='vert'><a href="/politika/">Политика возврата</a></li>
				<li class='vert'><a href='/podlinnost-i-garantiya/'>Подлинность и гарантия</a></li>
				<li class='vert'><a href="/contacts/">Контакты</a></li>
			</ul>
		</li>
	        <li><a href="/feedbacks/">ОТЗЫВЫ</a></li>
	        <li><a href="/catalog/sale.php">АКЦИИ</a></li>
       		<li><a href="/personal/">ЛИЧНЫЙ КАБИНЕТ</a></li>
       		<li><a href="/auth/">Вход</a></li>
       		<!-- <li><a href="/registration.php">Регистрация</a></li> -->
        
	  </ul>
	  <ul class="nav navbar-nav navbar-right  col-md-4">
 <li class='search-li'>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"search", 
	array(
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "title-search",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "150",
		"SHOW_PREVIEW" => "Y",
		"PREVIEW_WIDTH" => "75",
		"PREVIEW_HEIGHT" => "75",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"PAGE" => "#SITE_DIR#search.php",
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "10",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "Y",
		"CHECK_DATES" => "Y",
		"SHOW_OTHERS" => "N",
		"CATEGORY_0_TITLE" => "",
		"CATEGORY_0" => array(
			0 => "iblock_content",
		),
		"CATEGORY_0_iblock_news" => array(
			0 => "all",
		),
		"CATEGORY_1_TITLE" => "Форумы",
		"CATEGORY_1" => array(
			0 => "forum",
		),
		"CATEGORY_1_forum" => array(
			0 => "all",
		),
		"CATEGORY_2_TITLE" => "Каталоги",
		"CATEGORY_2" => array(
			0 => "iblock_books",
		),
		"CATEGORY_2_iblock_books" => "all",
		"CATEGORY_OTHERS_TITLE" => "Прочее",
		"COMPONENT_TEMPLATE" => "search",
		"CATEGORY_0_iblock_content" => array(
			0 => "9",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
 </li>
</ul>
    </div>
  </div>
</nav>