<?

if ($_POST['tip'] == 'emptyCart') {
	session_start();
	session_destroy();
} elseif ($_POST['tip'] == 'delElement') {
	session_start();
	unset($_SESSION['elements'][$_POST["key"]]);
} elseif ($_POST['tip'] == 'addtocart') {
	session_start();
	$_SESSION['elements'][] = array("image" => $_POST["image"], "art" => $_POST["item"], "price" => $_POST["price"],
		"bigimage" => $_POST["bigimage"],);
} elseif ($_POST['tip'] == 'wtORbv') {
	session_start();
	$_SESSION['wtORbv'] = $_POST['wtORbv'];
	unset($_SESSION['elements']);
} elseif ($_REQUEST['tip'] == 'save') {
	session_start();
	$name = $_POST['name'];
	$value = $_POST['value'];
	$_SESSION['personalData'][$name] = $value;
} elseif ($_REQUEST['tip'] == 'cart') {
	session_start();
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href=favicon.ico"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=400, initial-scale=0.9,maximum-scale=1.0, user-scalable=no"/>
		<meta name="MobileOptimized" content="400"/>
		<meta name="HandheldFriendly" content="true"/>
		<link href="css/jquery.formstyler.css?<?= md5_file('css/jquery.formstyler.css'); ?>" rel="stylesheet">
		<link href="css/style_cart.css?<?= md5_file('css/style_cart.css'); ?>" rel="stylesheet">
		<link href="css/jquery.fancybox.css?<?= md5_file('css/jquery.fancybox.css'); ?>" rel="stylesheet">
		<link href="css/jquery-ui.css?<?= md5_file('css/jquery-ui.css'); ?>" rel="stylesheet">
		<script src="js/jquery-1.11.1.min.js?<?= md5_file('js/jquery-1.11.1.min.js'); ?>"></script>
		<script src="js/jquery.formstyler.min.js?<?= md5_file('js/jquery.formstyler.min.js'); ?>"></script>
		<script src="js/jquery-ui.min.js?<?= md5_file('js/jquery-ui.min.js'); ?>"></script>
		<script src="js/jquery.fancybox.pack.js?<?= md5_file('js/jquery.fancybox.pack.js'); ?>"></script>
		<script src="js/cart.js?<?= md5_file('js/cart.js'); ?>"></script>
		<script src="js/makeinput.js" ?<?= md5_file('js/makeinput.js'); ?>></script>
		<? foreach ($_SESSION['elements'] as $value) {
			$dop = '';
//			if ($value["art"][0] != "T")
//				$dop = '</br>BV';

			$onlyCodesBV .= $value["art"] . $dop . "<br>";
			$codes .= $value["art"] . "<br>";
			$codes_prices .= intval($value["price"]) . "<br>";
			$sum = $sum + intval($value["price"]);
			$list .= $value["art"] . ' - ' . $value["price"] . "<br>";
		} ?>
		<script>
			$(document).ready(function () {
				$('.fancybox').fancybox();
//				$("#phone").mask("99999999999");
			});
			function sending(who) {

				var err = false;


				if ($('#phone').val() == '') {
					$('#phone').css('border-color', 'red');
					err = true;
				} else {
					$('#phone').css('border-color', 'rgb(169, 169, 169)');
				}

				if ($('#name').val() == '') {
					$('#name').css('border-color', 'red');
					err = true;
				} else {
					$('#name').css('border-color', 'rgb(169, 169, 169)');
				}


				if ($('#adress').val() == '') {
					$('#adress').css('border-color', 'red');
					err = true;
				}
				else {
					$('#adress').css('border-color', 'rgb(169, 169, 169)');
				}
				if (err) {
					alert('Не заполнены поля')
					return false;
				}


				var url = '//monarchshop.ru/api/Utils.php';


				var reg = /[^0-9]/g;
				var phone = $('#phone').val();
				phone = phone.replace(reg, "");
				var name = $('#name').val();
				var adress = $('#adress').val();
				var details = $('#details').val();
				var codes = '<?=$codes;?>',
					codes_prices = '<?=$codes_prices;?>',
					sum = '<?=$sum;?>',
					list = '<?=$list;?>',
					onlyCodesBV = '<?=$onlyCodesBV?>'

				$.ajax({
					url: url,
					type: "POST",
					data: {
						auth: '00XFHA567ERT',
						tip: 'send',
						phone: phone,
						name: name,
						adress: adress,
						details: details,
						codes: codes,
						onlyCodesBV: onlyCodesBV,
						codes_prices: codes_prices,
						sum: sum,
						list: list
					},
					success: ( function () {
						insToBase(phone, name, adress, details, list);
						emptyCart();
						alert('Письмо отправлено');
						location.href = 'index.php';

					})
				});
			}
			function insToBase(phone, name, adress, details, list) {
				$.ajax({
					url: '//crm.monarchshop.ru/m/ajax/ins.php',
					type: "POST",
					data: {
						tip: 'insert',
						who: '<?=$_SESSION["wtORbv"]?>',
						phone: phone,
						name: name,
						adress: adress,
						details: details,
						list: list
					}
				});
			}
		</script>
	</head>
	<body>

	<table>
		<tr>
			<td>
				<input type="button" value="Очистить корзину" onclick="emptyCart();">
			</td>
			<td align="right">
				<input type="button" value="Поиск" onclick="location.href='index.php'">
			</td>
		</tr>
		<tr>
			<td>
				<span>Выбранные модели:</span>
			</td>
		</tr>
	</table>
	<table id="cart" cellspacing="2" border="1" cellpadding="5">
		<?
		foreach ($_SESSION['elements'] as $key => $value) {
			?>
			<tr id="el<?= $key ?>">
				<td>
					<a class="fancybox fancybox.ajax" href="/q/getImageForAjax.php?img=<?= $value["bigimage"] ?>"><img
							src="<?= $value["image"] ?>"/></a>
				</td>
				<td>
					<?= $value["art"] ?>
				</td>
				<td>
					<?= $value["price"] ?>
				</td>
				<td>
					<input id="<?= $key ?>" type="button" value="Удалить" onclick="delElement($(this));">
				</td>
			</tr>
		<? } ?>
	</table>
	<table>
		<tr>
			<td>
				Имя:
			</td>
			<td>
				<input type="text" name="name" id="name" placeholder="Иванов Иван Иванович"
					   value="<?= $_SESSION['personalData']["name"] ?>">
			</td>

		</tr>
		<tr>
			<td>
				Телефон:
			</td>
			<td>
				<input type="tel" name="phone" id="phone" placeholder="Введите 10 цифр номера"
					   value="<?= $_SESSION['personalData']["phone"] ?>">
			</td>
		</tr>
		<tr>
			<td>
				Адрес:
			</td>
			<td>
				<textarea rows="3" cols="45" name="adress"
						  id="adress"><?= $_SESSION['personalData']["adress"] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Детали доставки:
			</td>
			<td>
				<textarea rows="3" cols="45" name="details"
						  id="details"><?= $_SESSION['personalData']["details"] ?></textarea>
			</td>
		</tr>
		<? if (!empty($_SESSION['elements'])) { ?>
			<tr>
				<td>
					<input type="button" value="Отправить на MS"
						   onclick="sending('wt');" <?= $_SESSION['wtORbv'] == 'WT' ? 'style="display:none;"' : '' ?>>
				</td>
			</tr>
		<? } ?>
	</table>
	<hr>
	<div id="delivery">
		<div id="calc_block">
			<table>
				<tr>
					<td width="140">
						<label for="region">Город: </label>
					</td>
					<td>
						<input type="text" id="citys" class="styler">
					</td>
				</tr>
			</table>
		</div>
		      <span id="text" style="margin-top:25px;margin-bottom:25px;color: black;">
        </span><br> <br>
	</div>

	</body>
	</html>
<?
} else {

	?>
	<?

	session_start();
//    $_SESSION['wtORbv'] = 'BV'; //тут наоборот т.к. при выборе где искать получаем обратное значение н-р выбрали WT а получили BV
	if (empty($_SESSION['wtORbv']))
		$_SESSION['wtORbv'] = "BV";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href=favicon.ico"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=yes"/>
		<meta name="MobileOptimized" content="500"/>
		<meta name="HandheldFriendly" content="true"/>
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/jquery.formstyler.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.formstyler.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="js/cart.js"></script>

	</head>

	<body>
	<script>
		$(document).ready(function () {
				$('#WT').prop('checked', true);
				$('#WT-styler').addClass('checked');
		});
	</script>
	<table width="500">
<tr>
<td>
<table width="300">
		<tr>
		<?/*	<td>
				<span>Где искать:</span>
			</td>*/?>
			<td>
			</td>
			<td>
				<input type="button" value="Корзина" onclick="location.href='index.php?tip=cart'" class="styler"
					   style="width: 80px;">
			</td>
		</tr>
	<?/*	<tr>
			<td>
				<label for="WT"> MS</label><input id="WT" type="radio" name="radio" value="WT"
												  onchange="uncheked('BV');">
			</td>
<!--			<td align="right">-->
<!--				<label for="BV"> BV</label> <input id="BV" type="radio" name="radio" value="BV"-->
<!--												   onchange="uncheked('WT');">-->
<!--			</td>-->


		</tr>
*/?>
		<tr>
			<td>
				<input type="text" placeholder="Поиск" id="art" onkeydown="if (event.keyCode == 13) getbyart();"
					   class="styler" style="width: 190px;">
			</td>
			<td>
				<input type="button" onclick="getbyart();" value="Найти" class="styler" style="width: 80px;">
			</td>
		</tr>
</table>
</td>
</tr>

		<tr>
			<td  colspan="2">
				<div id="elements">

				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" value="Архив" onclick="location.href='/m/search/'" class="styler">
			</td>
		</tr>
	</table>

	<div class="overlay" title="окно"></div>
	<div class="popup">
		<div class="close_order" onclick="closing();">x</div>
		<form id="buy_or_not">
			<table>
				<tr>
					<td align="center">
						<input type="button" onclick="closing();" value="Продолжить выбор" class="styler">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" onclick="location.href='index.php?tip=cart'" value="Оформить заказ"
							   class="styler">
					</td>
				</tr>
			</table>
		</form>
	</div>


	</body>
	</html>
<? } ?>