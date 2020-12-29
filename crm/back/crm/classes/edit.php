<?php
require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
//require_once("GetSend.php");
require_once("DBConn.php");
require_once("config.php");
require_once("admin.php");


/**
 * Class EDIT
 */
class EDIT
{


	public $dop_sql;
	public $db;
	private $out_table;
	private $table_name = '`crm`';

	public function __construct()
	{
		$this->db = new simpleMysqli(DBSettings::$settings);
	}


	/**Получаем все запси
	 * @param string $dop_sql
	 * @param string $keyName
	 * @return array|false
	 */
	public function getRecords($dop_sql = "", $keyName = "", $where_man = "")
	{

		if (empty($where_man)) {
			if (is_array($dop_sql)) {
				$where_sql = "WHERE ";
				foreach ($dop_sql as $key => $value) {
					if (!empty($keyName))
						$key = $keyName;
					$where_sql .= "`" . $key . "`='" . $value . "' OR";
				}
				$where_sql = rtrim($where_sql, "OR");
			}
		} else {
			$where_sql = $where_man;
		}
		$sql = "SELECT * FROM " . $this->table_name . " " . $where_sql . " ORDER BY  `data_insert` DESC ";
		$result = $this->db->select($sql);
		return $result;
	}

	/**Получить комментарий
	 * @param $id
	 * @param string $limit
	 * @return string
	 */
	public function getComment($id, $limit = '')
	{
		if (!empty($limit))
			$limit = 'LIMIT ' . $limit;
		$sql = "SELECT * FROM `crm_comments`  WHERE `id_app` = " . $id . " ORDER BY  `date` DESC " . $limit;
		$result = $this->db->select($sql);
		$res = '';
		foreach ($result as $key => $value) {
			$res .= date("d.m.y H:m", strtotime($value['date'])) . ' - ' . $value['comments'] . "\n";
		}
		return $res;
	}

