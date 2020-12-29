<?php

/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 26.10.2015
 * Time: 22:08
 */
class All
{
	public static function getElements($art)
	{


		$get_data = http_build_query(
			array(
				'auth' => '00XFHA567ERT',
				'art' => $art,
				'tip' => 'get'
			)
		);

		$opts = array('http' =>
			array(
				'method' => 'POST',
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'content' => $get_data
			)
		);

		$context = stream_context_create($opts);

		$result = file_get_contents('https://monarchshop.ru/api/Utils.php', false, $context);

		return $result;
	}

	public static function cURL($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$result = curl_exec($ch);
		curl_close($ch);
		if ($result) {
			return $result;
		} else {
			return '';
		}
	}

}