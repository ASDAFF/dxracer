<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 23.08.16
 * Time: 10:01
 */
require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("WorkINGlobalDB.php");
require_once("SkladSMS.php");
require_once("Invoice.php");

class Sklad
{

    public $DB;
    private $data;
    private $timestamp;
    private $model_id;
    private $post;

    function __construct()
    {
        setlocale(LC_ALL, 'ru_RU.utf8');
        $settings = array(
            'server' => 'localhost',
            'username' => 'zakaz1234',
            'password' => 'CApwZyX9gNQq2agw',
            'db' => 'zakaz1234',
            'port' => 3306,
            'charset' => 'utf8'

        );
        $this->DB = new simpleMysqli($settings);
        $this->timestamp = date("Y-m-d H:i:s");


    }

    /**
     * @param $action
     * @param $data
     *
     * @return bool
     */
    function action($action, $data = "", $model_id = "", $post = "")
    {
        if (empty($action))
            exit();

        if (is_array($data)) {
            $this->data = $data;
        } else {
            $this->data = trim($data);
        }
        $this->model_id = trim($model_id);


        $this->post = $post;


        switch ($action) {
            case 'coming':
                return $this->setComing();
                break;
            case 'sales':
                return $this->setSales();
                break;
            case 'Refusals':
                return $this->setRefusals();
                break;
            case 'Problems':
                return $this->setProblems();
                break;
            case 'Other':
                return $this->setOther();
                break;
            case 'shipment':
                return $this->setShipment();
                break;
            case 'coming_money':
                return $this->setComingMoney();
                break;
            case 'discard':
                return $this->setDiscard();
                break;
            case 'return':
                return $this->setReturn();
                break;
            case 'getKernelTable':
                return $this->getKernelTable();
                break;
            case 'getDateReOrder':
                return $this->getDateLastReOrder();
                break;
            case 'getAutoUpdateStatus':
                return $this->getAutoUpdateStatus();
                break;
            case 'setAutoUpdateStatus':
                return $this->setAutoUpdateStatus();
                break;
            case 'editPosition':
                return $this->editPosition();
                break;
            case 'editPositionPrice':
                return $this->editPositionPrice();
                break;
            case 'closeSklad':
                return $this->closeSklad();
                break;
            case 'closeSkladLog':
                return $this->closeSkladLog();
                break;
            case 'getCloseSkladOne':
                return $this->getCloseSkladOne();
                break;
            case 'setSkladFullExportLog':
                return $this->setSkladFullExportLog();
                break;
            case 'genAutoUpdateFiles':
                return $this->genAutoUpdateFiles();
                break;
            case 'saveItogo':
                return $this->saveItogo();
                break;
            case 'setCourierList':
                return $this->setCourierList();
                break;
            case 'getCourierList':
                return $this->getCourierList();
                break;
            case 'getParcingCourier':
                return $this->getParcingCourier();
                break;
            case 'newInvoce':
                $invoice = new Invoice();

                return $invoice->newInvoice($post);
                break;
            case 'edit_comment':
                $invoice = new Invoice();

                return $invoice->updateComment($post);
                break;
        }

    }

    /**
     * @return bool|string
     */
    private function setComing()
    {
        $this->logTextInsert();

        $table_name = "`sklad_coming`";
        $arr_data = explode(PHP_EOL, $this->data);
        $count_string = 1;

        if (empty($this->data))
            return "Данные пусты";

        /**Если приход по накладной*/
        if (isset($this->post['by_invoice'])) {
            $invoice = new Invoice();
            $this->post['provider'] = $invoice->getProvider($this->post['invoice']);
        }
        /**Если приход по накладной*/


        foreach ($arr_data as $value_str) {
            $arr_out = str_getcsv($value_str, "\t");

            if (empty($arr_out[1]) AND empty($this->post['provider'])) {

                return json_encode(array("result" => 0, "text" => "Данные не записаны (ошибка в строке <b>№{$count_string})</b> Не указан поставщик<br>"));
                exit();
            }

            $this->post['provider'] = trim($this->post['provider']);
            if (!empty($this->post['provider'])) {
                $arr_out[1] = $this->post['provider'];
            }


            $model = trim($arr_out[0]);
            $provider = trim($arr_out[1]);
            $model_tmp_first_string = preg_replace("#[А-Яа-яЁё]#iu", '', $model);
            if (empty($model_tmp_first_string))
                continue;

            $model_prefix = preg_replace("/[^A-Za-z]/", '', $model);

            switch ($model_prefix) {
                case 'T':
                    $sort = 10;
                    $brand = "Tissot";
                    break;
                default:
                    $sort = 100;
                    $brand = "Прочие бренды";
            }

            $insert_sql[] = "(NULL,'{$this->timestamp}','{$model}','{$provider}','{$sort}','{$brand}')";
            $models_arr[] = $model;
            $count_string++;
        }

        $sql_text = implode(",", $insert_sql);


        $sql = "
                INSERT INTO {$table_name} (
                `id`,
                `date_insert`,
                `model`,
                `provider`,
                `sort`,
                `brand`
                )
                VALUES {$sql_text}";

        if ($this->DB->insert($sql)) {
            $this->logSql($table_name, $this->timestamp, 'insert');
            $count_string--;

            /**Если приход по накладной*/
            if (isset($this->post['by_invoice'])) {
                if (!$invoice->setArrivalByInvoice($this->post['invoice'], $models_arr)) {
                    return json_encode(array("result" => 0, "text" => " {$invoice->error_text}"));
                };
            }
            $this->DB->transactionCommit();

            return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} позиций(я)"));
        } else {
            $this->DB->transactionRollBack();

            return json_encode(array("result" => 0, "text" => "Ошибка"));
        }

    }

    public function logTextInsert()
    {
        $text = base64_encode($this->data);
        $query = "INSERT INTO `sklad_log_insert` (`id`, `text`, `date`) VALUES (NULL, '{$text}', CURRENT_TIMESTAMP)";

        if (!$this->DB->insert($query)) {
            return json_encode(array("result" => 0, "text" => "Ошибка логирования 1"));
        }
    }

    private function logSql($table_name, $timestamp, $type)
    {

        $sql = "INSERT INTO `sklad_logging_sql` (`id`,`table_name`, `date`, `type`) VALUES (NULL,'{$table_name}','{$timestamp}','{$type}')";
        if ($this->DB->insert($sql))
            return 1;
        else {
            echo $sql;
            exit();
        }

    }

    private function setSales()
    {
        $table_name = "`sklad_sales`";
        $this->logTextInsert();

        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);

        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return json_encode(array("result" => 0, "text" => "Проверьте вставляемые данные"));
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }
        foreach ($arr_data as $value) {
            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace($project, '', $value[$i])));
            $phone_arr = explode("\n", $value[$i + 1]);
            $phone = "";
            foreach ($phone_arr as $phone_value) {
                $phone .= str_replace('"', '', $phone_value) . " ";
            }
            $phone = trim($phone);

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim($value[$i + 3]);

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
            $comment = trim($value[$i + 6]);
