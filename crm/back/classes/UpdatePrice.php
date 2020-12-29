<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 05.09.16
 * Time: 16:49
 *
 * Получение инфы готово, теперь делаем отправку инфы
 */

require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("Utils.php");
require_once("nokogiri.php");

class UpdatePrice
{
    public $DB;
    public $action;
    public $campaigns_id; //действие
    public $report_id;
    public $page;//пагинация
    public $result;
    public $result_arr;
    public $countOkProducts;
//    public $shops_big_games = array( //1. Крупные игроки
//        "Bestwatch",
//        "AllTime.RU",
//        "de-bon-ton.ru",
//        "Московское Время",
//        "CONSUL.RU",
//        "ПрезидентВотчес.Ру"
//    ); //результат
//    public $shops_excluded = array( //2.Все остальные, кто есть на Яндекс.Маркете (ЗА ИСКЛЮЧЕНИЕМ WT и CL)
//        "Часолинк",
//        "WatchTown.ru"
//    );
    public $dop_sql_limit;
    private $brands = array('Tissot','Diesel','Casio');
    private $ch;
    private $api_key = 'MzU0OWE1NGNmNmM0ODI4YzNlNjlhMmE4ZDllMGU4MDE5ODM2ODc5Ng';


    function __construct()
    {
        setlocale(LC_ALL, 'ru_RU.utf8');
        $settings = array(
            'server' => 'localhost',
            'username' => 'root',
            'password' => '3297650586time',
            'db' => 'zakaz1234',
            'port' => 3306,
            'charset' => 'utf8'
        );

        $this->DB = new simpleMysqli($settings);
    }

