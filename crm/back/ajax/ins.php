<?
require_once("../classes/class.simpleDB.php");
require_once("../classes/class.simpleMysqli.php");
$settings = array(
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'j59Rtilmysql',
	'db' => 'zakaz1234',
	'port' => 3306,
	'charset' => 'utf8',
);
$db = new simpleMysqli($settings);

if ($_POST["who"] == 'BV')
	$who = 'WT';
else
	$who = 'BV';
$name = $_POST["name"];
$phone = $_POST["phone"];
$adress = $_POST["adress"];
$email = $_POST["email"];
$details = $_POST["details"];
$list = $_POST["list"];
$models = $_POST["models"];
$prices = $_POST["prices"];
$sql = "INSERT INTO `zakaz1234`.`logs` (
`id`,
`data_insert`,
`who`,
`name`,
`phone`,
`adress`,
`details`,
`list`
)
VALUES (
NULL,
CURRENT_TIMESTAMP, '" . $who . "', '" . $name . "', '" . $phone . "', '" . $adress . "', '" . $details . "', '" . $list . "')";
$db->insert($sql);

if (empty($models)) {
	$modelsAndPrice = explode("<br>", $list);
	foreach ($modelsAndPrice as $valueMAP) {
		$modelsAndPrice_tmp = explode(" - ", $valueMAP);
		$models[] = $modelsAndPrice_tmp[0];
		$prices[] = $modelsAndPrice_tmp[1];
	}
	$models = implode("\n", $models);
	$prices = implode("\n", $prices);
}

$sql = "INSERT INTO `zakaz1234`.`crm` (
`id`,
`data_insert`,
`who`,
`name`,
`phone`,
`email`,
`adress`,
`details`,
`models`,
`prices`
)
VALUES (
NULL,
CURRENT_TIMESTAMP, '" . $who . "', '" . $name . "', '" . br2nl($phone) . "', '" . $email . "', '" . $adress . "', '" .

	$details . "', '" . br2nl($models) . "', '" . br2nl($prices) . "')";
$db->insert($sql);


function  br2nl($str)
{
	return preg_replace('#<br\s*/?>#i', "\n", $str);
}

?>
