<?php

//error_reporting(E_ALL);
class UTILS
{
	public static function saveLog($str)
	{
		$file = __DIR__ . '/logs.txt';
		file_put_contents($file, $str, FILE_APPEND);
	}
}