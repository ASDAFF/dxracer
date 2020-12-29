<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
if($_SERVER['HTTP_HOST']!="timeavenue.su"){
$domain = 0;
}else{
$domain = 2;
}
?>
<div class='container cart'>
	<form id='OrderMake' onsubmit='OrderMake();' action='javascript:void(0);'>
	<div class='col-xs-12 col-lg-4'>
			<h1 class="sec-title">Контактная информация</h1>
		<div class='sec'>
			<p>
				<span class="badge">1</span> Контактная информация получателя
			</p>
		</div>
		<div class='form-group'>
		<input type='text' name='name' class='form-control f1 js-f-name' required value="" placeholder="ФИО *" ></div>
		<div class='form-group'><input type='text' name='email' class='form-control f1 js-f-mail' required value="" placeholder="E-MAIL *"></div>
		<div class='form-group'><input type='text' name='phone' class='mask-phone js-f-phone form-control f1' required value="" placeholder="ТЕЛЕФОН *"></div>
		<div class="form-group"><textarea name="adress" required="" class="form-control f1 js-f-adress" placeholder="ПОЛНЫЙ АДРЕС ДОСТАВКИ *"></textarea></div>
		<div class="form-group"><textarea name="comment" rows="5" class="form-control " placeholder="КОММЕНТАРИЙ"></textarea></div>
		<div class='form-group usloviya'>
		<div class='sec-dus'>
			<p>
				<span class="badge">2</span> Способ доставки и оплаты
			</p>
		</div>
			<div class="usloviya_box">
			  <div class="col-xs-2">
				  <img src="/local/templates/main/img/shape.png" alt="">
			  </div>
			  <div class="col-xs-10 inf">
					<p class="title">
						Бесплатная доставка
					</p>
                     <p>
						Бесплатная доставка по всей России в максимально сжатые сроки
					 </p>
					 <p class="ditals text-red">
						 <a href="/dostavka/">Детально</a>
					 </p>
			</div>
			  <div class='clearfix'></div>
			</div>
		</div>
	

	</div>
	<div class='col-xs-12 col-lg-8'>
		
<?
		$arBasketItems = array();
		$dbBasketItems = CSaleBasket::GetList(
				array(
						"NAME" => "ASC",
						"ID" => "ASC"
					),
				array(
						"FUSER_ID" => CSaleBasket::GetBasketUserID(),
						"LID" => SITE_ID,
						"ORDER_ID" => "NULL"
					),
				false,
				false,
				array("ID", "CALLBACK_FUNC", "MODULE", 
					"PRODUCT_ID", "QUANTITY", "DELAY", 
					"CAN_BUY", "PRICE", "WEIGHT")
			);

			$summ = 0;
			
		while ($arItems = $dbBasketItems->Fetch())
		{
			$res = CIBlockElement::GetByID($arItems['PRODUCT_ID']);
			if($ar_res = $res->GetNext()){
				$arItems['PRODUCT_NAME'] = $ar_res['NAME'];
			}
			$arItems['PRICE'] = str_replace(".0000","",$arItems['PRICE']);
			$arBasketItems[] = $arItems;
			$summ += $arItems["QUANTITY"]*$arItems["PRICE"];
		}
		
?>
	<div class=''>
	<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"basket", 
	array(
		"ACTION_VARIABLE" => "basketAction",
		"AUTO_CALCULATION" => "Y",
		"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "DISCOUNT",
			2 => "WEIGHT",
			3 => "DELETE",
			4 => "PRICE",
			5 => "QUANTITY",
			6 => "SUM",
		),
		"CORRECT_RATIO" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "N",
		"PATH_TO_ORDER" => "make/",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"COMPONENT_TEMPLATE" => "basket",
		"DEFERRED_REFRESH" => "N",
		"USE_DYNAMIC_SCROLL" => "Y",
		"SHOW_FILTER" => "Y",
		"SHOW_RESTORE" => "Y",
		"COLUMNS_LIST_EXT" => array(
			0 => "DELETE",
		),
		"COLUMNS_LIST_MOBILE" => array(
			0 => "DELETE",
		),
		"TOTAL_BLOCK_DISPLAY" => array(
			0 => "top",
		),
		"DISPLAY_MODE" => "extended",
		"PRICE_DISPLAY_MODE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"USE_PRICE_ANIMATION" => "Y",
		"LABEL_PROP" => "",
		"COMPATIBLE_MODE" => "Y",
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "",
		"BASKET_IMAGES_SCALING" => "standard",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"ADDITIONAL_PICT_PROP_1" => "-",
		"ADDITIONAL_PICT_PROP_9" => "-"
	),
	false
);?>
<br>
<?if(!empty($arBasketItems)):?>
<p class="js-add text-right">
	<button type='submit' class="js-add-order  add-order-f">