    /**
     * @param $action
     *
     * @return array
     */
    function getAction($action)
    {
        $this->action = $action;
        if (empty($this->action))
            exit();

        $this->curlInit();
        switch ($this->action) {
            case 'campaigns'://Список кампаний
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns.json");
                break;
            case 'getInfoPriceCampaign'://Получение информации о прайсе кампании(После создания прайс не будет сразу же готов к использованию. Он должен быть обработан сервисом)
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/price.json");
                break;
            case 'getAllReports': //В ответе будет отдан ID созданного отчёта, например:
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/reports.json");
                break;
            case 'getInfoReport'://Получение информации об отчёте
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/reports/{$this->report_id}.json");
                break;
            case 'getResultParsing'://Получение результатов парсинга отчёта
                if ($this->page > 0) {
                    $dop_url = "?page={$this->page}";
                } else {
                    $dop_url = "";
                }
//echo "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/reports/{$this->report_id}/results.json{$dop_url}"."<br>";
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/reports/{$this->report_id}/results.json{$dop_url}");
                break;
            case 'setPrice':
                //обновления прайса кампании
                curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->setPrice());
                curl_setopt($this->ch, CURLOPT_POST, true);
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/price.json");

                break;
            case 'startReport':
                //обновления отчета кампании
                curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Api-Key: ' . $this->api_key,
                    'Content-Length:'
                ));

                curl_setopt($this->ch, CURLOPT_POST, true);
                curl_setopt($this->ch, CURLOPT_URL, "http://cp.marketparser.ru/api/v2/campaigns/{$this->campaigns_id}/reports.json");
                break;
            default:
                $this->result = 'false';

        }


        $data = curl_exec($this->ch);
        if ($data === false) {
            curl_close($this->ch);

            $this->result = (object)array("error" => curl_error($this->ch));
        } else {
            curl_close($this->ch);
            $ret_obj = json_decode($data);
            $ret_arr = json_decode($data, true);

            $this->result = $ret_obj;
            $this->result_arr = $ret_arr;
        }

    }

    /**
     *Ининциализируем курл с настройками
     */
    private function curlInit()
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_HEADER, 0);        //Не включать заголовки в ответ
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Api-Key: ' . $this->api_key
        ));
    }


    /**
     * @return string
     */
    private function setPrice()
    {
        $products = array();

//        $brands = implode(',', $this->brands);
        $query = "SELECT brand_model FROM price_all ORDER BY sort ASC {$this->dop_sql_limit}";
        $list = $this->DB->selectCol($query);
        foreach ($list as $value) {
            $products[] = array("name" => $value);
        }
        $products_out = array('products' => $products);

        return json_encode($products_out);
    }


    public function setSpecialoffer($model, $specialoffer)
    {
        $query = "UPDATE price_all  SET `specialoffer` = {$specialoffer} WHERE model='{$model}' ";
        if ($this->DB->update($query)) {
            return 'OK';
        } else {
            return 'Ошибка';
        }
    }

    public function setSpecialofferMS($model, $specialoffer)
    {
        $query = "UPDATE price_all  SET `specialofferms` = {$specialoffer} WHERE model='{$model}' ";
        if ($this->DB->update($query)) {
            return 'OK';
        } else {
            return 'Ошибка';
        }
    }


    public function getByTradeTime()

    {
        $result_json = UTILS::getByCurl("https://time-avenue.com/api/?getSpecialOffers=1&auth=XDFDD3e45fvsdfvvfg4", "", false);

        $arr = json_decode($result_json, true);
        $query = "TRUNCATE `price_all`";
        if (!$this->DB->simpleQuery($query)) {
            die('Ошибка' . $this->DB->error());
        }

        foreach ($arr as $key => $value) {


            $model_prefix = preg_replace("/[^A-Za-z]/", '', $key);
            switch ($model_prefix) {
                case 'T':
                    $sort = 10;
                    $brand = "Tissot";
                    break;
                case 'DZ':
                    $sort = 20;
                    $brand = "Diesel";
                    break;
                default:
                    $sort = 100;
                    $brand = "Прочие бренды";
            }

            if ($brand=='Tissot') {
                $value["NAME"] = str_replace('-', '.', str_replace('tissot-', '', $value["NAME"]));
            }
            $query = "INSERT INTO `price_all` (`model`, `brand_model`,`brand`,`sort`, `specialofferms`, `cur_price`)
                VALUES ('{$key}', '{$value["NAME"]}', '{$brand}','{$sort}', '{$value["SPECIALOFFER"]}', '{$value["PRICE"]}')";

            $this->DB->insert($query);
        }
    }


