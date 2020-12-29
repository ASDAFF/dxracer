<?php

class DBSettings
{
	public static $settings = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '3297650586time',
		'db' => 'zakaz1234',
		'port' => 3306,
		'charset' => 'utf8',
	);

	public static function DB()
	{
		return new simpleMysqli(DBSettings::$settings);
	}

}


?>
