<?php

class Utils
{
	/**
	 * @param $string
	 * @param string $coding
	 * @return string
	 * Делаем первую букву большой
	 */
	public static function firstLetterUp($string, $coding = 'utf-8')
	{
		if (function_exists('mb_strtoupper') && function_exists('mb_substr') && !empty($string)) {
			preg_match('#(.)#us', mb_strtoupper(mb_strtolower($string, $coding), $coding), $matches);
			$string = $matches[1] . mb_substr($string, 1, mb_strlen($string, $coding), $coding);
		} else {
			$string = ucfirst($string);
		}
		return $string;
	}

	/**
	 * Class my_class
	 * склонения цифр
	 */
	public static function declensionOfNumbers($string, $ch1, $ch2, $ch3)
	{
		$ff = Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		if (substr($string, -2, 1) == 1 AND strlen($string) > 1) $ry = array("0 $ch3", "1 $ch3", "2 $ch3", "3 $ch3", "4 $ch3", "5 $ch3", "6 $ch3", "7 $ch3", "8 $ch3", "9 $ch3");
		else $ry = array("0 $ch3", "1 $ch1", "2 $ch2", "3 $ch2", "4 $ch2", "5 $ch3", "6 $ch3", "7 $ch3", "8 $ch3", "9 $ch3");
		$string1 = substr($string, 0, -1) . str_replace($ff, $ry, substr($string, -1, 1));
		return $string1;
	}

