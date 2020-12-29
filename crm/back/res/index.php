<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href=favicon.ico"/>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=400, initial-scale=0.9,maximum-scale=1.0, user-scalable=no"/>
	<meta name="MobileOptimized" content="400"/>
	<meta name="HandheldFriendly" content="true"/>
	<link href="../css/jquery.formstyler.css" rel="stylesheet">
	<link href="../css/style_cart.css" rel="stylesheet">
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/jquery.formstyler.min.js"></script>
	<script src="../js/makeinput.js"></script>
	<script>
		$(document).ready(function () {
			$('input').addClass('styler');
			$('textarea').addClass('styler')
		});
		$(function ($) {
			$("#phone").mask("(999) 999-9999");

		});
		function sendingInWork(who) {

			var err = false;
			if ($('#codes').val() == '') {
				$('#codes').css('border-color', 'red');
				err = true;
			} else {
				$('#codes').css('border-color', 'rgb(169, 169, 169)');
			}

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


			var url = 'https://max-watches.ru/api/GetByNameZakaz1234.php';
			var subject = 'На обработку WT';


			var phone = $('#phone').val();
            var name = $('#name').val();
            var adress = $('#adress').val();
            var details = $('#details').val();
            var codes = $('#codes').val();
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
					subject: subject
				},
				success: ( function () {
					alert('Письмо отправлено');
//					location.href = 'index.php';

				})
			});
		}
	</script>
	<!--	<script src="../js/cart.js"></script>-->
	<table>
		<tr>
			<td>
				Модель часов:
			</td>
			<td>
				<input type="text" name="codes" id="codes"/>
			</td>
		</tr>
		<tr>
			<td>
				Имя:
			</td>
			<td>
				<input type="text" name="name" id="name"/>
			</td>
		</tr>
		<tr>
			<td>
				Телефон:
			</td>
			<td>
				<input type="text" name="phone" id="phone"/>
			</td>
		</tr>
		<tr>
			<td>
				Город (или адрес):
			</td>
			<td>
				<input type="text" name="adress" id="adress"/>
			</td>
		</tr>
		<tr>
			<td>
				Комментарий:
			</td>
			<td>
				<textarea name="details" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
	</table>
	<input type="submit" onclick="sendingInWork('WT')" value="Отправить на WT"/>
	<input type="submit" onclick="sendingInWork('BV')" value="Отправить на BV"/>