//            $comment = str_replace("%", '\%', $comment);
            $pay_card = 0;
            if (preg_match('/оплата картой/', $value[count($value) - 1])) {
                $pay_card = 1;
            }
            /*
             * Получаем свободные модели т.е. которых нет в таблице продажи sklad_sales
             */
            $model_id_sql = implode(",", $model_id_arr);
            $sql = "SELECT * FROM `sklad_coming` WHERE 
                    id NOT IN (SELECT `model_id` FROM {$table_name}) AND 
                    id NOT IN (SELECT `model_id` FROM `sklad_discard`) AND
                    id NOT IN (SELECT `model_id` FROM `sklad_shipment`) 
                    AND `model`='{$model}'
                    AND `id` NOT IN ({$model_id_sql})
                     ORDER BY 
            `date_insert` ASC  LIMIT 1";
            if (!$model_id = $this->DB->selectCell($sql)) {
                return json_encode(array("result" => 0, "text" => "Нет на складе <b>$model</b> ($phone - $text) ( <b>Обратите Внимание, данные не добавлены</b>"));
            }
            $courier_string = str_replace("\n", " ", $value[count($value) - 1]);
            $courier_string = str_replace("\r\n", " ", $courier_string);
            $courier_string = str_replace("\r", " ", $courier_string);
            $courier_name = $this->getCourierByText($courier_string);
            if ($courier_name == "0") {
                return json_encode(array("result" => 0, "text" => " Курьер не указана либо ошибка в имени курьера <b>$model</b> ($phone - $text) ( <b>Обратите Внимание, данные не добавлены</b>"));
            }

            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$model_id}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$pay_card}','{$courier_name}','{$comment}')";
            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`,`model_id`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`pay_card`,`courier_name`,`comment`) VALUES {$insert_sql}";
            $sql_sklad_return_delete[] = "DELETE FROM `sklad_return` WHERE `model_id`={$model_id}"; //удаляем из возврата проданные";
            $model_id_arr[] = $model_id;
            $model_arr[$model] = array('TEXT' => $text, 'PROJECT' => $project);

        }
        foreach ($sql_ins as $value_sql) {
            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
                $model_id_sql = implode(",", $model_id_arr);
                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
                $this->logSql($table_name, $this->timestamp, 'delete');
                $this->DB->simpleQuery($sql);

                return json_encode(array("result" => 0, "text" => $this->DB->error() . '<br> ' . $value_sql));
            }
        }
        foreach ($sql_sklad_return_delete as $value_sql) {
            $this->DB->delete($value_sql);
        }
        $count_string = count($sql_ins);


        /***********send mail instagramm*******************/

        foreach ($model_arr as $model => $value_arr) {

            $arr = explode(" ", $value_arr['TEXT']);

            $email = "";
            foreach ($arr as $value) {

                if ($email = filter_var(preg_replace('#[^0-9A-Za-z.@]#', '', $value), FILTER_VALIDATE_EMAIL))
                    break;
            }

            if (!empty($email)) {
                if ($value_arr['PROJECT'] == 'MS') {
                    $this->sendMailInstargammKW($email);
                }
//                elseif($value_arr['PROJECT']=='TT') {
//                    $this->sendMailInstargammTT($email);
//                }
            }
        }
        /***********send mail instagramm*******************/

        if (!$this->setPriceCourier()) {
            return json_encode(array("result" => 0, "text" => "Произошла ошибка при вставке ЗП курьера"));
            //записываем ЗП курьера
        }


        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} позиций(я)"));
    }

    /**
     * @param $text
     *
     * @return int
     * есть ли имя курьера в столбце
     */
    private function getCourierByText($text)
    {
        $arr_text = explode(" ", $text);

        $arr_couriers = $this->getCourierList();
        foreach ($arr_couriers as $value) {
            if (in_array(strtolower($value["name"]), array_map('strtolower', $arr_text))) {
                return $value["name"];
            }

        }

        return 0;
    }

    /**
     * @return array|false
     * Получаем всех курьеров
     */
    public function getCourierList()
    {
        $query = "SELECT * FROM  `sklad_courier`";

        return $this->DB->select($query);

    }

    private function sendMailInstargammKW($email)
    {
        file_get_contents("https://monarchshop.ru/api/?paid=1&auth=XDFDD3e45fvsdfvvfg4&email={$email}");
    }

    private function setPriceCourier()
    {
        foreach ($this->post['price_courier'] as $key => $value) {
            $value = (int)$value;
            $query = "INSERT INTO `sklad_courier_price` (`id`, `courier_name`, `price`, `date_insert`) VALUES (NULL, '{$key}', '{$value}', CURRENT_TIMESTAMP)";
            if ($this->DB->insert($query)) {
                return true;
            } else {
                return false;
            }
        }
    }

    private function setRefusals()
    {
        $table_name = "`sklad_refusals`";

        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);

        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return json_encode(array("result" => 0, "text" => "Проверьте вставляемые данные"));
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }
        foreach ($arr_data as $value) {
            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace('CL', '', $value[$i])));
            $model = trim(str_replace('"', '', $model));
            $phone_arr = explode("\n", $value[$i + 1]);
            $phone = "";
            foreach ($phone_arr as $phone_value) {
                $phone .= str_replace('"', '', $phone_value) . " ";
            }
            $phone = trim($phone);

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim(str_replace(' ', '', $value[$i + 3]));

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
            $comment = trim($value[$i + 6]);
//            $comment = str_replace("%", '\%', $comment);

            $pay_card = 0;
            if (preg_match('/оплата картой/', $value[count($value) - 1])) {
                $pay_card = 1;
            }


            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$pay_card}','{$comment}')";
            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`pay_card`,`comment`) VALUES {$insert_sql}";


        }
        foreach ($sql_ins as $value_sql) {
            $value_sql = str_replace('\\', '', $value_sql);
            $value_sql = str_replace('..', '.', $value_sql);
            $value_sql = str_replace('%', '', $value_sql);

            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
//                $model_id_sql = implode(",", $model_id_arr);
//                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
//                $this->logSql($table_name, $this->timestamp, 'delete');
//                $this->DB->simpleQuery($sql);
                return json_encode(array("result" => 0, "text" => $this->DB->error() . '<br> ' . $value_sql));

            }
        }


        $count_string = count($sql_ins);

        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} отказов"));
    }

    private function setProblems()
    {
        $table_name = "`sklad_problems`";

        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);

        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return json_encode(array("result" => 0, "text" => "Проверьте вставляемые данные"));
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }
        foreach ($arr_data as $value) {
            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace('CL', '', $value[$i])));
            $model = trim(str_replace('"', '', $model));
            $phone_arr = explode("\n", $value[$i + 1]);
            $phone = "";
            foreach ($phone_arr as $phone_value) {
                $phone .= str_replace('"', '', $phone_value) . " ";
            }
            $phone = trim($phone);

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim(str_replace(' ', '', $value[$i + 3]));

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
            $comment = trim($value[$i + 6]);
//            $comment = str_replace("%", '\%', $comment);

            $pay_card = 0;
            if (preg_match('/оплата картой/', $value[count($value) - 1])) {
                $pay_card = 1;
            }


            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$pay_card}','{$comment}')";
            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`pay_card`,`comment`) VALUES {$insert_sql}";


        }
        foreach ($sql_ins as $value_sql) {
            $value_sql = str_replace('\\', '', $value_sql);
            $value_sql = str_replace('..', '.', $value_sql);
            $value_sql = str_replace('%', '', $value_sql);

            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
//                $model_id_sql = implode(",", $model_id_arr);
//                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
//                $this->logSql($table_name, $this->timestamp, 'delete');
//                $this->DB->simpleQuery($sql);
                return json_encode(array("result" => 0, "text" => $this->DB->error() . '<br> ' . $value_sql));

            }
        }


        $count_string = count($sql_ins);

        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} проблемм"));
    }

    private function setOther()
    {
        $table_name = "`sklad_other`";

        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);

        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return json_encode(array("result" => 0, "text" => "Проверьте вставляемые данные"));
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }
        foreach ($arr_data as $value) {
            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace('CL', '', $value[$i])));
            $model = trim(str_replace('"', '', $model));
            $phone_arr = explode("\n", $value[$i + 1]);
            $phone = "";
            foreach ($phone_arr as $phone_value) {
                $phone .= str_replace('"', '', $phone_value) . " ";
            }
            $phone = trim($phone);

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim(str_replace(' ', '', $value[$i + 3]));

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
            $comment = trim($value[$i + 6]);
//            $comment = str_replace("%", '\%', $comment);

            $pay_card = 0;
            if (preg_match('/оплата картой/', $value[count($value) - 1])) {
                $pay_card = 1;
            }


            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$pay_card}','{$comment}')";
            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`pay_card`,`comment`) VALUES {$insert_sql}";


        }
        foreach ($sql_ins as $value_sql) {
            $value_sql = str_replace('\\', '', $value_sql);
            $value_sql = str_replace('..', '.', $value_sql);
            $value_sql = str_replace('%', '', $value_sql);

            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
//                $model_id_sql = implode(",", $model_id_arr);
//                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
//                $this->logSql($table_name, $this->timestamp, 'delete');
//                $this->DB->simpleQuery($sql);
                return json_encode(array("result" => 0, "text" => $this->DB->error() . '<br> ' . $value_sql));

            }
        }


        $count_string = count($sql_ins);

        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string}"));
    }

    private function setShipment()
    {
        $table_name = "`sklad_shipment`";
        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $this->data = str_replace("\t\r\n", "\r\n", $this->data);
        $this->data = str_replace("\t" . '"' . "\r\n", '"' . "\r\n", $this->data);
        $this->data = str_replace("СПСР\r\n", 'СПСР', $this->data);
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);
        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return "Проверьте вставляемые данные";
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }


        foreach ($arr_data as $value) {

            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace($project, '', $value[$i])));
            $phone_arr = explode("\n", $value[$i + 1]);
            $phone = "";
            foreach ($phone_arr as $phone_value) {
                $phone .= str_replace('"', '', $phone_value) . " ";
            }
            $phone = trim($phone);

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim($value[$i + 3]);

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
//            $comment = trim($value[$i + 6]);


            //определяем отправителя
            $shipnumber = "";
            $shipper = "";

            preg_match('#\d{8}MOW#', $value[$i + 6], $value_dpd);

            $value_dpd = $value_dpd[0];
            if (!empty($value_dpd)) {
                $shipnumber = $value_dpd;
                $shipper = 'DPD';
            }


            preg_match('#D\d{9,15}#', $value[$i + 6], $value_dpd_1);

            $value_dpd_1 = $value_dpd_1[0];
            if (!empty($value_dpd_1)) {
                $shipnumber = $value_dpd_1;
                $shipper = 'DPD';
            }


            preg_match('#Major\d{3,15}#', $value[$i + 6], $value_major);

            $value_major = $value_major[0];
            if (!empty($value_major)) {
                $shipnumber = str_replace('Major', '', $value_major);
                $shipper = 'Major';
            }


            preg_match('#СПСР\d{3,15}#', $value[$i + 6], $value_spsr);

            $value_spsr = $value_spsr[0];
            if (!empty($value_spsr)) {
                $shipnumber = str_replace('СПСР', '', $value_spsr);
                $shipper = 'SPSR';
            }


            preg_match('#EA\d{3,15}RU#', $value[$i + 6], $value_emc);

            $value_emc = $value_emc[0];
            if (!empty($value_emc)) {
                $shipnumber = $value_emc;
                $shipper = 'EMC';
            }

            preg_match('#Яндекс#', $value[$i + 6], $value_ya);

            $value_ya = $value_ya[0];
            if (!empty($value_ya)) {
                $shipnumber = str_replace('Яндекс', '', $value[$i + 6]);
                $shipnumber = trim($shipnumber);
                $shipper = 'YA';
            }
            //определили


            $model_id_sql = implode(",", $model_id_arr);
            $sql = "SELECT * FROM `sklad_coming` WHERE 
                    id NOT IN (SELECT `model_id` FROM {$table_name}) 
                    AND id NOT IN (SELECT `model_id` FROM `sklad_sales`) 
                    AND id NOT IN (SELECT `model_id` FROM `sklad_discard`) 
                    AND  `model`='{$model}' 
                    AND `id` NOT IN ({$model_id_sql})
                    ORDER BY 
            `date_insert`";
            if (!$model_id = $this->DB->selectCol($sql)) {
                return json_encode(array("result" => 0, "text" => "Нет на складе <b>$model</b> ($phone - $text) ( <b>Обратите Внимание, данные не добавлены</b>"));
            }
            $model_id = $model_id[0];
            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$model_id}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$shipnumber}','{$shipper}','{$value[$i + 6]}')";

            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`,`model_id`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`ship_number`,`shipper`,`comment`) VALUES 
            {$insert_sql}";


            $for_sms_ru[] = array( //масств для отправки смс
                'phone' => $phone,
                'shipnumber' => $shipnumber,
                'text' => $text,
                'model' => $model,
                'project' => $project,
                'shipper' => $shipper
            );


            $sql_sklad_return_delete[] = "DELETE FROM `sklad_return` WHERE `model_id`={$model_id}"; //удаляем из возврата проданные";
            $model_id_arr[] = $model_id;
        }

        foreach ($sql_ins as $value_sql) {
            $value_sql = str_replace('\\', '', $value_sql);
            $value_sql = str_replace('%', '', $value_sql);
            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
                $model_id_sql = implode(",", $model_id_arr);
                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
                $this->logSql($table_name, $this->timestamp, 'delete');
                $this->DB->simpleQuery($sql);

                return json_encode(array("result" => 0, "text" => $this->DB->error() . '<br> ' . $sql . ' ' . $value_sql));
            }
        }

        foreach ($sql_sklad_return_delete as $value_sql) {
            $this->DB->delete($value_sql);
        }

        $count_string = count($sql_ins);

        $sk_sms = new SkladSMS();

        foreach ($for_sms_ru as $value) {
            $rIs = $sk_sms->insertRecord($value['phone'], $value['shipnumber'], $value['text'], $value['model'], $value['project'], $value['shipper']);
//            if(!$rIs){
//                return json_encode(array("result" => 0, "text" => "при добавлении SMS({$value['phone']} {$value['shipnumber']}) но {$count_string} позиций(я) добавлено"));
//            }

        }


        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} позиций(я)"));

    }

    private function setComingMoney()
    {
        $table_name = "`sklad_coming_money`";
        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);
        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return "Проверьте вставляемые данные";
        }
        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }


        foreach ($arr_data as $value) {
            $i = 0;
            if (preg_match('/9PM/', $value[$i])) {
                $project = "9PM";
            } elseif (preg_match('/MS/', $value[$i])) {
                $project = "MS";
            } else {
                $project = "9PM";
            }
            $model = trim(str_replace('"', '', str_replace($project, '', $value[$i])));

            $phone_arr = explode("\n", $value[$i + 1]);
            $phone1 = trim(str_replace('"', '', $phone_arr[0]));
            $phone2 = trim(str_replace('"', '', $phone_arr[1]));

            $text = trim(str_replace("\r\n", '', $value[$i + 2]));
            $price = trim($value[$i + 3]);

            $date_1_arr = explode(".", $value[$i + 4]);
            $date_2_arr = explode(".", $value[$i + 5]);

            $date_1 = $date_1_arr[2] . "-" . $date_1_arr[1] . "-" . $date_1_arr[0];
            $date_2 = $date_2_arr[2] . "-" . $date_2_arr[1] . "-" . $date_2_arr[0];
            $comment = trim($value[$i + 6]);


            if (!empty($phone2)) {
                $sql_phone_2 = "OR phone LIKE '%{$phone2}%'";
            }


            $sql = "SELECT model_id FROM `sklad_shipment` WHERE (phone LIKE '%{$phone1}%' {$sql_phone_2}) AND `model`='{$model}' AND `date_1`='{$date_1}'
                    AND model_id NOT IN(SELECT model_id FROM `sklad_coming_money`) 
                    ORDER BY `date_insert` ASC";

            if (!$model_id = $this->DB->simpleQuery($sql)->fetch_row()) {
                return json_encode(array("result" => 0, "text" => "Отправки не было или Оплата уже зарегистрирована<b>$model</b> ($phone1 - $text) ( <b>Обратите Внимание, данные не добавлены</b>)"));
            }
            $model_id = $model_id[0];
            $phone = $phone1 . " " . $phone2;
            $insert_sql = "(NULL,'{$this->timestamp}','{$model}','{$model_id}','{$phone}','{$project}','{$text}','{$price}','{$date_1}','{$date_2}','{$comment}')";
            $sql_ins[] = "INSERT INTO {$table_name} (`id`, `date_insert`, `model`,`model_id`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`comment`) VALUES {$insert_sql}";
            $model_id_arr[] = $model_id;
            $model_arr[$model] = array('TEXT' => $text, 'PROJECT' => $project);

        }
        $error = false;
        foreach ($sql_ins as $value_sql) {
            if ($this->DB->insert($value_sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');
            } else {
                $model_id_sql = implode(",", $model_id_arr);
                $sql = "DELETE FROM {$table_name} WHERE model_id IN({$model_id_sql})";
                $this->logSql($table_name, $this->timestamp, 'delete');
                $this->DB->simpleQuery($sql);
                $error = true;
            }
        }

        if ($error) {
            return json_encode(array("result" => 0, "text" => $sql_ins . "<br>" . $value_sql . "<br>" . $sql));
        }

        $count_string = count($sql_ins);


        /***********send mail instagramm*******************/

        foreach ($model_arr as $model => $value_arr) {

            $arr = explode(" ", $value_arr['TEXT']);

            $email = "";
            foreach ($arr as $value) {

                if ($email = filter_var(preg_replace('#[^0-9A-Za-z.@]#', '', $value), FILTER_VALIDATE_EMAIL))
                    break;
            }

            if (!empty($email)) {
                if ($value_arr['PROJECT'] == 'MS') {
                    $this->sendMailInstargammKW($email);
                }
//                elseif($value_arr['PROJECT']=='TT') {
//                    $this->sendMailInstargammTT($email);
//                }
            }
        }

        /***********send mail instagramm*******************/


        return json_encode(array("result" => 1, "text" => "Добавлено {$count_string} позиций(я)"));
    }

    private function setDiscard()
    {

        /**
         * Брак доступен везде. (если я оформил брак по проданной позиции,
         * это означает и возврат и брак одновременно, но то есть как бы сначала
         * сделали возврат а потом отбраковали, но все сразу)
         */
        $table_name = "`sklad_discard`";
        if (empty($this->model_id))
            return "Не указана модель";

        if ($this->getSaleOrShipment()) {
            $this->setReturn();
        }

        $sql = "INSERT INTO {$table_name} (`id`,`date_insert`,`model_id`, `comment`) VALUES (NULL,'{$this->timestamp}','{$this->model_id}','{$this->data}')";

        if ($this->DB->insert($sql)) {
            $this->logSql($table_name, $this->timestamp, 'insert');

            return 1;
        } else {
            return $this->DB->error();
        }
    }

    /**
     * Проверяем продавали или отправля товар
     *
     * @param $model_id
     *
     * @return bool
     */
    private function getSaleOrShipment()
    {
        $sql = "SELECT id FROM `sklad_sales` WHERE `model_id`=$this->model_id";
        $sql_shipment = "SELECT id FROM `sklad_shipment` WHERE `model_id`=$this->model_id";
        if ($this->DB->selectCell($sql)) {
            return true;
        } elseif ($this->DB->selectCell($sql_shipment)) {
            return true;
        } else {
            return false;
        }
    }

    private function setReturn()
    {
        $table_name = "`sklad_return`";
        if (empty($this->model_id))
            return "Не указана модель";

        $sql = "SELECT 
                if(SS.model_id,SS.phone,if(SSH.model_id,SSH.phone,if(SCM.model_id,SCM.phone,NULL))) as phone
                FROM `sklad_coming`as SC
                LEFT JOIN `sklad_sales` as SS ON SS.model_id=SC.id
                LEFT JOIN `sklad_shipment` as SSH ON SSH.model_id=SC.id
                LEFT JOIN `sklad_coming_money` as SCM ON SCM.model_id=SC.id
                WHERE SC.id={$this->model_id}";
        $phone = $this->DB->selectCell($sql);
        if (!$this->getReturn()) {
            $sql = "INSERT INTO {$table_name} (`id`,`date_insert`,`model_id`, `comment`,`phone`) VALUES (NULL,'{$this->timestamp}','{$this->model_id}','{$this->data}','{$phone}')";

            if ($this->DB->insert($sql)) {
                $this->logSql($table_name, $this->timestamp, 'insert');

                $sql_delete = "DELETE FROM `sklad_sales` WHERE `model_id` = {$this->model_id}";
                $this->DB->delete($sql_delete);
                $this->logSql('`sklad_sales`', $this->timestamp, 'delete');

                $sql_delete = "DELETE FROM `sklad_shipment` WHERE `model_id` = {$this->model_id}";
                $this->DB->delete($sql_delete);
                $this->logSql('`sklad_shipment`', $this->timestamp, 'delete');

                $sql_delete = "DELETE FROM `sklad_coming_money` WHERE `model_id` = {$this->model_id}";
                $this->DB->delete($sql_delete);
                $this->logSql('`sklad_coming_money`', $this->timestamp, 'delete');

                return json_encode(array("result" => 1, "text" => "Успешно"));
            } else {
                return $this->DB->error();
            }
        } else {
            return 'Позиция уже имеет статус возврата';
        }
    }

    private function getReturn()
    {
        $sql = "SELECT id FROM `sklad_return` WHERE `model_id`=$this->model_id";
        if ($this->DB->selectCell($sql)) {
            return true;
        } else {
            return false;
        }
    }

    private function getKernelTable()
    {
        $result = "";
        if($_SERVER['REMOTE_USER'] != 'sklad'){
            return $this->getKernelTableForManager();
        }
        $sql = "SELECT 
           
                SC.brand,
                SD.comment AS comment_discard,
            
                SD.date_insert AS model_dicard_date_insert, 
                SC.id,
            
                SC.provider, 
                SC.date_insert, 
                SS.text, 
                SS.model_id, 
                SS.pay_card,
                SS.courier_name,
                if(SS.phone,SS.phone,(SELECT phone FROM `sklad_return` WHERE model_id = SC.id))  AS phone, 
                SS.date_insert AS date_1, 
                SSH.date_insert AS date_1_1, 
                SS.project, 
                SS.price, 
                SSH.model AS model_out,
                SSH.phone AS ship_phone,
                SSH.price AS ship_price,
                SSH.project AS ship_project,
                SCM.phone AS scm_phone,
      
                IF(SS.model_id, 1, 0 ) AS sale,
                IF(SCM.model_id, 1, 0 ) AS coming_money,
                    
               SC.sort,
                IF(SS.model_id OR SCM.model_id,1, 0) AS sale_sort,
                SD.model_id AS model_dicard,
                IF(SSH.model_id IS NOT NULL AND SCM.model_id IS NULL , 1,0) AS debet_sort,
                IF(SSH.model_id, 1,0) AS debet,
               SC.model

               
                FROM  `sklad_coming` AS SC
                LEFT JOIN `sklad_sales` AS SS ON SC.id = SS.model_id
                LEFT JOIN `sklad_shipment` AS SSH ON SC.id = SSH.model_id
                LEFT JOIN `sklad_discard` AS SD ON SC.id = SD.model_id
                LEFT JOIN `sklad_coming_money` AS SCM ON SSH.model_id = SCM.model_id
                ORDER BY SC.sort ASC, sale_sort DESC, model_dicard DESC, debet_sort DESC, model ASC 
                ";
        $result_db_arr = $this->DB->select($sql);

        $result = "
            <thead>
    <tr>
        <th>Часы</th>
        <th>Приход</th>
        <th>Склад</th>
        <th>Ушло со склада</th>
        <th>Клиент</th>
        <th>Проект</th>
        <th>Оплата картой</th>
        <th>Примечание</th>
         <th>Курьер</th>
        <th>Поставщик</th>
        <th>Отправка</th>
        <th>Дата прихода</th>
        <th>Дата ухода</th>
    </tr>
    </thead>
    <tbody>
 
        ";
//        <th>Часы</th>
//        <th>Приход</th>
//        <th>Склад</th>
//        <th>Ушло со склада</th>
//        <th>Клиент</th>
//        <th>Примечание</th>
//        <th>Проект</th>
//        <th>Поставщик</th>
//        <th>Отправка</th>
//        <th>Дата прихода</th>
//        <th>Дата ухода</th>
        $all_sum = 0;
        $out_full = 0;
        $all_count = 0;
        $brand = "";
        $new_brand = false;
        foreach ($result_db_arr as $value) {
            $style = "";
            $dop_style = "";
            $comment = "";
            $out = "";
            $add_class = "";
            if ($brand != $value["brand"]) { //выводим разделитель бренд
                $brand = $value["brand"];
                $new_brand = true;
            } else {
                $brand = $value["brand"];
                $new_brand = false;
            }


            if (!is_null($value["model_out"])) {
                $out = 1;
            } else {
                $out = "";
            }


            if (!empty($value["ship_project"])) {
                $value["project"] = $value["ship_project"];
            }

            if (!empty($value["ship_price"])) {
                $value['price'] = $value["ship_price"];
            }

            if ($value["debet"] AND !$value["coming_money"]) {
                $value['price'] = "дебет " . $value['price'];
                $shipment = 1;
                $style = 'style="background:#ffff00"';
                $add_class = " shipment";
            } elseif ($value["coming_money"] OR $value["sale"]) {
                $out = 1;
                $shipment = 0;
                $style = 'style="background:#FFCCCC"';
                $add_class = " sale";
                $all_sum += $value['price'];
            } else {
                $shipment = 0;
            }

            if ($value["model_dicard"]) {
                $value['price'] = "брак";
                $out = 1;
                $comment = $value['comment_discard'];

                $style = 'style="background:orange"';
                $dop_style = 'style="background:white"';
                if (!$value['phone'])
                    $value['phone'] = "Брак";

                $add_class = " discard";
            } else {
                $comment = "";
            }


            $date = date("d.m.Y", strtotime($value["date_insert"]));
            if (!empty($value['date_1'])) {
                $date1 = date("d.m.Y", strtotime($value['date_1']));
            } elseif (!empty($value['date_1_1'])) {
                $date1 = date("d.m.Y", strtotime($value['date_1_1']));
            } elseif (!empty($value['model_dicard_date_insert'])) {
                $date1 = date("d.m.Y", strtotime($value['model_dicard_date_insert']));
            } else {
                $date1 = "";
            }


            if (!empty($value['ship_phone'])) {
                $value['phone'] = $value['ship_phone'];
            }

            if (!empty($value['scm_phone'])) {
                $value['phone'] = $value['scm_phone'];
            }

            if ($new_brand) {
                $result .= "<tr><td colspan='13' style='font-size: 14px'><b>{$brand}</b></td></tr>";
            }

            if (!empty($value['phone'])) {
                $orange = 'style="background:orange"';
            } else {
                $orange = "";
            }

            if ($value["pay_card"] == 1) {
                $pay_card = "да";
            } else {
                $pay_card = "";
            }

            $out_full += $out;
            $all_count++;
            if ($value['courier_name'] == "0")
                $value['courier_name'] = "";
            $result .= "
                    <tr {$style} id=\"{$value['id']}\" class=\"{$add_class}\">
                    <td>{$value['model']}</td>
                    <td>{$value['price']}</td>
                    <td>1</td>
                    <td>{$out}</td>
                    <td {$orange} data-toggle=\"tooltip\" data-placement=\"right\" title='" . $value['text'] . "'>{$value['phone']}</td>
                    <td style=\"background:white\">{$value['project']}</td>
                    <td style=\"background:white\">{$pay_card}</td>
                    <td style=\"background:white\">{$comment}</td>
                    <td>{$value['courier_name']}</td>
                    <td>{$value['provider']}</td>
                    <td>{$shipment}</td>
                    <td>{$date}</td>
                    <td>{$date1}</td>
                    </tr>";

        }
        $all_sum = number_format(round($all_sum), 0, '', ' ') . " руб.";

        $result .= "</tbody>
                   <tfoot><tr style='font-weight: bold; font-size: 15px;text-align: center'>
                    <td>ИТОГО</td>
                    <td>$all_sum</td>
                    <td>$all_count</td>
                    <td>$out_full</td>
                    </tr></tfoot>";

        return $result;
    }


    private function getKernelTableForManager(){
        ?>



        <?
        $arr = $this->getLastInsert();
        $table = '<table class="table table-striped table-bordered table-hover">';

        foreach ($arr as $key_f => $value) {
            foreach ($value as $res_arr) {
                $color_class = "";

                if ($key == "sklad_refusals")
                    $color_class = "refusals";

                if ($key == "sklad_problems")
                    $color_class = "problems";

                if ($key == "sklad_other")
                    $color_class = "other";

                if ($key == "sklad_shipment")
                    $color_class = "yellow";

                $table .= '
	<tr class="' . $color_class . '">
		<td>' . $res_arr["project"] . '</td>
		<td style="border-top:none;border-bottom:none"></td>

		<td class="nowrap">
			' . $res_arr["model"] . '

		</td>
		<td>
			' . $res_arr["phone"] . '
		</td>
		<td>
			' . $res_arr["text"] . '
		</td>
		<td>
			' . $res_arr["price"] . '
		</td>
		<td class="nowrap">
			' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
		</td>
		<td class="nowrap">
			' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
		</td>
		</td>
		<td>
			' . $res_arr["comment"] . '
		</td>

	</tr>';
            }
        }
        $table .="</table>";
        return $table;
    }

    function getDateLastReOrder()
    {
        $sql = "SELECT DATE_FORMAT(`date_reordering`, '%d.%m.%Y %H:%i') AS date  FROM `sklad_reordering` ORDER BY id DESC LIMIT 1";
        $arr = $this->DB->simpleQuery($sql)->fetch_array();

        return $arr["date"];
    }

    private function getAutoUpdateStatus()
    {
        $sql = "SELECT value FROM `sklad_settings` WHERE `setting` =  'auto_update'";

        return $this->DB->selectCell($sql);

    }

    private function setAutoUpdateStatus()
    {
        $sql = "UPDATE `sklad_settings` SET  `value` =  '{$this->data}' WHERE `setting` =  'auto_update'";
        if ($this->DB->update($sql))
            return 1;
        else
            return $sql;
    }

    private function editPosition()
    {

        /*
         * Проверяем, что позиция не была продана
         */

        $sql = "SELECT id FROM `sklad_coming` WHERE 
                    id NOT IN (SELECT `model_id` FROM `sklad_shipment`) 
                    AND id NOT IN (SELECT `model_id` FROM `sklad_sales`) 
                    AND id NOT IN (SELECT `model_id` FROM `sklad_discard`) 
                    AND  `id`='{$this->model_id}'";

        if ($this->DB->selectCell($sql)) {
            $model_prefix = preg_replace("/[^A-Za-z]/", '', $this->data);

            switch ($model_prefix) {
                case 'AR':
                    $sort = 10;
                    $brand = "Emporio Armani";
                    break;
                case 'MK':
                    $sort = 20;
                    $brand = "Michael Kors";
                    break;
                case 'NY':
                    $sort = 30;
                    $brand = "DKNY";
                    break;
                case 'MBM':
                    $sort = 40;
                    $brand = "Marc Jacobs";
                    break;
                case 'DW':
                    $sort = 50;
                    $brand = "Daniel Wellington";
                    break;
                case 'DZ':
                    $sort = 60;
                    $brand = "Diesel";
                    break;
                default:
                    $sort = 100;
                    $brand = "Прочие бренды";
            }


            $sql = "UPDATE `sklad_coming` SET `model` =  '{$this->data}',`sort`={$sort},`brand`='{$brand}' WHERE `id` ={$this->model_id}";
            if ($this->DB->update($sql)) {
                return 1;
            } else {
                return $sql;
            }
        } else {
            return "Данную позицию нельзя изменять";
        }
    }

    private function editPositionPrice()
    {

        /*
         * Проверяем, что позиция не была продана
         */


        $sql = "UPDATE `sklad_shipment` SET `price` = '{$this->data}' WHERE `model_id` ={$this->model_id}";
        if ($this->DB->update($sql)) {
            return 1;
        } else {
            return $sql;
        }

    }

    private function closeSklad()

    {

        system('/usr/bin/mysqldump -u root -pcArIaU4R --opt --complete-insert zakaz1234 |  gzip > /home/bitrix/www/crm/m//sklad/close_sklad_sql/zakaz1234_`date +\%d-\%m-\%Y`.sql.gz');

        ///переносим для search/
        $query = "INSERT INTO `sklad_all_orders` 
                 (`id`, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`comment`) 
                                                
                 SELECT * FROM (
                            SELECT NULL, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`comment` FROM `sklad_sales`
                            UNION ALL  
                            SELECT NULL, `model`, `phone`,`project`, `text`, `price`, `date_1`, `date_2`,`comment` FROM `sklad_coming_money`
                     ) AS glb";


        $this->DB->simpleQuery($query);

        ///переносим для search/


        $this->data = "";
        $sql1 = "DELETE FROM `sklad_coming` WHERE `id` IN (SELECT model_id FROM sklad_sales)"; //удаляем со склад проданные

        $sql2 = "TRUNCATE sklad_sales";
//-------------------------------------------
        $sql3 = "DELETE FROM `sklad_coming` WHERE `id` IN (SELECT model_id FROM sklad_coming_money)"; //удаляем со склад проданные за которые пришли деньги

        $sql4 = "DELETE FROM `sklad_shipment` WHERE `model_id` IN (SELECT model_id FROM sklad_coming_money)"; //удаляем из отправленных проданные за которые пришли деньги

        $sql5 = "TRUNCATE sklad_coming_money";


//-------------------------------------------
        $sql6 = "DELETE FROM `sklad_coming` WHERE `id` IN (SELECT model_id FROM sklad_discard)"; //удаляем со склада отбракованные

        $sql7 = "TRUNCATE sklad_discard";

//--------------------------------------------//обнуляем ЗП курьерам
        $sql8 = "TRUNCATE sklad_courier_price";
//--------------------------------------------

        $this->data .= "<table>";
        $this->data .= $this->action('getKernelTable');
        $this->data .= "</table>";
        $this->data = base64_encode($this->data);
        $date_to = date("d.m.Y H:i:00");
        $date_from = $this->getDateLastReOrder();
        $save_reorder_json = json_encode($this->reOrder(false, $date_from, $date_to));

        $save_statistics = base64_encode(file_get_contents('http://sklad:132449@crm.monarchshop.ru/m/sklad/statistic.php')); //сохраняем статистику
        $save_ExecutedOrders = base64_encode($this->getExecutedOrders()); //сохраняем выполненые заказы
        $save_refusals = base64_encode($this->getRefusals()); //сохраняем отказы
        $save_problems = base64_encode($this->getProblems()); //сохраняем проблеммы
        $save_other = base64_encode($this->getOther()); //сохраняем разное


        $sql = "INSERT INTO `sklad_close` (`id`, `date_insert`, `base64`,`save_reorder_json`,`save_statistics`,`sales`,`refusals`,`problems`,`other`)
                 VALUES (NULL, '{$this->timestamp}', '{$this->data}','{$save_reorder_json}','{$save_statistics}','{$save_ExecutedOrders}','{$save_refusals}','{$save_problems}','{$save_other}')";
        if ($this->DB->simpleQuery($sql)) {
            $this->DB->simpleQuery($sql1);
            $this->DB->simpleQuery($sql2);
            $this->DB->simpleQuery($sql3);
            $this->DB->simpleQuery($sql4);
            $this->DB->simpleQuery($sql5);
            $this->DB->simpleQuery($sql6);
            $this->DB->simpleQuery($sql7);
            $this->DB->simpleQuery($sql8);

            $sql = "SELECT `id` FROM  `sklad_close` ORDER BY  `sklad_close`.`id` DESC LIMIT 1";

            return $this->DB->selectCell($sql);
        } else {
            return "Ошибка закрытия месяца" . $sql;
        }
    }

    function reOrder($save, $date_from, $date_to)
    {


        $sql = "SELECT model,provider,f.date_insert FROM (
                SELECT model_id,date_insert FROM `sklad_sales`
                UNION ALL
                SELECT model_id,date_insert FROM `sklad_coming_money`
                UNION ALL 
                SELECT model_id,date_insert FROM `sklad_discard`
                ) as f
                      INNER JOIN sklad_coming as SC on SC.id=f.model_id
                WHERE f.date_insert
                BETWEEN STR_TO_DATE('{$date_from}', '%d.%m.%Y %H:%i' ) 
                AND STR_TO_DATE('{$date_to}', '%d.%m.%Y %H:%i' )     
                      ";
        $arr = $this->DB->simpleQuery($sql);

        while ($res = $arr->fetch_row()) {
            $arr_out[] = $res;
        }
        /**
         * Ну типа того. За прошлый месяц продали X, Y и Z. За новый X и W к моменту дозаказа.
         * При закрытии месяца запоминаются данные X, Y, Z. В момент дозаказа запомненные X, Y, Z
         * складываются с X, W. Получается к дозаказу:
         * X
         * X
         * Y
         * Z
         * W
         */

        $sql = "SELECT `save_reorder_json` FROM `sklad_close` WHERE `date_insert` BETWEEN STR_TO_DATE('{$date_from}', '%d.%m.%Y %H:%i' ) 
                AND STR_TO_DATE('{$date_to}', '%d.%m.%Y %H:%i' ) ORDER BY `date_insert` DESC LIMIT 1";
        $arr = $this->DB->simpleQuery($sql);
        while ($res_arr = $arr->fetch_row()) {
            $arr1 = json_decode($res_arr[0], true);
            foreach ($arr1 as $value) {
                $arr_out[] = $value;
            }
        }

        if ($save) {
            $json = json_encode($arr_out);
            $sql = "INSERT INTO `sklad_reordering` (`id`, `date_reordering`,`json_elements`) VALUES (NULL, STR_TO_DATE('{$date_to}', '%d.%m.%Y %H:%i'),'{$json}')";
            if (!$this->DB->simpleQuery($sql))
                return "По данной дате уже есть дозаказ";
        }

        return $arr_out;

    }

    /**
     *Получаем все выполненые заказы
     */
    public function getExecutedOrders()
    {
        $skk = new WorkINGlobalDB();
        $out_table = "";
        $all_orders = $skk->getEventTableCnt();
        $ids = array();


        $not_make_orders = array_diff($all_orders, $this->getSalesFromDate($skk->date_from));

        foreach ($not_make_orders as $key => $value) {
            $ids[] = $key;
        }

        $ordersSales = $this->getOrdersByIdSales($ids);

        foreach ($ordersSales as $key => $res_arr) {
            $out_table .= '   
                        <tr>
                        
                            <td class="nowrap">
                    ' . $res_arr["model"] . '<br>' . $res_arr["project"] . '
                    
                     </td>
                            <td>
                    ' . $res_arr["phone"] . '
                     </td>
                            <td>
                    ' . $res_arr["text"] . '
                     </td>
                            <td>
                    ' . $res_arr["price"] . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
                    </td>
                     </td>
                            <td>
                    ' . $res_arr["comment"] . '
                    </td>
               
                    </tr>';
        }

        unset($ids);
        $not_make_orders = array_diff($all_orders, $this->getComMoneyFromDate($skk->date_from));

        foreach ($not_make_orders as $key => $value) {
            $ids[] = $key;
        }

        $ordersSales = $this->getOrdersByIdComingMoney($ids);

        foreach ($ordersSales as $key => $res_arr) {
            $out_table .= '   
                        <tr>
                        
                            <td class="nowrap">
                    ' . $res_arr["model"] . '<br>' . $res_arr["project"] . '
                    
                     </td>
                            <td>
                    ' . $res_arr["phone"] . '
                     </td>
                            <td>
                    ' . $res_arr["text"] . '
                     </td>
                            <td>
                    ' . $res_arr["price"] . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
                    </td>
                     </td>
                            <td>
                    ' . $res_arr["comment"] . '
                    </td>
               
                    </tr>';
        }


        return '<table>' . $out_table . '</table>';
    }

    public function getSalesFromDate($date)
    {
        $arr_out = array();
        $sql = "SELECT `text` FROM `sklad_sales` WHERE `date_insert` > '{$date}'";

        $arr = $this->DB->selectCol($sql);
        foreach ($arr as $value) {
            preg_match('/№[0-9A-Z]{1,10}/', $value, $res_arr);
            if (count($res_arr) > 0) {
                $arr_out[] = str_replace("№", "", $res_arr[0]);
            }
        }

        return $arr_out;
    }

    private function getOrdersByIdSales($id = array())
    {
        if (empty($id))
            return array();
        $ids = implode(',', $id);
        $query = "SELECT * FROM `sklad_sales` WHERE `id` IN ({$ids}) ORDER BY `id`";

        return $this->DB->select($query);

    }

    public function getComMoneyFromDate($date)
    {

        $arr_out = array();
        $sql = "SELECT `text`  FROM `sklad_coming_money` WHERE `date_insert` > '{$date}'";

        $arr = $this->DB->selectCol($sql);
        foreach ($arr as $value) {
            preg_match('/№[0-9A-Z]{1,10}/', $value, $res_arr);
            if (count($res_arr) > 0) {
                $arr_out[] = str_replace("№", "", $res_arr[0]);
            }
        }

        return $arr_out;
    }

    private function getOrdersByIdComingMoney($id = array())
    {
        if (empty($id))
            return array();
        $ids = implode(',', $id);
        $query = "SELECT * FROM `sklad_coming_money` WHERE `id` IN ({$ids}) ORDER BY `id`";

        return $this->DB->select($query);

    }

    /**
     * @return string
     * Получаем отказы
     */
    private function getRefusals()
    {
        $out_table = "";
        $date_from = $this->getLastDateCloseSklad();
        $query = "SELECT * FROM `sklad_refusals` WHERE `date_insert` > '{$date_from}'";

        $refusals = $this->DB->select($query);

        foreach ($refusals as $key => $res_arr) {
            $out_table .= '   
                        <tr>
                        
                            <td class="nowrap">
                    ' . $res_arr["model"] . '<br>' . $res_arr["project"] . '
                    
                     </td>
                            <td>
                    ' . $res_arr["phone"] . '
                     </td>
                            <td>
                    ' . $res_arr["text"] . '
                     </td>
                            <td>
                    ' . $res_arr["price"] . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
                    </td>
                     </td>
                            <td>
                    ' . $res_arr["comment"] . '
                    </td>
               
                    </tr>';
        }

        return '<table>' . $out_table . '</table>';
    }

    /**
     * @return string
     * получаем последнюю дату закрытия склада
     */
    public function getLastDateCloseSklad()
    {
        $sql = "SELECT date_insert FROM `sklad_close` ORDER BY `date_insert`  DESC LIMIT 1";

        return $this->DB->selectCell($sql);
    }

    /**
     * @return string
     * Получаем проблеммы
     */
    private function getProblems()
    {
        $out_table = "";
        $date_from = $this->getLastDateCloseSklad();
        $query = "SELECT * FROM `sklad_problems` WHERE `date_insert` > '{$date_from}'";

        $refusals = $this->DB->select($query);

        foreach ($refusals as $key => $res_arr) {
            $out_table .= '   
                        <tr>
                        
                            <td class="nowrap">
                    ' . $res_arr["model"] . '<br>' . $res_arr["project"] . '
                    
                     </td>
                            <td>
                    ' . $res_arr["phone"] . '
                     </td>
                            <td>
                    ' . $res_arr["text"] . '
                     </td>
                            <td>
                    ' . $res_arr["price"] . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
                    </td>
                     </td>
                            <td>
                    ' . $res_arr["comment"] . '
                    </td>
               
                    </tr>';
        }

        return '<table>' . $out_table . '</table>';
    }

    /**
     * @return string
     *  Получаем Прочее
     */
    private function getOther()
    {
        $out_table = "";
        $date_from = $this->getLastDateCloseSklad();
        $query = "SELECT * FROM `sklad_other` WHERE `date_insert` > '{$date_from}'";

        $refusals = $this->DB->select($query);

        foreach ($refusals as $key => $res_arr) {
            $out_table .= '   
                        <tr>
                        
                            <td class="nowrap">
                    ' . $res_arr["model"] . '<br>' . $res_arr["project"] . '
                    
                     </td>
                            <td>
                    ' . $res_arr["phone"] . '
                     </td>
                            <td>
                    ' . $res_arr["text"] . '
                     </td>
                            <td>
                    ' . $res_arr["price"] . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_1"])) . '
                     </td>
                            <td class="nowrap">
                    ' . date('d.m.Y', strtotime($res_arr["date_2"])) . '
                    </td>
                     </td>
                            <td>
                    ' . $res_arr["comment"] . '
                    </td>
               
                    </tr>';
        }

        return '<table>' . $out_table . '</table>';
    }

    private function closeSkladLog()
    {
        $sql = "SELECT * FROM (SELECT id,DATE_FORMAT(`date_insert`, '%d.%m.%Y %H:%i') AS date_insert,type FROM (SELECT id,date_insert,'SC' AS type FROM `sklad_close` 
                UNION ALL
                SELECT id,date_insert,'SFEL' AS type FROM `sklad_full_export_log`) AS q
)AS qq
    ORDER BY STR_TO_DATE(`date_insert`,'%d.%m.%Y %H:%i') DESC";

        return $this->DB->simpleQuery($sql);
    }

    private function getCloseSkladOne()
    {
        $type = $this->model_id;
        if ($type == "SC") {
            $sql = "SELECT base64,date_insert FROM `sklad_close` WHERE id = {$this->data}";
        } elseif ($type == "SFEL") {
            $sql = "SELECT base64,date_insert FROM `sklad_full_export_log` WHERE id = {$this->data}";
        } else {
            $sql = "SELECT * FROM  `sklad_close`   WHERE id = {$this->data}";
        }


        return $this->DB->selectRow($sql);
    }

    private function setSkladFullExportLog()
    {
        $this->data .= "<table>";
        $this->data .= $this->action('getKernelTable');
        $this->data .= "</table>";
        $this->data = base64_encode($this->data);
        $sql = "INSERT INTO `sklad_full_export_log` (`id`, `date_insert`, `base64`) VALUES (NULL, '{$this->timestamp}', '{$this->data}')";
        if ($this->DB->simpleQuery($sql))
            return 1;
        else
            return 0;
    }

    private function genAutoUpdateFiles()
    {

        $sql = "SELECT value FROM `sklad_settings` WHERE `setting` =  'auto_update'";
        if ($this->DB->selectCell($sql)) {
            $sql = "SELECT model FROM `sklad_coming`
                WHERE
 				id NOT IN(SELECT model_id FROM sklad_sales) AND 
                id NOT IN(SELECT model_id FROM sklad_shipment) AND 
                id NOT IN(SELECT model_id FROM sklad_discard)
                GROUP BY model";
            $full_path = __DIR__ . "/../autoload/upload/" . $this->data;
            $fp = fopen($full_path, 'w');
            $list = $this->DB->select($sql);
            foreach ($list as $fields) {
                fputcsv($fp, $fields);
            }
            fclose($fp);

            return 1;
        } else {
            return 'Выключено';
        }

    }

    private function saveItogo()
    {

        $price = str_replace(" ", "", $this->data);
        $query = "UPDATE `sklad_other_save` SET  `value` =  '{$price}' WHERE  `sklad_other_save`.`param` =  'saveItogo'";
        $this->DB->update($query);
    }