	/**
	 * @param $url
	 * @param $SaveDirectory
	 * @param bool $cookie_file_name
	 * @return string
	 */
	public static function readFileByURL($url, $SaveDirectory, $unzip = false, $cookie_file_name = false, $sets_filename = "", $username = "", $password = "")
	{
		$urlFile = pathinfo($url);
		$filename = $urlFile["basename"];
		$dir_name = pathinfo($SaveDirectory);
		if (!file_exists($SaveDirectory . '/' . $filename)) {
			$curl = curl_init($url);
			$SaveDirectory = $_SERVER["DOCUMENT_ROOT"] . $SaveDirectory . "/";
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_FAILONERROR, 1);
			if (!empty($username) AND !empty($password)) {
				curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
				curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
			}
			//  $size=get_size($url,$cookie_file_name);
			if (curl_exec($curl) === false) {
				return 'Error';
//        return 'Error: ' . curl_error($curl);
				curl_close($curl);
			} else {
				curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (Windows; U; Windows NT 5.0; En; rv:1.8.0.2) Gecko/20070306 Firefox/1.0.0.4");
				if (!$cookie_file_name)
					curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file_name);
				if (!empty($sets_filename))
					$filename = $sets_filename;

//			echo $SaveDirectory . $filename . "\n";

				$fp = fopen($dir_name["dirname"] . "/" . $filename, 'w+b');
				curl_setopt($curl, CURLOPT_FILE, $fp);
				curl_exec($curl);
				curl_close($curl);
				fclose($fp);
				if ($unzip)
					$filename = self::unzip($filename, $SaveDirectory);
				return $filename;
			}
		} else {
			return $filename;
		}
	}

	/**
	 * @param $filename
	 * @param $dir
	 * @return string
	 */
	public function unZip($filename, $dir)
	{
		$zip = new ZipArchive;
		if ($zip->open($dir . $filename) === TRUE) {
			$zip->extractTo($dir);
			$unzip_filename = $zip->getNameIndex(0);
			$zip->close();
			return $unzip_filename;
//		echo "</br>Распакован <span id='unzip_filename'>".$unzip_filename."</span>";
//		convert_to_utf_8($filename,$dir);
		} else {
			echo 'Error';
		}
	}

	public static function sendFilesOnMail($to, $thm, $html, $files)
	{
		$headers = "";
		$multipart = "";

		$boundary = "--" . md5(uniqid(time())); // генерируем разделитель

		$headers .= "MIME-Version: 1.0\n";

		$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";

		$multipart .= "--$boundary\n";

		$kod = 'UTF-8'; // или $kod = 'windows-1251';

		$multipart .= "Content-Type: text/html; charset=$kod\n";

		$multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";

		$multipart .= "$html\r\n";

        if($files !== false) {
            $multipart = "--$boundary\n";

            foreach ($files as $key => $value) {
                $fp = fopen($value, "r");
                $file = fread($fp, filesize($value));
                fclose($fp);
                $multipart .= "Content-Type: application/octet-stream\n";
                $multipart .= "Content-Transfer-Encoding: base64\n";
                $multipart .= "Content-Disposition: attachment; filename = \"" . basename($value) . "\"\n\n";
                $multipart .= chunk_split(base64_encode($file)) . "\n";
                $multipart = $multipart . "--$boundary\n";

            }

            $multipart .= "--$boundary--\n";
        }
		if (!mail($to, $thm, $multipart, $headers)) {

			echo "К сожалению, письмо не отправлено";

			exit();

		}
	}

	public static function getByCurl($url, $post_data="", $tor=true)
	{
		$curlURL = $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $curlURL);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_HEADER, 0);        //Не включать заголовки в ответ
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if (!empty($post_data)) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		}
		if($tor) {
            curl_setopt($ch, CURLOPT_PROXY, 'localhost:9050');
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
		$page = curl_exec($ch);

		curl_close($ch);
		return $page;

	}


	public static function russianMonth($month)
	{
		if (intval($month) > 12 OR intval($month) == 0)
			return;
		switch (intval($month)) {
			case 1:
				$m = 'января';
				break;
			case 2:
				$m = 'февраля';
				break;
			case 3:
				$m = 'марта';
				break;
			case 4:
				$m = 'апреля';
				break;
			case 5:
				$m = 'мая';
				break;
			case 6:
				$m = 'июня';
				break;
			case 7:
				$m = 'июля';
				break;
			case 8:
				$m = 'августа';
				break;
			case 9:
				$m = 'сентября';
				break;
			case 10:
				$m = 'октября';
				break;
			case 11:
				$m = 'ноября';
				break;
			case 12:
				$m = 'декабря';
				break;
		}
		return $m;
	}

	/**
	 * @param $num
	 * @return string
	 * Переводим цифры в читаемую форму
	 */
	public static function num2Str($num)
	{
		$nul = 'ноль';
		$ten = array(
			array('', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'),
			array('', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'),
		);
		$a20 = array('десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать');
		$tens = array(2 => 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
		$hundred = array('', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
		$unit = array( // Units
			array('00 копейка', '00 копейки', '00 копеек', 1),
			array('рубль', 'рубля', 'рублей', 0),
			array('тысяча', 'тысячи', 'тысяч', 1),
			array('миллион', 'миллиона', 'миллионов', 0),
			array('миллиард', 'милиарда', 'миллиардов', 0),
		);
		//
		list($rub, $kop) = explode('.', sprintf("%015.2f", floatval($num)));
		$out = array();
		if (intval($rub) > 0) {
			foreach (str_split($rub, 3) as $uk => $v) { // by 3 symbols
				if (!intval($v)) continue;
				$uk = sizeof($unit) - $uk - 1; // unit key
				$gender = $unit[$uk][3];
				list($i1, $i2, $i3) = array_map('intval', str_split($v, 1));
				// mega-logic
				$out[] = $hundred[$i1]; # 1xx-9xx
				if ($i2 > 1) $out[] = $tens[$i2] . ' ' . $ten[$gender][$i3]; # 20-99
				else $out[] = $i2 > 0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
				// units without rub & kop
				if ($uk > 1) $out[] = self::morph($v, $unit[$uk][0], $unit[$uk][1], $unit[$uk][2]);
			} //foreach
		} else $out[] = $nul;
		$out[] = self::morph(intval($rub), $unit[1][0], $unit[1][1], $unit[1][2]); // rub
		$out[] = $kop . ' ' . self::morph($kop, $unit[0][0], $unit[0][1], $unit[0][2]); // kop
		return trim(preg_replace('/ {2,}/', ' ', join(' ', $out)));
	}

	/**
	 * Склоняем словоформу
	 * @ author runcore
	 */
	private function morph($n, $f1, $f2, $f5)
	{
		$n = abs(intval($n)) % 100;
		if ($n > 10 && $n < 20) return $f5;
		$n = $n % 10;
		if ($n > 1 && $n < 5) return $f2;
		if ($n == 1) return $f1;
		return $f5;
	}

	public static function readXml($url, $node)
	{
		$reader = new XMLReader();
		$reader->open($url);
		$item = array();
		while ($reader->read()) {
			switch ($reader->nodeType) {
				case (XMLReader::ELEMENT):
					// если находим в xml элемент <item> начинаем обрабатывать его
					if ($reader->localName == $node) {
						// мы будем формировать массив который будет содержать все дочерние элементы элемента <item>
						$item = array();
						while ($reader->read()) {
							if ($reader->nodeType == XMLReader::ELEMENT) {
								$name = strtolower($reader->localName);
								while ($reader->moveToNextAttribute()) {
									// здесь мы получаем атрибуты если они есть
									$item[$name]['__attribs'][$reader->localName] = $reader->value;
								}
								$reader->read();
								if (isset($item[$name]) && is_array($item[$name])) {
									$item[$name]['value'] = $reader->value;
								} else
									$item[$name] = $reader->value;

							}
							if ($reader->nodeType == XMLReader::END_ELEMENT && $reader->localName == $node)
								break;
						}
						$return[] = $item;
					}
			}
		}
		return $return;
	}


}