	/**
	 * Герерируем форму для редактирования
	 * @param $id
	 * @return string
	 */
	public function gen_edit_form($id)
	{
		require_once("GetSend.php");
		$dateOfFail = "";
		$g = new GetSend();
		$admin = new ADMIN();
		$dop_sql['id'] = $id;
		$result = $this->getRecords($dop_sql);

		$this->out_table .= '
<form id = "save_form" onsubmit="return false;" >
<table style="width: 100%">
<tr>
<td style="width: 50%">

<input type = "hidden" name = "type" value = "save" >
<input type = "hidden" name = "id" value = "' . $id . '" >';

		foreach ($result as $key => $value) {

			$art = explode("\n", $value['models']);
			$elements = '';

			foreach ($art as $valueArt) {

				if (empty($valueArt))
					continue;

				$g->fields = array('tip' => 'get', 'art' => $valueArt);
				$elements .= $g->genElsTable(true);
			}
			$groups = $this->get_groups($value['group']);
			$id = $value['id'];

			$arrDlvr = $admin->getServicesDelivery();
			$dlvrSelect = '<select id="dlvr_id" name="dlvr_id" class="styler">';
			$dlvrSelect .= '<option>Выберите</option>';
			foreach ($arrDlvr as $valueDlvr) {
				$selected = '';
				if ($valueDlvr["id"] == $value["dlvr_id"])
					$selected = "selected";
				$dlvrSelect .= '<option ' . $selected . ' value="' . $valueDlvr["id"] . '">' . $valueDlvr["name"] . '</option>';
			}
			$dlvrSelect .= '</select>';


			if ($value['made'] != '0000-00-00 00:00:00')
				$dateOfMade = 'Дата получения денег: ' . date('d.m.y', strtotime($value['made']));
			elseif ($value['fail'] != '0000-00-00 00:00:00')
				$dateOfFail = 'Дата отказа: ' . date('d.m.y', strtotime($value['fail']));
			if ($value['delivery'] != '0000-00-00 00:00:00')
				$dateOfDelivery = 'Дата доставки: ' . date('d.m.y', strtotime($value['delivery']));


			$this->out_table .= '
	<table id="zayzvka">
	<tr>
	<td>
	<b>ID заявки:</b>
	</td>
	<td>
	<b style="color: red;">W' . $id . '</b>
	</td>
	<td>
	<b>Дата создания:</b>
	</td>
	<td>
	<b style="color: red;">' . date("d.m.y", strtotime($value["data_insert"])) . '</b>
	</td>
	<td>
	<b>Группа:</b>
	</td>
	<td>
	<b>' . $groups . '</b>
	</td>
	</tr>
	<tr>
	<td colspan="6">
	<div class="addselemets">
	' . $elements . '
	</div>
		<input type="button"  value="Добавить позицию в заказ" class="styler" onclick="addPosition();">
	</td>
	</tr>
	<tr>
		<td colspan="3">
			Телефон:
		</td>
		<td colspan="3">
			<input type="tel" name="phone" id="phone" placeholder="Введите 10 цифр номера" class="styler" value="' . $value['phone'] . '">
		</td>
	</tr>
		<tr>
		<td colspan="3">
			Email:
		</td>
		<td colspan="3">
			<input type="text" name="email" id="email" placeholder="email" class="styler" value="' . $value['email'] . '">
		</td>
	</tr>
	<tr>
		<td colspan="3">
			Имя:
		</td>
		<td colspan="3">
			<input type="text" name="name" id="name" placeholder="Иванов Иван Иванович" class="styler" value="' . $value['name'] . '">
		</td>
	</tr>
	<tr>
		<td colspan="3">
			Адрес:
		</td>
		<td colspan="3">
			<textarea rows="3" cols="45" name="adress" id="adress" class="styler">' . $value['adress'] . '</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			Детали доставки:
		</td>
		<td colspan="3">
			<textarea rows="3" cols="45" name="details" id="details" class="styler">' . $value['details'] . '</textarea>
		</td>
	</tr>
		<tr>
		<td colspan="3">
			Дата доставки:
		</td>
		<td>
			<input type="date" name="date_delivery" id="date_delivery" class="styler" value="' . date('Y-m-d', strtotime($value['date_delivery'])) . '">
		</td>
		<td>
			с &nbsp;<input style="width: 17px;"  type="text" size="2" name="time_delivery_from" id="time_delivery_from" class="styler" value="' . $value['time_delivery_from'] . '">
		</td>
		<td>
			до &nbsp;<input style="width: 17px;" type="text" size="2" name="time_delivery_to" id="time_delivery_to" class="styler" value="' . $value['time_delivery_to'] . '">
		</td>
	</tr>
	<tr>
	<td colspan="6">
	<button id = "' . $id . '" class="pointer styler left" onclick="apply();">
	<img style="vertical-align: middle"   src = "images/apply.png" width = "20" height = "20" alt = "Применить" title = "Применить" >&nbsp;  Применить
	</button>
	<button id = "' . $id . '" class="pointer styler exit left" onclick="save();" style="margin-left:25px;">
	<img style="vertical-align: middle;"  src = "images/save.png" width = "20" height = "20" alt = "Сохранить и выйти" title =	"Сохранить и выйти " >&nbsp; Сохранить и выйти
	</button>


	</td>
	</tr>';
		}
		$this->out_table .= '</table >

</td>
<td style="width: 50%;height: 75%;" valign="top" >
<textarea disabled id = "comments" name = "comments"  style = "width:100%;height: 254px;" >' . $this->getComment($id) . '</textarea>
<textarea id = "addcomment_hand" rows = "2" style = "width:100%;" placeholder="Отправить: Ctrl+Enter" ></textarea >
<button id = "' . $id . '" class="addcomment styler save_comment"><img   style="vertical-align: middle" src = "images/comment.png" width = "20" height = "20" alt = "комментарий" title = "комментарий" > Добавить комментарий</button>
<table>
<tr>
<td>
Служба доставки
</td>
<td>
Трек-номер
</td>
<td>
Стоимость
</td>
</tr>
<tr>
<td>
' . $dlvrSelect . '
</td>
<td>
<input type="text" name="dlvr_trac" class="styler" value="' . $value['dlvr_trac'] . '">
</td>
<td>
<input type="number" name="dlvr_price" class="styler only_numbers" value="' . $value['dlvr_price'] . '" >
</td>
</tr>
<tr>
<td id="madeDate">
' . $dateOfMade . '
</td>
</tr>
<tr>
<td id="madeFail">
' . $dateOfFail . '
</td>
</tr>
<tr>
<td id="deliveyDate">
' . $dateOfDelivery . '
</td>
</tr>
<tr>
<td>
<br>
</td>
</tr>
<tr>
<td>
Дефекты
</td>
<td>
<input type="text" name="defects" class="styler" value="' . $value['defects'] . '" >
</td>
</tr>
</table>
</td>
</tr>

</table>
</form>
';

		return $this->out_table;

	}


