<?php


class longPolling
{
	const STATISTICS_URL = 'http://crm.monarchshop.ru/stats?id=ALL';

	public static function push($cids, $text)
	{
		$text = json_encode($text);
		$c = curl_init();
		$url = 'http://crm.monarchshop.ru/pub?id=';

		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($c, CURLOPT_POST, true);
		$results = array();
		if (!is_array($cids)) {
			$cids = array($cids);
		}
		$cids = array_unique($cids);
		foreach ($cids as $v) {
			curl_setopt($c, CURLOPT_URL, $url . $v);
			curl_setopt($c, CURLOPT_POSTFIELDS, $text);
			$results[] = curl_exec($c);
		}
		curl_close($c);
	}


	public static function getOnlineIds()
	{

		$str = file_get_contents(self::STATISTICS_URL);
		if (!$str)
			return;
		$json = json_decode($str);
		if (empty($json->infos))
			return;
		$ids = array();

		foreach ($json->infos as $v) {
			if ($v->subscribers > 0 && $v->channel > 0) {
				$ids[] = $v->channel;
			}
		}
		return $ids;
	}
}