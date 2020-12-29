<? if ($_POST["type"] != 'export') die('Restricted access'); ?>
<? require_once("../classes/edit.php");
$edit = New EDIT($settings);
$group = $_REQUEST['group'];
$from = str_replace('T', ' ', $_REQUEST['from']);
$to = str_replace('T', ' ', $_REQUEST['to']);

$date = new DateTime($to);
$date->modify('+1 day');
$to = $date->format('Y-m-d');
$where_sql = "WHERE (
`made` BETWEEN STR_TO_DATE('" . $from . "', '%Y-%m-%d %H:%i:%s')AND STR_TO_DATE('" . $to . "', '%Y-%m-%d %H:%i:%s'))";
$result = $edit->getRecords('', '', $where_sql);

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=" . $from . "_" . $to . "_" . $group . ".csv");
header("Pragma: no-cache");
header("Expires: 0");

$text = 'телефон;имя;адрес;модель;цена;подробности;дата выполнения';
echo(iconv('UTF-8', 'CP1251', $text . "\n"));
foreach ($result as $value) {
	$text =
		"\"" . $value['phone'] . "\";" .
		"\"" . $value['name'] . "\";" .
		"\"" . $value['adress'] . "\";" .
		"\"" . $value['models'] . "\";" .
		"\"" . $value['prices'] . "\";" .
		"\"" . $value['details'] . "\";" .
		date("Y-m-d", strtotime($value["made"]));
//	$text = str_replace("\r\n", ' ', $text);
//	$text = str_replace("\n", ' ', $text);
	echo(iconv('UTF-8', 'CP1251', $text . "\n"));
}


?>