	public static function genOneApplication($id)
	{
		$admin = New ADMIN();
		$edit = New EDIT();
		$result = $edit->getRecords('', '', 'WHERE id=' . $id);
		foreach ($result as $key => $value) {
			$prices = nl2br(str_replace('.00', '', $value['prices']));
//	$color = '#fafafa';
			switch ($value['group']) {
				case 'K прозвону':
					$color = '#0000';
					break;
				case 'Резерв':
					$color = '#006FFF';
					break;
				case 'К сбору':
					$color = '#FFE599';
					break;
				case 'Собрано':
					$color = '#FF9900';
					break;
				case 'На доставке':
					$color = '#FFFF00';
					break;
				case 'Доставлено':
					$color = '#B6D7A8';
					break;
				case 'Отказ на доставке':
					$color = '#F4CCCC';
					break;
				case 'Выполнен':
					$color = '#00FF00';
					break;
				case 'Отказ':
					$color = '#E06666';
					break;
				case 'Проблема':
					$color = '#FF00FF';
					break;
			}

			$style = 'style="background: ' . $color . '"';
			if (ADMIN::isAdmin())
				$adminButton = "<a href='admin' id='admin' class='styler right button'>АДМИН</a>";
			else
				$adminButton = "";

			$delivery_name = ADMIN::getVarArr($admin->getServicesDelivery($value['dlvr_id']), 'name');
			if (empty($delivery_name))
				$delivery_name = "&nbsp";

			if ($value['date_delivery'] != '0000-00-00 00:00:00')
				$delivery_time = date('d.m', strtotime($value['date_delivery'])) . " с " . $value['time_delivery_from'] . " до " . $value['time_delivery_to'];
			else
				$delivery_time = "&nbsp";

			$delivery_details = $value['details'];
			if (empty($delivery_details))
				$delivery_details = "&nbsp";

			$delivery_trac = $value['dlvr_trac'];
			if (empty($delivery_trac))
				$delivery_trac = "&nbsp";


			if ($_REQUEST["group"] == 'Выполнен') {
				$name_date = 'Дата получ. денег';
				$date = date_create($value['made']);
			} elseif ($_REQUEST["group"] == 'Доставлено') {
				$name_date = 'Дата доставки';
				$date = date_create($value['delivery']);
			} elseif ($_REQUEST["group"] == 'Отказ') {
				$name_date = 'Дата отказа';
				$date = date_create($value['fail']);
			} else {
				$name_date = 'Дата заказа';
				$date = date_create($value['data_insert']);
			}
			if (intval($value['lock']) > 0) {
				$lock = 'class="locked"';
				$locked = "<td></td><td>" . ADMIN::getVarArr(ADMIN::getUsersByID($value['lock']), 'name') . "</td>";
			} else {
				$locked = "<td><input id='" . $value['id'] . "' type='checkbox'/></td>
<td>
<a href='edit.php?id=" . $value['id'] . " ' target='_blank'><img id='img" . $value['id'] . "' class='edit' src='images/edit.png' width='18' height='18' alt='редактировать' title='редактировать'>
</a>
</td>";
			}

			$out_table = "<tr id='tr" . $value['id'] . "' " . $lock . ">
" . $locked . "
	<td  " . $style . ">" . nl2br($value['models']) . "</td>
	<td  " . $style . ">" . $value['name'] . "</td>
	<td  class='phoneInTable'" . $style . ">" . $value['phone'] . "</td>
	<td  " . $style . ">" . $value['adress'] . "</td>

	<td  " . $style . ">
	<table>
	<tr>
	<td  " . $style . ">" . $prices . "</td>
	<td  " . $style . ">" . preg_replace("/ /", "<br>", $delivery_time, 1) . "</td>
	<td  " . $style . ">" . date_format($date, "d.m.Y") . "</td>
	</tr>
	<tr>
	<td  " . $style . ">" . $delivery_name . "</td>
	<td  " . $style . ">" . $delivery_details . "</td>
	<td  " . $style . ">" . $value['dlvr_trac'] . "</td>

	</tr>
	</table>
	</td>

	<td  " . $style . ">" . $edit->getComment($value['id'], 1) . "</td>


	</tr>";
		}
		echo $out_table;
	}

	/**
	 * Получаем группы
	 * @param $this_group
	 * @return string
	 */
	public function get_groups($this_group = '')
	{

		$sql = "SHOW COLUMNS FROM " . $this->table_name . " WHERE Field = 'group'";
		$result = $this->db->select($sql);

		preg_match(" /^enum\(\'(.*)\'\)$/", $result[0]["Type"], $matches);
		$enum = explode("','", $matches[1]);

		$select_out = "<select id='groups' name='group'>";
		foreach ($enum as $key => $value) {
			$selected = "";
			if ($this_group == $value)
				$selected = 'selected';
			$select_out .= "<option " . $selected . ">" . $value . "</option>";

		}
		$select_out .= "</select>";
		return $select_out;
	}

