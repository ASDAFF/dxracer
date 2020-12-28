<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class='content-main-page'>
<div class='footer'>
	<div class='container'>
		<div class='footer-menu'>
			<ul class="col-xs-9 ">
				<li><a href='/about/'>О магазине</a></li>
				<li><a href='/dostavka/'>Доставка</a></li>
				<li><a href='/kak-kupit/'>Как купить</a></li>
				<li><a href='/politika/'>Политика возврата</a></li>
				<li><a href='/podlinnost-i-garantiya/'>Подлинность и гарантия</a></li>
				<li><a href='/contacts/'>Контакты</a></li>
			</ul>
			<div class='col-xs-3  text-right'>
				<a href='/contacts/'  class='footer-mail'>Обратная связь <span><img src="/local/templates/main/img/arWhite.png"></span></a>
			</div>
			<div class='clearfix'></div>
		</div>
		<br>
		<div class='footer-info'>
			<table class='table'>
				<tr>
					<td class='td1 col-xs-3'>
						<a href='/'>
							<img src='/local/templates/main/img/flogo.png' class='img-responsive'>
						</a>
					</td>
					<td class='td2 col-xs-6'>
						<div class='phone-footer  text-center'>
							<a href='tel:88004441607'>8 (800) 444-16-07</a>
						</div>
					</td>
					<td class='td3 col-xs-3'>
						<div class='text-right al'>
				<a href='https://web.facebook.com/profile.php?id=100040454797307' target='_blank'><img src='/local/templates/main/img/fb.png' ></a>
			<a href='https://vk.com/timeavenue' class='footer-social' target='_blank'><img src='/local/templates/main/img/wk.png' ></a>
			<a href='https://www.youtube.com/channel/UCCYNX-OvOIlYcvVdYWpXZIA' class='footer-social'><img src='/local/templates/main/img/yo.png' ></a>
			<a href='https://www.instagram.com/_time_avenue_com/?hl=ru' class='footer-social'  target='_blank'><img src='/local/templates/main/img/in.png' ></a>
			</div>
					</td>
				</tr>
			</table>
		</div>
		<hr>
		<div class='footer-social'>
		<div class='col-xs-2 rait_1'>
			<img src='/local/templates/main/img/rait.png' class='img-responsive'>
		</div>
		<div class='col-xs-4'>
			<img src='/local/templates/main/img/rait_2.png' class='img-responsive'>
		</div>
		<div class='col-xs-3'></div>
		<div class='col-xs-3 pay-box text-right'>
			Принимаем к оплате:
				<img src='/local/templates/main/img/pay.png' class='img-responsive'>
			
		</div>
		<div class='clearfix'></div>
		</div>
	</div>
</div>
<div class='footer-line'>
	<div class='container'>
		<div class='col-xs-6'>
			© <?=date('Y')?> «TimeAvenue» Все права защищены
		</div>
		<div class='col-xs-6 text-right'>
			<a href='/conf/'>Политика конфиденциальности</a>
		</div>
		<div class='clearfix'></div>
	</div>
</div>
</div>
<?//заказать звонок?>
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Заказать звонок</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"order_call", 
	array(
		"COMPONENT_TEMPLATE" => "order_call",
		"WEB_FORM_ID" => "1",
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
		)
	),
	false
);?>
      </div>
    </div>
  </div>
</div>

<?//заказать звонок?>
<div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Отправить сообщение</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?$APPLICATION->IncludeComponent("bitrix:main.feedback","main",Array(
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => "m.rogushina@yandex.ru",
        "REQUIRED_FIELDS" => Array("NAME","EMAIL","MESSAGE"),
        "EVENT_MESSAGE_ID" => Array("5")
    )
);?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addBasket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Товар добавлен в корзину</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
	  <br>
       <a href='/cart/' class='footer-mail'>Перейти к оформлению заказа</a>
	   <br> <br>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sug-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Заказ успешно отправлен</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
		  <p>Ваш заказ успешно отправлен, в ближайшее время с вами свяжется наш сотрудник</p>
       <a href='/catalog/' class='footer-mail'>Вернуться в каталог</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>