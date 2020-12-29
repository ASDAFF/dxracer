<?php

class DBSettings
{
	public static $settings = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '00npNYn3igkaD',
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