	/**устанавливаем время доставки
	 * @param $id
	 */
	public function setDeliveryTimeStamp($id)
	{
		$date = date('Y-m-d G:i:s');
		$sql = "UPDATE {$this->table_name} SET `delivery`='{$date}' WHERE `id` ={$id}";
		$this->db->update($sql);
	}

	public function setFailTimeStamp($id)
	{
		$date = date('Y-m-d G:i:s');
		$sql = "UPDATE {$this->table_name} SET `fail`='{$date}' WHERE `id` ={$id}";
		$this->db->update($sql);
	}

	/**
	 * Сохраняем форму редактирования и логируем разницу в полях
	 * @param $id
	 * @param $fields
	 */
	public function saveForm($id = '', $fields)
	{

		if (empty($id)) {
			$this->insert_data($fields); //если заявка новая
			die();
		}


		foreach ($fields as $key => $value) {
			$set[] = "`$key`= '$value'";
		}

		$sql = ' SELECT * FROM ' . $this->table_name . ' WHERE `id` = ' . $id;
		$diff1 = $this->db->select($sql);

		if (($fields['group'] == 'Выполнен') AND ($diff1[0]['group'] != 'Выполнен')) { //если выполнен то ставим made
			$set[] = "`made`='" . date('Y-m-d G:i:s') . "'";
		}

		$sql = 'UPDATE ' . $this->table_name . ' SET ' . implode(',', $set) . ' WHERE `id` = ' . $id;
		$res = $this->db->update($sql);

		if (($fields['group'] == 'Доставлено') AND ($diff1[0]['group'] != 'Доставлено')) { //если доставлен то ставим delivery
			$this->setDeliveryTimeStamp($id);
		}

		if (($fields['group'] == 'Отказ') AND ($diff1[0]['group'] != 'Отказ')) { //если доставлен то ставим delivery
			$this->setFailTimeStamp($id);
		}


		$sql = ' SELECT * FROM ' . $this->table_name . ' WHERE `id` = ' . $id;
		$diff2 = $this->db->select($sql);

		$resultDiff = array_diff_assoc($diff1[0], $diff2[0]);
		$resultDiff1 = array_diff_assoc($diff2[0], $diff1[0]);
		if (count($resultDiff) > 0) {
			$admin = new ADMIN();
			$user = ADMIN::getCurrentUser();
			$diff = 'Изменено(' . $user["name"] . '):';
			foreach ($resultDiff as $key => $value) {
				switch ($key) {
					case 'phone':
						$diff .= " телефон с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'adress':
						$diff .= " адрес с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'details':
						$diff .= " детали с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'models':
						$diff .= " модель с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'prices':
						$diff .= " цена с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'name':
						$diff .= " имя с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'group':
						$diff .= " группа с " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'email':
						$diff .= " email c " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'dlvr_id':
						$diff .= " служба доставки " . ADMIN::getVarArr($admin->getServicesDelivery($value), 'name') . " на " . ADMIN::getVarArr($admin->getServicesDelivery($resultDiff1[$key]), 'name') . ", ";
						break;
					case 'dlvr_trac':
						$diff .= " трек " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'date_delivery':
						$diff .= " дата доставки " . date('d.m', strtotime($value)) . " на " . date('d.m', strtotime($resultDiff1[$key])) . ", ";
						break;
					case 'time_delivery_from':
						$diff .= " время доставки С " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
					case 'time_delivery_to':
						$diff .= " время доставки до " . $value . " на " . $resultDiff1[$key] . ", ";
						break;
				}
				$diff = rtrim($diff, ", ");
			}
			$data = '';
			$data['id'] = $id;
//			$data['text'] = $diff;
			$this->saveComment($data, $diff);
		}

		if ($res)
			echo "<span style='color:green'> Сохранено</span>";
		else
			echo "<span style='color:red'> Ошибка</span><br>" . $this->db->error();

	}

