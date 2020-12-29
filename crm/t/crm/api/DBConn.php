<?php
require_once(__DIR__ . "/../../classes/Configuration.php");
class DBSettings
{
	public static $settings = array(
			'server' => Configuration::MYSQL_SERVER,
            'username' => Configuration::MYSQL_USERNAME,
            'password' => Configuration::MYSQL_PASSWORD,
            'db' => Configuration::MYSQL_DB,
            'port' => Configuration::MYSQL_PORT,
            'charset' => Configuration::MYSQL_CHARSET
	);
}

?>
