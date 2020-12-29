<?php
require_once("edit.php");
$g = new GetSend();
if ($_POST['tip'] == 'get') {
	if (!empty($_POST['tip'])) {
		$notBuy = true;
	}
	$notBuy = $_POST['notBuy'];
	unset($_POST['notBuy']);
	$g->fields = $_POST;
	echo $g->genElsTable($notBuy);
}

if ($_POST['tip'] == 'send') {
	$g->fields = $_POST;
	$g->sendEl();
}


class GetSend
{
	public $str;
	public $url;
	public $fields;
	public $tip;
	private $auth = '00XFHA567ERT';

	/*
		 *  Поиск элементов
		 * @param bool $notBuy не выводить кнопку покупки
		 */

	public function genElsTable($notBuy = true)
	{

		$buyTd = "";
		$this->url = 'https://monarchshop.ru/api/getByFind.php';
//		$this->fields = $_POST;
		$res = $this->GetSendByCurl();
		if ($res) {
			if (!$notBuy)
				$buyTd = '<td align="center">
       					 <input id="buy" class="styler" type="button" value="Добавить" item-id="' . $item["CODE"] . '" item-price="' . $item["price"] . '">
					</td>';

			$out = '<table cellspacing="1" border="1" cellpadding="5" width="435" align="center">';

			foreach ($res as $value) {
				$item = $value['item'];
				$out .= '<tr class="el" id="' . $item["ID"] . '">
					<td align="center">
							<img src="' . $item["smallImage"] . '">
					</td>
					<td align="center">
					<span class="code-el">' . $item["CODE"] . '</span>
					</td>
					<td align="center">
					<span class="price-el">' . $item["price"] . '</span>
					</td>
                       ' . $buyTd . '
					</tr>';

			}
			$out .= '</table>';
		} else {

			$out = '<span style="color:red;">Ничего не найдено</span><br>';
			$out .= '<input id="addRequest" class="styler" type="button" value="Добавить">';
		}

		return $out;
	}

	/**
	 * Отправляем заявку
	 */
	public function sendEl()
	{

		$this->url = 'https://monarchshop.ru/api/getByFind.php';
		$this->fields = $_POST;
		$this->GetSendByCurl();
		$edit = new EDIT();
		$edit->insert_data($_POST);
	}

	private function GetSendByCurl()
	{
		$fields_string = '';
		$fields = $this->fields;
		foreach ($fields as $key => $value) {
			$fields_string .= $key . '=' . $value . '&';
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, count($fields) + 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string . 'auth=' . $this->auth);
		$result = curl_exec($ch);
		curl_close($ch);
		return unserialize($result);
	}
}