<img src="/local/templates/main/img/order-button.png"></button></p><?endif;?>
	</div>
	</div>
	<div class='clearfix'></div></form>
</div>
<script>
<?
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
$codeOrder = TA_.generate_string($permitted_chars, 20);
?>
function OrderMake() {
    var msg = $('#OrderMake').serialize();
	var name = $('.js-f-name').val().replace(/ +/g, '');
	var phone = $('.js-f-phone').val().replace(/ +/g, '');
	var email = $('.js-f-mail').val().replace(/ +/g, '');
	var adress = $('.js-f-adress').val().replace(/ +/g, '');
	
	if(name.length >= 1 && phone.length >= 1 && email.length >= 1 && adress.length >= 1){
		console.log(name);
   $.ajax({
        type: 'POST',
        url: '/ajax/OrderMake.php',
        data: msg,
        success: function (data) {
            $('.js-add').hide();
			$('#sug-order').modal();
			<?if($domain!=1):?>
            ym(70338997, 'reachGoal', 'zakaz'); ga('send', 'event', 'order', 'send');
			gtag('event', 'purchase', {
				'send_to': 'AW-722449494',
				'value': '<?=$summ?>',
				
				'items': [
					<?foreach($arBasketItems as $item):	?>
						{
						'id': '<?=$item["PRODUCT_ID"]?>',
						'google_business_vertical': 'retail'
						},
					<?endforeach;?>
				]
				
				});
				dataLayer.push({
				"ecommerce": {
				"purchase": {
				"actionField": {
				"id" : "<?=$codeOrder?>", //id транзакции, обязательный параметр
				"affiliation": "Time-Avenue", //Название магазина
				"revenue": "<?=$summ?>", //Полученный доход, если не указан, вычисляется
				//сумма цен оформленных товаров
				"shipping": "0" //Стоимость доставки
				},
				"products": [
				<?foreach($arBasketItems as $item):
				$str=strpos($item["PRODUCT_NAME"]," ");
				$brand=substr($item["PRODUCT_NAME"], 0, $str);	
				?>
					{
					"id": <?=$item["PRODUCT_ID"]?>, //обязательный параметр id или name
					"name" : "<?=$item['PRODUCT_NAME']?>", //обязательный параметр id или name
					"price": <?=$item['PRICE']?>, //стоимость единицы товара
					"brand": "<?=$brand?>",
					"category": "Все товары/Подарки и цветы/Украшения и аксессуары/Наручные часы",
					"quantity": $("#QUANTITY_INPUT_<?=$item['PRODUCT_ID']?>").val()
					},
				<?endforeach;?>
				]
				}
				}
				});

				ga('require', 'ecommerce', 'ecommerce.js'); // Инициализируется плагин эл. торговли
				ga('ecommerce:addTransaction', {
				'id': '<?=$codeOrder?>', // Идентификатор заказа. Обязательный параметр.
				'affiliation': 'Time-Avenue', // Название магазина
				'revenue': '<?=$summ?>', // Финальная стоимость заказа, копейки - после точки
				'shipping': '0', // Стоимость доставки
				'tax':'0' // Налог
				});
				<?foreach($arBasketItems as $item):
				$str=strpos($item["PRODUCT_NAME"]," ");
				$brand=substr($item["PRODUCT_NAME"], 0, $str);	
				?>
				ga('ecommerce:addItem',{
				'id':'<?=$codeOrder?>', // Идентификатор заказа, тот же, что и в первой функции. Обязательный параметр
				'name':'<?=$item["PRODUCT_NAME"]?>', // Наименование товара. Обязательный параметр
				'sku':'<?=$item["PRODUCT_ID"]?>', // Идентификатор (артикул) товара
				'category':'Наручные часы', // Категория или доп. классификация
				'price':'<?=$item['PRICE']?>', // Стоимость за единицу товара
				'quantity':$("#QUANTITY_INPUT_<?=$item['PRODUCT_ID']?>").val()// Количество товара
				});
				<?endforeach;?>
				ga('ecommerce:send'); //Отправка данных
				ga('ecommerce:clear'); //Очистка данных
			<?endif;?>
        },
        error: function (xhr, str) {
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });}
	else{
		alert('Введите значение обязательных полей');
	}
}
</script>
<?if($domain!=1):?>
<script>

	gtag('event', 'cart', {
	'send_to': 'AW-722449494',
	'value': '<?=$summ?>',
	
	'items': [
		<?foreach($arBasketItems as $item):	?>
		{
	'id': '<?=$item["PRODUCT_ID"]?>',
	'google_business_vertical': 'retail'
	},
<?endforeach;?>
]
	
	});
</script>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>