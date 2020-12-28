<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=3" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow" />
	<meta name="google-site-verification" content="Ml1wPor_mHh5LsNSv7egHoWQNuKtBxt4I3GyVLBiQ6I" />
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
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.min.js");
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.js");
		$Asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js");
		$Asset->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
                $Asset->addJs(SITE_TEMPLATE_PATH."/js/main.js");

		?>
	<?$APPLICATION->ShowHead();?>
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
	   ym(70338997, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true,
	        ecommerce:"dataLayer"
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/70338997" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163781973-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-163781973-1');
	</script>
	
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WGKXZJF');</script>
	
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGKXZJF"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	
</head>
<body>

<?$APPLICATION->ShowPanel();?>
<div class='header'>
	<div class='container hidden-xs hidden-sm'>
		<div class='col-xs-12 col-lg-3 logo header-block-box'>
			<a href='/'>
				<img src='/local/templates/main/img/logo.png' class='img-responsive logo'>
			</a>
		</div>
		<div class='col-xs-12 col-lg-1'></div>
		<div class='col-xs-12 col-lg-3 phone header-block-box '>
			<a href='tel:+784954099105' class='phone-link'>8 (495) 409-9105</a>
			<a href='https://wa.me/79510534267' class='header_social'><img src='/local/templates/main/img/wt.png' ></a>
			<a href='tg://resolve?domain=timeavenuecom' class='header_social'><img src='/local/templates/main/img/telegram.png'></a><br>
			<div class='text-left'>
				<a href='#callback' data-toggle="modal" class='callback_new'>Заказать звонок</a>
			</div>
		</div>
		<div class='col-xs-12 col-lg-3 lk-block header-block-box'>
			<div class='col-xs-9'>
			<div class='header-block-title'><a href='/personal/'>ЛИЧНЫЙ КАБИНЕТ</a></div>
			<div class='header-block-link'><a href='/auth/'>Вход</a><?/*&nbsp;&nbsp;|&nbsp;&nbsp;<a href='/registration.php'>Регистрация</a>*/?></div>
		</div>
		<div class='col-xs-3'><img src='/local/templates/main/img/lk.png' class='img-responsive'></div>
		<div class='clearfix'></div>
		</div>
		<div class='col-xs-2 basket-block-header header-block-box'>
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
		<div class='clearfix'>
		
		</div>
	</div>
	<div class='container visible-xs visible-sm'>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu_mobile", Array(
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
</div>
<div class='navigation hidden-xs hidden-sm'>
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
	<div class='content'>