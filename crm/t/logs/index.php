<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--    <title>логи</title>-->

    <!-- Bootstrap -->
    <link href="/t/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<?php
/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 10.12.2014
 * Time: 13:29
 */
require_once("../classes/class.simpleDB.php");
require_once("../classes/class.simpleMysqli.php");
require_once("Configuration.php");
$settings = array(
	'server' => Configuration::MYSQL_SERVER,
            'username' => Configuration::MYSQL_USERNAME,
            'password' => Configuration::MYSQL_PASSWORD,
            'db' => Configuration::MYSQL_DB,
            'port' => Configuration::MYSQL_PORT,
            'charset' => Configuration::MYSQL_CHARSET
);
$db = new simpleMysqli($settings);
$query = $db->select('SELECT * FROM `logs` ORDER BY id DESC');

foreach ($query as $key => $value) {
    $arr_el = explode("<br>", $value['list']);


    unset($models);
    unset($price);

    foreach ($arr_el as $value_el) {
        $tmp_arr = explode(" - ", $value_el);
        $models[] = $tmp_arr[0];
        $price[] = $tmp_arr[1];
    }

    $out_table .= "<tr>
	<td class='col-lg-1'>" . date('d.m.Y H:i:s', strtotime($value['data_insert'])) . "</td>
	    <td style=\"border-top:none;border-bottom:none\"></td>
	    <td>" . implode('<br>', $models) . "</td>
	<td class='col-lg-2'>" . $value['phone'] . "</td>
	<td style='word-break: break-all;'>" . $value['name'] . "," . $value['adress'] . "</td>
	   <td>" . implode('<br>', $price) . "</td>
	   	<td class='col-lg-1'>" . date('d.m.Y', strtotime($value['data_insert'])) . "</td>
	   		<td class='col-lg-1'>" . date('d.m.Y', strtotime($value['data_insert'])) . "</td>
	<td style='word-break: break-all;'>" . $value['details'] . "</td>";
}

echo "<table class='table table-bordered table-hover'>" . $out_table . "</table>";


?>

</div>
</body>
</html>