//    private function sendMailInstargammTT($email)
//    {
//        file_get_contents("http://trade-time.ru/api/?paid=1&auth=XDFDD3e45fvsdfvvfg4&email={$email}");
//    }

    private function setCourierList()
    {

        $query = "TRUNCATE sklad_courier";
        $this->DB->simpleQuery($query);

        foreach ($this->data as $key => $value) {
            if (empty($value))
                continue;
            $key_plus = $key + 1;
            $query = "INSERT INTO `sklad_courier` (`id`, `name`) VALUES ({$key_plus}, '{$value}')";
            if (!$this->DB->simpleQuery($query)) {
                return json_encode(array("result" => 0, "text" => "{$this->DB->error()}"));
            }
        }

        return json_encode(array("result" => 1, "text" => "Успешно"));
    }

    public function getParcingCourier()
    {
        $this->logTextInsert();
        $t = 0;
        $massiv = 0;
        $model_id_arr[] = 0;
        $arr_strings = explode(chr(9), $this->data);
        $func = function ($value) {
            return str_replace("\r\n", "", $value);
        };

        array_map($func, $arr_strings);

        $check_date_4 = explode(".", $arr_strings[9]);
        $check_date_5 = explode(".", $arr_strings[10]);
        $check_date_6 = explode(".", $arr_strings[11]);
        if (count($arr_strings) == 6 OR count($arr_strings) == 7) {
            $count_cols = count($arr_strings) - 1;
        } elseif (!checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])
            && checkdate($check_date_4[1], $check_date_4[0], $check_date_4[2])
        ) {
            $count_cols = 5;
        } elseif (checkdate($check_date_6[1], $check_date_6[0], $check_date_6[2]) && checkdate($check_date_5[1], $check_date_5[0], $check_date_5[2])) {
            $count_cols = 6;
        } else {
            return json_encode(array("result" => 0, "text" => "Проверьте вставляемые данные"));
        }


        foreach ($arr_strings as $el) {

            if ($t == $count_cols) {
                $arr_out = str_getcsv($el, PHP_EOL, '"');

                $t = 0;
                if (count($arr_out) > 1) {
                    $massiv++;
                    $arr_data[$massiv][] = $arr_out[1];
                    $arr_data[$massiv - 1][] = $arr_out[0];
                } else {
                    $arr_data[$massiv][] = $arr_out[0];
                }
            } else {
                $arr_data[$massiv][] = $el;
            }
            $t++;

        }


        foreach ($arr_data as $value) {

            $courier_string = str_replace("\n", " ", $value[count($value) - 1]);
            $courier_string = str_replace("\r\n", " ", $courier_string);
            $courier_string = str_replace("\r", " ", $courier_string);


            $courier_name_arr[$this->getCourierByText($courier_string)] = $this->getCourierByText($courier_string);
        }

        return json_encode(array("result" => 1, "data" => $courier_name_arr));

    }

    function getDateReOrderAll()
    {
        $sql = "SELECT DATE_FORMAT(`date_reordering`, '%d.%m.%Y %H:%i') AS date,id  FROM `sklad_reordering` ORDER BY id DESC LIMIT 10";
        $arr = $this->DB->simpleQuery($sql);

        while ($res = $arr->fetch_assoc()) {
            $arr_out[] = $res;
        }

        return $arr_out;
    }

    function getOneReorder($id)
    {
        $sql = "SELECT `json_elements` FROM `sklad_reordering` WHERE id = {$id} LIMIT 1";
        $arr = $this->DB->selectCell($sql);

        return json_decode($arr, true);
    }

    public function insertInvent($data)
    {
        $query = "SELECT MIN(id) AS id,count(*) AS cnt FROM `sklad_log_invent`";
        $el = $this->DB->selectRow($query);


        $query = "INSERT INTO `sklad_log_invent` (`id`, `text`, `date`) VALUES (NULL, '{$data}', CURRENT_TIMESTAMP)";
        $this->DB->insert($query);

        if ($el["cnt"] >= 3) {
            $query = "DELETE FROM `sklad_log_invent` WHERE `sklad_log_invent`.`id` = {$el["id"]}";
            $this->DB->delete($query);
        }

    }

    public function selectInvent()
    {
        $query = "SELECT DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') AS date_insert,id FROM `sklad_log_invent`";

        return $this->DB->simpleQuery($query);
    }

    public function getInvent($id)
    {
        $query = "SELECT text FROM `sklad_log_invent` WHERE id = {$id}";

        return $this->DB->selectCell($query);
    }

    public function getSaveItogo()
    {
        $query = "SELECT value FROM `sklad_other_save` WHERE `param` =  'saveItogo'";

        return $this->DB->selectCell($query);
    }

    private function getDiscard()
    {
        $sql = "SELECT id FROM `sklad_discard` WHERE `model_id`=$this->model_id";
        if ($this->DB->selectCell($sql)) {
            return true;
        } else {
            return false;
        }
    }
    /**
     *Последняя вставка
     */
    public function getLastInsert(){

        $query = "SELECT `table_name`,`date` FROM `sklad_logging_sql` WHERE `type` = 'insert' AND `table_name` IN('`sklad_sales`','`sklad_shipment`','`sklad_refusals`','`sklad_problems`','`sklad_other`','`sklad_coming_money`') ORDER BY id DESC";
        $arr_row = $this->DB->selectRow($query);

        $query = "SELECT * FROM {$arr_row["table_name"]} WHERE `date_insert` = '{$arr_row["date"]}'";

        $arr = $this->DB->simpleQuery($query);
        while ($res = $arr->fetch_assoc()) {
            $arr_out[$arr_row["table_name"]][] = $res;
        }

        return $arr_out;
    }

}