	/**<br> в перевод строк
	 * @param $data
	 */
	public function insert_data($data)
	{

		echo "<pre>";
		print_r($data);
		echo "</pre>";
		$name = $data['name'];
		$phone = $data['phone'];
		$email = $data['email'];
		$adress = $data['adress'];
		$details = $data['details'];
		$models = implode('\n', explode(' ', $data['codes']));
		$prices = implode('\n', explode(' ', $data['codes_prices']));
		$date_delivery = $data['date_delivery'];
		$time_delivery_from = $data['time_delivery_from'];
		$time_delivery_to = $data['time_delivery_to'];
		$group = $data['group'];


		$sql = "INSERT INTO {$this->table_name} (
				`id`,
				`data_insert`,
				`name`,
				`phone`,
				`email`,
				`adress`,
				`details`,
				`models`,
				`prices`,
				`date_delivery`,
				`time_delivery_from`,
				`time_delivery_to`,
				`group`
				)
				VALUES (
				NULL,
				CURRENT_TIMESTAMP,
				'{$name}',
				'{$phone}',
				'{$email}',
				'{$adress}',
				'{$details}',
				'{$models}',
				'{$prices}',
				'{$date_delivery}',
				'{$time_delivery_from}',
				'{$time_delivery_to}',
				'{$group}'
				)";


		$this->db->insert($sql);
		echo $this->db->error();
	}

	/**сохраняем комментарий
	 * @param $data
	 */
	public function saveComment($data, $text = '')
	{

		$sql = "INSERT INTO `zakaz1234`.`crm_comments` (`id`, `id_app`, `comments`, `date`) VALUES (NULL, " . $data['id'] . ", '{$text}', CURRENT_TIMESTAMP)";
		$this->db->insert($sql);
	}

	/**Поиск по полям таблица crm
	 * @param $data
	 */
	public function search($data)
	{

		if ($data['str'][0] == 'W') {
			$id = str_replace('W', '', $data['str']);
			$res = '';
			$sql = "SELECT `id` FROM `crm` WHERE `id` = '{$id}'";
		} else {
			$res = '';
			$sql = "SELECT `id`
				FROM `crm`
				WHERE
				`phone` LIKE '%{$data['str']}%'
				OR `adress` LIKE '%{$data['str']}%'
				OR `name` LIKE '%{$data['str']}%'
				OR `models` LIKE '%{$data['str']}%'
				OR `dlvr_trac` LIKE '%{$data['str']}%'";
		}
		$result = $this->db->select($sql);
		if (count($result) != 0) {
			foreach ($result as $key => $value) {
				$res .= 'id[]=' . $value['id'] . "&";
			}
			$res = rtrim($res, '&');
			echo '?type=search&' . $res;
		}
	}

	public function  br2nl($str)
	{
		return preg_replace('#<br\s*/?>#i', "\n", $str);
	}

	public function copyApp($id, $group)
	{

		$res = $this->getRecords('', '', 'WHERE id=' . $id);
		$arr = $res[0];
		$arr['group'] = $group;

		$phone = $arr['phone'];
		$email = $arr['email'];
		$adress = $arr['adress'];
		$details = $arr['details'];
		$date_delivery = $arr['date_delivery'];
		$time_delivery_from = $arr['time_delivery_from'];
		$time_delivery_to = $arr['time_delivery_to'];
		$models = $arr['models'];
		$prices = $arr['prices'];
		$data_insert = $arr['data_insert'];
		$who = $arr['who'];
		$name = $arr['name'];
		$defects = $arr['defects'];
		$group = $arr['group'];
		$dlvr_id = $arr['dlvr_id'];
		$dlvr_trac = $arr['dlvr_trac'];
		$dlvr_price = $arr['dlvr_price'];
		$made = $arr['made'];
		$delivery = $arr['delivery'];
		$fail = $arr['fail'];

		$sql = "INSERT INTO {$this->table_name} (
				`id`,
				`phone`,
				`email`,
				`adress`,
				`details`,
				`date_delivery`,
				`time_delivery_from`,
				`time_delivery_to`,
				`models`,
				`prices`,
				`data_insert`,
				`who`,
				`name`,
				`defects`,
				`group`,
				`dlvr_id`,
				`dlvr_trac`,
				`dlvr_price`,
				`made`,
				`delivery`,
				`fail`
				)
				VALUES (
				NULL,
				'{$phone}',
				'{$email}',
				'{$adress}',
				'{$details}',
				'{$date_delivery}',
				'{$time_delivery_from}',
				'{$time_delivery_to}',
				'{$models}',
				'{$prices}',
				'{$data_insert}',
				'{$who}',
				'{$name}',
				'{$defects}',
				'{$group}',
				'{$dlvr_id}',
				'{$dlvr_trac}',
				'{$dlvr_price}',
				'{$made}',
				'{$delivery}',
				'{$fail}'
				)";
		$this->db->insert($sql);
	}
}

