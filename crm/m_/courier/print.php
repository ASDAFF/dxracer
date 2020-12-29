<?php

require_once("../classes/Courier.php");
$courier = new Courier();

$current = file_get_contents(__DIR__. "/courier_text_header.txt");
file_put_contents(__DIR__ . "/print_courier.html", $current);
$start_code_ticket = (int)file_get_contents(__DIR__ . '/number.txt');
setlocale(LC_ALL, 'ru_RU.utf8');
$id = (int)$_REQUEST["id"];

$arr_strings = explode(chr(9), $_REQUEST["text"]);
$org = $_REQUEST["org"];
$courier->setOrg(1, $org);


$t = 0;
$massiv = 0;

foreach ($arr_strings as $test) {
    $t++;
    if ($t == 6) {
        $arr_out = str_getcsv($test, PHP_EOL, '"');
        $t = 1;
        $massiv++;
        $arr_strings_out[$massiv][] = $arr_out[count($arr_out) - 1];
        $arr_strings_out[$massiv-1][] = $arr_out[0];
    } else {
        $arr_strings_out[$massiv][] = $test;
    }
}

foreach ($arr_strings_out as $arr_arr_ex) {
    if (count($arr_arr_ex) < 6) continue;
      //получаем количество созданных товарных чеков и прибавляем к $start_code_ticket
    $start_code_ticket++;

    $arr_arr_ex[0] = str_replace(" ","",str_replace('"', '', $arr_arr_ex[0]));
    $arr_arr_ex[3] = str_replace('"', '', $arr_arr_ex[3]);

    $elements = explode("\r\n", $arr_arr_ex[0]);
    $prices = explode("\r\n", $arr_arr_ex[3]);

    $elements = array_diff($elements, array(''));
    $prices = array_diff($prices, array(''));

    $elements = array_values($elements);
    $prices = array_values($prices);

    $phone = trim($arr_arr_ex[1]);

    $name_arr = explode(",", $arr_arr_ex[2]);
    $FIO = $name_arr[0];
    $FIO = str_replace('"','' ,$FIO);



    $PROP = array();
    $ITOG = 0;
    $FULL_SUM = 0;


    foreach ($elements as $index => $item) {
if($item=="9PM") continue;
        if($item=="MS") continue;
        $str_elements = $item . "|" . $prices[$index] . ".00";
        $txt = 'Наручные часы';
        $TABLE_ELEMENTS .= "
         
            <li>{$txt} {$item} стоимостью {$prices[$index]} руб. 00 коп.</li>";

    }

}

    $SKIDKA = 0;
    $FULL_SUM = $ITOG;

    $text_send = file_get_contents(__DIR__  . "/courier_text.txt");

$Month_r = array(
    "01" => "января",
    "02" => "февраля",
    "03" => "марта",
    "04" => "апреля",
    "05" => "мая",
    "06" => "июня",
    "07" => "июля",
    "08" => "августа",
    "09" => "сентября",
    "10" => "октября",
    "11" => "ноября",
    "12" => "декабря");

$date  = date('d');
$month = $Month_r[date('m')];
$year = date('Y');
$cur_date = $date.' '.$month.' '.$year;

    $text_send = preg_replace('/#CUR_DATE#/', $cur_date, $text_send);


    $courier_arr = $courier->getOneCourier($id);

if(empty($TABLE_ELEMENTS)){

    $TABLE_ELEMENTS.=
        "<li>_______________________________________________________________________________</li>".
        "<li>_______________________________________________________________________________</li>".
        "<li>_______________________________________________________________________________</li>";
}

    $text_send = preg_replace('/#NAME#/',$courier_arr["name"], $text_send);
    $text_send = preg_replace('/#PASS_SER#/',$courier_arr["pass_seriya"], $text_send);
    $text_send = preg_replace('/#PASS_NUM#/',$courier_arr["pass_nomer"], $text_send);
    $text_send = preg_replace('/#VIDAN#/',$courier_arr["pass_vidan"], $text_send);
    $text_send = preg_replace('/#ADDRESS#/',$courier_arr["adress"], $text_send);
    $text_send = preg_replace('/#MAGAZ#/', $org, $text_send);
    $text_send = preg_replace('/#OL#/', $TABLE_ELEMENTS, $text_send);


    $current = file_get_contents(__DIR__  . "/print_courier.html");

    $current .= $text_send;
    file_put_contents(__DIR__  . "/print_courier.html", $current);




$current = file_get_contents(__DIR__  . "/print_courier.html");
$current .= '
</body>
</html><script type="text/javascript">
window.print();
</script></body></html>';

file_put_contents(__DIR__ . "/print_courier.html", $current);


header("Location: /m/courier/print_courier.html");
exit();