//    public function getByKingWatches()
//
//    {
//        $result_json = UTILS::getByCurl("http://chasolink.ru/api/?getSpecialOffers=1&auth=XDFDD3e45fvsdfvvfg4");
//
//        $arr = json_decode($result_json, true);
//        foreach ($arr as $key => $value) {
//
//
//            $model_prefix = preg_replace("/[^A-Za-z]/", '', $key);
//            switch ($model_prefix) {
//                case 'AR':
//                    $sort = 10;
//                    $brand = "Emporio Armani";
//                    break;
//                case 'MK':
//                    $sort = 20;
//                    $brand = "Michael Kors";
//                    break;
//                case 'NY':
//                    $sort = 30;
//                    $brand = "DKNY";
//                    break;
//                case 'MBM':
//                    $sort = 40;
//                    $brand = "Marc Jacobs";
//                    break;
//                case 'DW':
//                    $sort = 50;
//                    $brand = "Daniel Wellington";
//                    break;
//                case 'DZ':
//                    $sort = 60;
//                    $brand = "Diesel";
//                    break;
//                default:
//                    $sort = 100;
//                    $brand = "Прочие бренды";
//            }
//
//            $query ="SELECT model FROM price_all WHERE model = {$key}";
//            if($this->DB->selectCell($query)===false) {
//
//                $query = "INSERT INTO `price_all` (`model`, `brand_model`,`brand`,`sort`, `specialoffer`, `cur_price`)
//                VALUES ('{$key}', '{$value["NAME"]}', '{$brand}','{$sort}', '{$value["SPECIALOFFER"]}', '{$value["PRICE"]}')";
//                $this->DB->insert($query);
//            }
//        }
//    }

    public function insertReport($only_truncate = false)

    {

        if ($only_truncate) {
            $sql_truncate = "TRUNCATE TABLE `price_competitor_big_games`";
            $this->DB->simpleQuery($sql_truncate);

            return;
        }
        $error = false;
        $insert_sql_big_games = array();

        foreach ($this->result_arr["response"]["products"] as $value) {
            $competitor = "";
            $price = 0;
            $full_name = $value["name"];
            $name = trim(str_replace($this->brands, '', $value["name"]));
            foreach ($value["offers"] as $competitor_arr) {

                $exclude_con = array(
                    'WatchTown.ru',
                    'Часолинк',
                    'remen.budilkin.ru',
                    'Casualwatches',
                    'Духи.рф',
                    'Odorat.ru',
                    'P-shik.ru',
                    'AROMA-BUTIK.RU',
                    'Ry7.ru',
                    'Parfum-Paradise',
                    'Orental.ru',
                    'Альфа-Парфюм',
                    'Якосметика.рф',
                    '1st-ORIGINAL.ru',
                    'UniFive.ru',
                    'CandyKiss',
                    'Parfumerovv.ru',
                    'Ляромат',
                    'ambrer.ru',
                    'MONARCH',
                    'Matrochka',
                    'www.daer.ru',
                    'Альфа-Парфюм',
                    'Якосметика.рф',
                    'ambrer.ru',
                    'VIPDepot',
                    'IRIS',
                    'SpellSmell.ru',
                    'ЯКосметика.рф',
                    'Dushistik',
                    'Парфюмчик.РФ',
                    'Parfum Plaza',
                    'Мэйкап Маркет',
                    'KRASON.ru',
                    'EvaPRO.ru',
                    '21vek.ru',
                    'OZON.ru',
                    'TempusShop.ru'

                );


                if(in_array($competitor_arr["shopName"], $exclude_con)){
                    continue;
                }
 


                $competitor = $competitor_arr["shopName"];
                $price = $competitor_arr["price"];
                $insert_sql_big_games[] = "(NULL,'{$name}','{$full_name}','{$competitor}',{$price})";
            }

        }


        $sql_text_big_games = implode(",", $insert_sql_big_games);
        $sql_big_games = "INSERT INTO 
               `price_competitor_big_games` (
               `id`,
                `model`, 
                `brand_model`,
                `competitor`,
                `price`) 
                VALUES {$sql_text_big_games}";

        if (!$this->DB->insert($sql_big_games)) {
            $error = true;
        }
        if ($error) {
            $this->result = (object)array("error" => $this->DB->error());
        }
    }


    public function genKernelTable()
    {
        $query = "SELECT PA.model,CNT_M.cnt, cur_price,PA.recalc_price, competitor, price,specialoffer,specialofferms,color,percent_change,dnt_chn_price
 FROM `price_all` AS PA
LEFT JOIN (
SELECT model,competitor,price FROM `price_competitor_big_games` WHERE price !=0
) AS AA ON AA.model=PA.model
LEFT JOIN (
SELECT model,count(model) AS cnt FROM `sklad_coming`
                WHERE
 				id NOT IN(SELECT model_id FROM sklad_sales) AND 
                id NOT IN(SELECT model_id FROM sklad_shipment) AND 
                id NOT IN(SELECT model_id FROM sklad_discard)
                GROUP BY model
) AS CNT_M ON CNT_M.model=PA.model
ORDER BY `PA`.`sort`, FIELD(`PA`.`color`,'#FFCCCC','#FFFF99','white'), `PA`.`model`,`price` ASC

";

        return $this->DB->select($query);
    }


    public function calc1Group()
    {


        //обнуляем нахер текуще расчетные цены

        $query = "UPDATE price_all SET recalc_price = 0, color = 'white' WHERE recalc_price > 0 ";
        $this->DB->update($query);
//        /**
//         * По 1й группе мы рассчитываем минимальную и среднюю цены.
//         * Если минимальная и средняя цены отличаются не более чем на 2%, то принимаем минимальную цену 1й группы, умноженную на Коэф1.
//         * и округлённую до сотен вверх минус 10. (например, в экселе это =округлвверх(15900*0,9;-2)-10=14390).
//         * Если цены различаются более чем на 2%, то принимаем минимальную цену 1й группы, умноженную на 0,95 и округлённую до сотен вверх минус 10.
//         * Коэф1.=0,9 если базовая цена до 20 тыс руб
//         * Коэф1.=0,85 если базовая цена от 20 до 30 тыс руб
//         * Коэф1.=0,8 если базовая цена выше 30 тыс руб
//         */
//
        $query = "SELECT * FROM  `price_settings` ";
        $arr = $this->DB->select($query);
        $arr_params = array();
        foreach ($arr as $value) {
            $arr_params[$value['param']] = $value['value'];
        }

        $query = "
SELECT
  *,

  calc_price                                                       AS calc_price_min,

  ROUND((((calc_price - cur_price) * 100) / calc_price))                                                                        AS percent_change,
  if(ABS(ROUND((((calc_price - cur_price) * 100) / calc_price))) <= {$arr_params['colorwhite']}, 'white',
     if(ABS(ROUND((((calc_price - cur_price) * 100) / calc_price))) > {$arr_params['colorwhite']}
        AND ABS(ROUND((((calc_price - cur_price) * 100) / calc_price))) <= {$arr_params['coloryellow']}, '#FFFF99', '#FFCCCC')) AS color
FROM price_all AS PA
  LEFT JOIN (
              SELECT
                model                                                                 AS model,
                min                                                                   AS min,
                @ratio := IF(min < 12000, {$arr_params['сoef2Demping12000']},
                             IF(min >= 12000 AND min < 15000, {$arr_params['сoef2Demping1215']},
                                IF(min >= 15000 AND min < 20000, {$arr_params['сoef2Demping1520']},
                                   IF(min >= 20000 AND min < 27000, {$arr_params['сoef2Demping2027']},
                                      IF(min >= 27000 AND min < 40000, {$arr_params['сoef2Demping2740']}, {$arr_params['сoef2Demping40000']}))))) AS ratio,

                (CEIL((min * @ratio) / 100) * 100)                                    AS calc_price
              FROM (
                     SELECT
                       model,
                       MIN(price) AS min
                     FROM price_competitor_big_games
                     WHERE price != 0
                     GROUP BY model
                   ) AS F1
            ) AS FF1
    ON PA.model = FF1.model

                   
";
//        echo "<pre>";
//        print_r($query);
//        echo "</pre>";
//        die();
        $arr = $this->DB->select($query);
        foreach ($arr as $value) {
            if ($value["calc_price_min"] == 0)
                continue;

            $query = "UPDATE price_all SET recalc_price = {$value["calc_price_min"]}, color = '{$value["color"]}', percent_change='{$value["percent_change"]}'
              WHERE price_all.model LIKE '{$value["model"]}'";
            $this->DB->update($query);

            $query = "DELETE FROM `price_count_change_price` WHERE `model` = '{$value["model"]}'";
            $this->DB->delete($query);
        }
//exit();
        /**
         * Если ни в одной из групп нет конкурентов, то применяется предыдущая цена сайта, умноженная на 1,1
         * (округленная вверх до сотен минус 10). ПРИ ЭТОМ. С момента пропажи конкурентов цена может повысится на 10% не более двух раз.
         * Например, цена конкурента-депмингёра была 11950, мы рассчитали по алгоритму 11990, затем этот конкурент пропал, на следующем обновлении
         * цен мы получим =округлвверх(11990*1,1;-2)-10=13190. При следующем обновлении если конкурентов снова нет,
         * мы получим =округлвверх(13190*1,1;-2)-10=14590. При следующем обновлении если конкурентов снова нет, мы получим все те же 14590 и т.д.
         * Если затем когда-либо возвращается какой-то конкурент с ЛЮБОЙ ценой, мы снова расчёт ведем относительно конкурентов по алгоритму,
         * если затем опять конкуренты пропадают, мы получаем право на 2 повышения цен.
         */

        $query = "SELECT 'white' AS color, model, (CEIL((cur_price*{$arr_params['priceUpWOopponent']})/100))*100 AS calc_price_min FROM `price_all` WHERE recalc_price = 0
                  AND model NOT IN (SELECT model FROM `price_count_change_price` GROUP BY model HAVING count(model)>=2)";
        $arr = $this->DB->select($query);
        foreach ($arr as $value) {


            $query = "UPDATE price_all SET recalc_price = {$value["calc_price_min"]}, color = 'white',percent_change='0'
              WHERE price_all.model LIKE '{$value["model"]}'";
            $this->DB->update($query);

            //делаем вставку для отслеживания изменений
            $query = "INSERT INTO `price_count_change_price` (`id`, `model`) VALUES (NULL, '{$value["model"]}')";
            $this->DB->insert($query);
        }

        $query = "SELECT model,cur_price FROM  `price_all` WHERE recalc_price=0";
        $arr = $this->DB->select($query);
        foreach ($arr as $value) {
            $query = "UPDATE price_all SET recalc_price = {$value["cur_price"]}, percent_change = 0  WHERE model LIKE '{$value["model"]}'";
            $this->DB->update($query);
        }

        //берем текущую цену
//        $query = "SELECT 'white' AS color, model, (CEIL((cur_price*1.1)/100))*100-10 AS calc_price_min FROM `price_all` WHERE recalc_price = 0
//                  AND model IN (SELECT model FROM `price_count_change_price` GROUP BY model HAVING count(model)>=2)";
//        $arr = $this->DB->select($query);
//        foreach ($arr as $value) {
//            $query = "UPDATE price_all SET recalc_price = {$value["calc_price_min"]}, color = '{$value["color"]}', percent_change='10'
//              WHERE price_all.model LIKE '{$value["model"]}'";
//            $this->DB->update($query);
//        }

        /**
         * 1. У товаров сделать свойство СПЕЦПРЕДЛОЖЕНИЕ, отображать его здесь https://crm.max-watches.ru/t/update_price/ (9PM пока не надо)
         *
         * При простановке этой галочки, цена товара снижается на n% и округляется до сотен в бОльшую сторону
         *
         * при этом n можно проставить в сетке коэффициентов, он разный для след. групп:
         *
         * < 12000
         *
         * >= 12000 И < 15000
         *
         * >= 15000 И < 20000
         *
         * >= 20000 И < 27000
         *
         * >= 27000 И < 40000
         *
         * >= 40000
         */
        $query = "SELECT model,recalc_price,cur_price FROM  `price_all` WHERE specialoffer=1";
        $arr = $this->DB->select($query);

        foreach ($arr as $value) {
            if ($value['recalc_price'] < 12000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec12000'] / 100)) / 100) * 100;

            if ($value['recalc_price'] < 15000 AND $value['recalc_price'] >= 12000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec1215'] / 100)) / 100) * 100;

            if ($value['recalc_price'] < 20000 AND $value['recalc_price'] >= 15000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec1520'] / 100)) / 100) * 100;


            if ($value['recalc_price'] < 27000 AND $value['recalc_price'] >= 20000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec2027'] / 100)) / 100) * 100;

            if ($value['recalc_price'] < 40000 AND $value['recalc_price'] >= 27000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec2740'] / 100)) / 100) * 100;

            if ($value['recalc_price'] >= 40000)
                $value["cur_price_recalc"] = ceil(($value["recalc_price"] - ($value["recalc_price"] * $arr_params['сoef2Spec40000'] / 100)) / 100) * 100;


//            if ($value['model'] == 'T055.410.16.037.00') {
//                echo "<pre>";
//                print_r($value);
//                echo "</pre>";
//                die();
//            }







            $percent_change = round((($value["cur_price_recalc"] - $value["cur_price"]) * 100 / $value["cur_price_recalc"]));


            $query = "UPDATE price_all SET recalc_price = {$value["cur_price_recalcki"]},percent_change = {$percent_change} WHERE model LIKE '{$value["model"]}'";
            $this->DB->update($query);
        }
        /**
         *
         */
        /**Понял. Галку трогаем. Да, при следующем апдейте все делать заново, хранить до тех пор пока руками не уберу, не надо
        Правка: если цена в меньшую сторону должна измениться (по расчету), то эта функция работает.
        Если же в бОльшую сторону, то не работает.**/

        $query = "SELECT model FROM price_all WHERE dnt_chn_price=1 AND `cur_price`<`recalc_price`";

        $arr_min = $this->DB->select($query);

        foreach ($arr_min as $value_min) {
            $query = "UPDATE price_all SET dnt_chn_price=0 WHERE model LIKE '{$value_min["model"]}'";
            $this->DB->update($query);
        }

    }

    public function dnt_chn_price($model, $status)
    {
        $query = "UPDATE price_all  SET `dnt_chn_price` = {$status} WHERE model='{$model}' ";
        if ($this->DB->update($query)) {
            return 'OK';
        } else {
            return 'Ошибка';
        }
    }


    public function dontChangePriceList($POST){
        if(isset($POST['list_positions'])){
            $data = $POST['list_positions'];


            $expld = function ($data) {
                return explode("\n", $data);
            };

            $arr =  explode('"', $data);
            $csv = array_map($expld, $arr);

            foreach ($csv as $parent_arr){
                foreach ($parent_arr as $children){
                    $children = trim($children);
                    if(empty($children)) {
                        continue;
                    }

                    $this->dnt_chn_price($children, 1);

                }

            }

        }else{
            return 'Ошибка';
        }

    }



    public function setHandPrice($model, $price)
    {
        /**
         * Однако если произошло повышение цены по такому алгоритму, но цена не была применена для заливки на сайт,
         * а руками была применена какая-либо (ЛЮБАЯ) другая цена, то право на повышение при последующих обновлениях также пропадает.
         *
         *  if(ABS((((MIN(calc_price) - cur_price) * 100) /  MIN(calc_price)))<=5,'white',
         * if(ABS((((MIN(calc_price) - cur_price) * 100) /  MIN(calc_price)))>5 AND ABS((((MIN(calc_price) - cur_price) * 100) /  MIN(calc_price)))<=15,'yellow','red')) AS color
         */


        $query = "SELECT cur_price FROM price_all WHERE model='{$model}'";
        $cur_price = $this->DB->selectCell($query);

        $calc_percent_for_color = round(abs((($cur_price - $price) * 100) / $cur_price));

        if ($calc_percent_for_color <= 5) {
            $color = 'white';
        } elseif ($calc_percent_for_color > 5 && $calc_percent_for_color <= 15) {
            $color = '#FFFF99';
        } else {
            $color = '#FFCCCC';
        }

        $calc_percent = round(((($price - $cur_price) * 100) / $price));

        $query = "UPDATE price_all SET recalc_price = {$price}, color = '{$color}', percent_change='{$calc_percent}' WHERE model='{$model}' ";
        $this->DB->update($query);

        //делаем вставку для отслеживания изменений
        $query = "INSERT INTO `price_count_change_price` (`id`, `model`) VALUES (NULL, '{$model}')";
        $this->DB->insert($query);
        //делаем вставку для отслеживания изменений
        $query = "INSERT INTO `price_count_change_price` (`id`, `model`) VALUES (NULL, '{$model}')";
        $this->DB->insert($query);

//        $query="DELETE FROM `price_count_change_price` WHERE `model` = '{$model}'";
//        $this->DB->delete($query);

        $arr["calc_percent"] = $calc_percent;
        $arr["color"] = $color;

        echo json_encode($arr);
    }

    public function setAllHandPrice($all_arr)
    {

        foreach ($all_arr as $model => $price) {
            $query = "SELECT recalc_price FROM price_all WHERE model='{$model}'";
            $recalc_price = $this->DB->selectCell($query);

            $query = "SELECT cur_price FROM price_all WHERE model='{$model}'";
            $cur_price = $this->DB->selectCell($query);

            if ($recalc_price != $price) {
                $calc_percent_for_color = round(abs((($recalc_price - $price) * 100) / $recalc_price));

                if ($calc_percent_for_color <= 5) {
                    $color = 'white';
                } elseif ($calc_percent_for_color > 5 && $calc_percent_for_color <= 15) {
                    $color = '#FFFF99';
                } else {
                    $color = '#FFCCCC';
                }


                $calc_percent = round(((($price - $cur_price) * 100) / $price));

                $query = "UPDATE price_all SET recalc_price = {$price}, color = '{$color}', percent_change='{$calc_percent}' WHERE model='{$model}' ";
                $this->DB->update($query);

                //делаем вставку для отслеживания изменений
                $query = "INSERT INTO `price_count_change_price` (`id`, `model`) VALUES (NULL, '{$model}')";
                $this->DB->insert($query);
                //делаем вставку для отслеживания изменений
                $query = "INSERT INTO `price_count_change_price` (`id`, `model`) VALUES (NULL, '{$model}')";
                $this->DB->insert($query);

            }
        }

    }

//    public function setSpecialoffer($model, $specialoffer)
//    {
//        $query = "UPDATE price_all  SET `specialoffer` = {$specialoffer} WHERE model='{$model}' ";
//        if ($this->DB->update($query)) {
//            return 'OK';
//        } else {
//            return 'Ошибка';
//        }
//    }

    public function saveToLog()
    {
        $query = "INSERT INTO price_log_price (`id`, `model`, `price`, `date_insert`) 
          SELECT NULL,model,recalc_price AS price,CURRENT_TIMESTAMP FROM price_all";
        $this->DB->insert($query);
    }

    public function getLog($model)
    {
        $query = "SELECT price,date_insert FROM  `price_log_price` WHERE model ='{$model}' ORDER BY date_insert DESC";

        $arr = $this->DB->select($query);
        foreach ($arr as $value) {
            echo $value['price'] . " - " . date("d.m.Y H:i:s", strtotime($value['date_insert'])) . "<br>";
        }
    }

    public function gridСoefficients($post)
    {
        $arr_for_sql = array();
        foreach ($post as $key => $value) {
            if ($key == "action")
                continue;
            $query = "UPDATE `price_settings` SET  `value` =  '{$value}' WHERE  `param` =  '{$key}';";
            if (!$this->DB->update($query)) {
                return 0;
            }
        }

        return 1;
    }

    public function setSchedule($post)
    {
        $time = $post['time'];
        $active = $post['active'];
        $id = $post['id'];
        if (empty($time))
            return 0;
        $query = "UPDATE `price_schedule` SET  `time` =  '{$time}', `active` = $active  WHERE `id` =$id";
        $this->DB->update($query);

    }

    public function getSchedule($id = false)
    {
        if ($id == false) {
            $query = "SELECT * FROM `price_schedule`";

            return $this->DB->select($query);
        } else {
            $query = "SELECT `active`,`time` FROM `price_schedule` WHERE `id`=$id";

            return $this->DB->selectRow($query);
        }
    }

}