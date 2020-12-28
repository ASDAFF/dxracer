<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?>
<div class='container'>
<div class='col-xs-12 feedback'>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order", 
	".default", 
	array(
		"SEF_MODE" => "N",
		"ORDERS_PER_PAGE" => "20",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_BASKET" => "/personal/cart/",
		"SET_TITLE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_HIDE_USER_INFO" => array(
			0 => "LOGIN",
			1 => "EMAIL",
			2 => "PERSON_TYPE_NAME",
		),
		"PROP_1" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "5",
		),
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"PATH_TO_CATALOG" => "/catalog/",
		"SAVE_IN_SESSION" => "Y",
		"NAV_TEMPLATE" => "",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"REFRESH_PRICES" => "N",
		"ORDER_DEFAULT_SORT" => "DATE_INSERT",
		"ALLOW_INNER" => "N",
		"ONLY_INNER_FULL" => "N",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
</div><div class='clearfix'></div></div><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>