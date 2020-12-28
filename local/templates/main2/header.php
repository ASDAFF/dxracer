<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=2" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="index, follow" />
	<? $Asset = \Bitrix\Main\Page\Asset::getInstance();
				/* CSS */
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/jquery.fancybox.min.css");
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/owl.theme.default.css");
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/style.css");
				$Asset->addCss(SITE_TEMPLATE_PATH."/css/fonts.css");
                /*JS*/
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js");
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.js");
				$Asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js");
				$Asset->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/main.js");
		?>
	<?$APPLICATION->ShowHead();?>
	<?
	if($_SERVER['HTTP_HOST']!="timeavenue.su"){
		$domain = "0";
	}else{
		$domain = "2";
	}
	?>
	<?if($domain!=1):?>
<!-- Стандартный скрипт Google Analytics -->
<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-144763646-1', 'auto');
ga('send', 'pageview');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-722449494"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-722449494');
</script>
<?endif;?>
</head>
<body>
<?if($domain!=1):?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
 window.dataLayer = window.dataLayer || [];
 (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
 m[i].l=1*new
Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,
a)})
 (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 ym(54633577, "init", {
 clickmap:true,
 trackLinks:true,
 accurateTrackBounce:true,
 ecommerce:"dataLayer"
 });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54633577" style="position:absolute; left:-9999px;"
alt="" /></div></noscript><?endif;?>
<!-- /Yandex.Metrika counter -->
<?$APPLICATION->ShowPanel();?>
<? /*if ($APPLICATION->GetCurPage(false) === '/'): ?>
	<div>
	<a href='/catalog/sale.php' style='background:url("/local/templates/main/img/bf/detail_banner.jpg")no-repeat' class='detail_b_b'></a>
</div>
<? endif;*/ ?>
<?/*
<div class='red_line'>
	<p>
Наш магазин поздравляет Вас с Новым Годом! Оставить заказ у нас на сайте <br>Вы можете круглосуточно, все они будут обработаны 3 января 2020 г.	
</p>
</div>
*/?>
<div class='header'>
<div class='container'>
	<div class='col-xs-2 logo'>
		<a href='/'>
			<img src='/local/templates/main/img/logo.png' class='img-responsive'>
		</a>
	</div>
	
	<div class='col-xs-3 phone text-left'>
		<a href='tel:88004441607'>8 (800) 444-16-07</a>
		
		<div class='col-xs-2 socialheader shl1'>
		<?/*	<a href='https://wa.me/79510534267'><img src='/local/templates/main/img/wta.png' class='img-responsive'></a>*/?>
		</div>
		<div class='col-xs-2 socialheader shl2'>
			<?/*<a href='tg://resolve?domain=timeavenuecom'><img src='/local/templates/main/img/tta.png' class='img-responsive'></a>*/?>
		</div>
		<div class='clearfix'></div>
	</div>
	<div class='col-xs-2 mob-d text-right'>
		<a href='#callback' data-toggle="modal" class='callback'>Заказать звонок</a>
	</div>
	<div class='col-xs-3 lk-block header-block-box '>
		<div class='col-xs-9'>
			<div class='header-block-title'><a href='/personal/'>ЛИЧНЫЙ КАБИНЕТ</a></div>
			<div class='header-block-link'><a href='/auth/'>Вход</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='/registration.php'>Регистрация</a></div>
		</div>
		<div class='col-xs-3'><img src='/local/templates/main/img/lk.png' class='img-responsive'></div>
		<div class='clearfix'></div>
	</div>
	<div class='col-xs-2 basket-block-header header-block-box  mob-d mob-cart'>
		<div class='col-xs-8 '>
			<div class='header-block-title'><a href='/cart/'>КОРЗИНА</a></div>
			<div class='header-block-link'>
				<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basket", 
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
		"SHOW_IMAGE" => "Y",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_NUM_PRODUCTS" => "N",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_PRICE" => "Y",
		"SHOW_PRODUCTS" => "N",
		"SHOW_SUMMARY" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"COMPONENT_TEMPLATE" => "basket",
		"PATH_TO_AUTHORIZE" => ""
	),
	false
);?>
			</div>
		</div>
		<div class='col-xs-4 '><img src='/local/templates/main/img/basket.png' class='img-responsive'></div>
		<div class='clearfix'></div>
	</div>
	<div class='clearfix'></div>
</div>
</div>
<hr>
<div class='navigation '>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?>
</div>

<div class='clearfix'></div>

	