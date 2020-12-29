<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 17.01.17
 * Time: 10:26
 * При занесении в склад отправок, формируются смс-сообщения клиентам и отправляются в следующем виде:
 *
 * 1. на заказ1324.
 *
 * для ДПДшек WT:
 *
 * Здравствуйте, Светлана Николаевна.
 *
 * Ваш заказ, часы Michael Kors MK5735, был отправлен сервисом экспресс-доставки DPD.
 * Номер отправления - 01162587MOW.
 * Отследить посылку можно на сайте DPD http://www.dpd.ru
 *
 * Телефон DPD: 88005554585
 *
 * Наш телефон: (495) 646-07-38
 * Спасибо за обращение в monarchshop.ru
 *
 * для СПСР от WT:
 *
 * Здравствуйте, Юрий.
 *
 * Ваш заказ, часы Anne Klein 1950RGTP, был отправлен сервисом экспресс-доставки СПСР.
 * Номер отправления - 201630201762.
 * Отследить посылку можно на сайте СПСР www.spsr.ru/ru/service/monitoring
 *
 * Телефон СПСР: 88005555445
 * Наш телефон: (495) 646-07-38
 *
 * Спасибо за обращение в monarchshop.ru
 *
 * как отличить? Дпдшки имеют треки определенного вида. СПСР всегда содержит слово "СПСР" и затем идет цифра-трек. Примеры:
 * AR5905
 * CL    89500114077    Белова Юлия, Vvgrenkov@yandex.ru, Новое девяткино ул.Лесная дом 33 кв.145. Заказ №7R8D8    10800    06.01.2017    09.01.2017    01096235MOW
 * 9PM
 * MK5626    89281821424    Мелкумян Елена Сергеевна, Melkumyan-elena@inbox.ru, Ростов-на-дону, улица зорге 31/1 кв 121. Заказ №11533    11990    08.01.2017    09.01.2017    01096754MOW
 * DZ4208
 * CL    89148511054    Сентябов Юрий, Магаданская область, Магадан, ул. Лукса,. д. 14 кв. 21.    9200    07.01.2017    10.01.2017    СПСР
 * 201630201717
 * 9PM
 * NY4914    89642380648    Шевчук Олеся Валерьевна, Olesyashevchuk27@mail.ru, Магаданская область, Магадан, проспект Карла Маркса 71, кВ 12. Индекс 685000. Заказ №591302    12990    05.01.2017
 * 09.01.2017    СПСР
 * 201630201700
 * MK5166    89788219757    Мурко Наталья Андреевна, murko_natalya@mail.ru, Севастополь , Генерала Острякова 78-2. Заказ №898736    12590    08.01.2017    10.01.2017    01105779MOW
 *
 * ОБРАТИТЬ ВНИМАНИЕ! Что если это CL, то и текст другой:
 *
 * для ДПДшек CL:
 *
 * Здравствуйте, Светлана Николаевна.
 *
 * Ваш заказ, часы Michael Kors MK5735, был отправлен сервисом экспресс-доставки DPD.
 * Номер отправления - 01162587MOW.
 * Отследить посылку можно на сайте DPD - dpd.ru
 *
 * Телефон DPD: 88002504434
 *
 * Наш телефон: 84993223952
 * Спасибо за обращение в 9PM
 *
 * для СПСР от CL:
 *
 * Здравствуйте, Юрий.
 *
 * Ваш заказ, часы Anne Klein 1950RGTP, был отправлен сервисом экспресс-доставки СПСР.
 * Номер отправления - 201630201762.
 * Отследить посылку можно на сайте СПСР - spsr.ru
 *
 * Телефон СПСР: 88005555445
 * Наш телефон: 84993223952
 * Спасибо за обращение в 9PM
 *
 * В качестве номера-отправителя смс также должно значится WatchTown или 9PM соответственно.
 * Если это невозможно, то необходимо эту штуку делать не на базе смс.ру, а на базе какого-то другого сервиса, где это можно сделать.
 *
 *
 * Для TT:
 *
 * Добрый день, Екатерина Владимировна!
 * Ваш заказ на Tissot T048.417.27.057.06 передан в службу доставки СПСР.
 * Номер заказа - 201630201663.
 * Отследить его статус: spsr.ru
 * Телефон СПСР: 88005555445
 * Телефон магазина: 84951201553
 *
 * Добрый день, Екатерина Владимировна!
 * Ваш заказ на Tissot T048.417.27.057.06 передан в службу доставки DPD.
 * Номер заказа - D0000030823.
 * Отследить его статус: dpd.ru
 * Телефон DPD: 88002504434
 * Телефон магазина: 84951201553
 *
 *
 * Добрый день, Екатерина Владимировна!
 * Ваш заказ на Tissot T048.417.27.057.06 передан в службу доставки MAXI-POST.
 * Номер заказа - 33401176.
 * Отследить его статус: maxi-post.ru
 * Телефон MAXI-POST.: 84957899150
 * Телефон магазина: 84951201553
 *
 *
 * P.S. Учесть что у клиентов бывает 2 номера телефона, слать на любой.
 */
class SkladSMS_1 extends Sklad
{

    public $from = "";
    public $sms_status = "error"; //отправитель
    public $sms_id = "";
    private $test = 0;
    private $api_id_KW = "0f7e3449-a057-aed4-25ee-6c82c3f6ae8b";
    private $url_sms = "http://sms.ru/sms/send";

    public function insertRecord($phone, $shipnumber, $text, $model, $project, $shipper)
    {
        $fio = $this->getFioByText($text); // получаем фио из описания
        $phone = $this->getPhoneByPhone($phone); // получаем телефон т.к. их может быть два


        $text_send = $this->genText($shipnumber, $fio, $model, $project, $shipper);
        if (empty($text_send)) {
            return false;
        }
        $query = "INSERT INTO `sklad_sms` (`id`, `phone`, `text`, `date_insert`, `project`) 
         VALUES (NULL,'{$phone}', '{$text_send}', CURRENT_TIMESTAMP, '{$project}')";

            return $this->DB->simpleQuery($query);
    }

    private function getFioByText($text)
    {

        $first_iteration = explode(',', $text);
        $last_iteration = explode(' ', $first_iteration[0]);

        if (count($last_iteration) > 2) {
            return $last_iteration[1] . " " . $last_iteration[2];
        } else {
            return $last_iteration[1];
        }

    }

    private function getPhoneByPhone($text)
    {
        $first_iteration = explode("/r/n", $text);
        if (count($first_iteration) > 1) {
            return $first_iteration[0];
        } else {
            return $text;
        }
    }

    private function getTextForInsttagramm(){

    }


    private function genText($shipnumber, $fio, $model, $project, $shipper)
    {
        $get_full_name = $this->getBrandByArt($model);

        $text = "";

        if ($project == 'MS') {
            if ($shipper == 'DPD') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: http://www.dpd.ru

Телефон доставки: 88005554585
Телефон магазина:  84956460738
Спасибо за заказ!";
            }

            if ($shipper == 'SPSR') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: www.spsr.ru/ru/service/monitoring

Телефон доставки: 88005554585
Телефон магазина:  84956460738
Спасибо за заказ!";

            }

            if ($shipper == 'EMC') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: emspost.ru

Телефон доставки: 88005554585
Телефон магазина:  84956460738
Спасибо за заказ!";
            }

            if ($shipper == 'Major') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: www.me-online.ru

Телефон доставки: 88005554585
Телефон магазина:  84956460738
Спасибо за заказ!";
            }

        }

        if ($project == '9PM') {
            if ($shipper == 'DPD') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: http://www.dpd.ru

Телефон доставки: 88005554585
Телефон магазина:  84996382059
Спасибо за заказ!";
            }

            if ($shipper == 'SPSR') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: http://spsr.ru

Телефон доставки: 88005554585
Телефон магазина:  84996382059
Спасибо за заказ!";
            }

            if ($shipper == 'EMC') {
                $text = "Уважаемый {$fio}!

Ваш заказ на часы {$get_full_name} передан в службу доставки.
Номер для отслеживания: {$shipnumber}.
Узнать статус доставки можно здесь: http://emspost.ru

Телефон доставки: 88005554585
Телефон магазина:  84996382059
Спасибо за заказ!";
            }

        }

        return $text;
    }

    private function getBrandByArt($art)
    {

        $query = "SELECT brand FROM  `sklad_coming` WHERE  `model` LIKE  '{$art}'";
        $brand = $this->DB->selectCell($query);
        if ($brand == 'Прочие бренды') { //получаем данные с сайта
            $c = mysql_connect('localhost', 'root', '00npNYn3igkaD');
            mysql_select_db('sitemanager0', $c);
            $sql = "SELECT NAME  FROM `b_iblock_element` WHERE `IBLOCK_ID` = 1 AND `NAME` LIKE '%{$art}%'";
            $result = mysql_query($sql, $c);
            while ($row = mysql_fetch_array($result)) {
                return $row["NAME"];
            }
        } else {
            return $brand . " " . $art;
        }

    }


    /**
     * @param $phone
     * @param $text_send
     * отправляем смс
     */
    public function sendSms_KW($phone, $text_send)
    {
        $ch = curl_init($this->url_sms);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "api_id" => $this->api_id_KW,
            "to" => $phone,
            "text" => $text_send,
            "from" => $this->from,
            "test" => $this->test
        ));

        $result = curl_exec($ch);
        if ($result === false) {
            $this->sms_status = 'error';
        } else {
            $body = $result;
            $lines = explode("\n", $body);
            $this->sms_status = $lines[0];
            $this->sms_id = $lines[1];
        }

    }


    /***
     * @param $id_sms
     * -1    Сообщение не найдено.
     * 100    Сообщение находится в нашей очереди
     * 101    Сообщение передается оператору
     * 102    Сообщение отправлено (в пути)
     * 103    Сообщение доставлено
     * 104    Не может быть доставлено: время жизни истекло
     * 105    Не может быть доставлено: удалено оператором
     * 106    Не может быть доставлено: сбой в телефоне
     * 107    Не может быть доставлено: неизвестная причина
     * 108    Не может быть доставлено: отклонено
     * 130    Не может быть доставлено: превышено количество сообщений на этот номер в день
     * 131    Не может быть доставлено: превышено количество одинаковых сообщений на этот номер в минуту
     * 132    Не может быть доставлено: превышено количество одинаковых сообщений на этот номер в день
     * 200    Неправильный api_id
     * 210    Используется GET, где необходимо использовать POST
     * 211    Метод не найден
     * 220    Сервис временно недоступен, попробуйте чуть позже.
     * 230    Превышен общий лимит количества сообщений на этот номер в день.
     * 231    Превышен лимит одинаковых сообщений на этот номер в минуту.
     * 232    Превышен лимит одинаковых сообщений на этот номер в день.
     * 300    Неправильный token (возможно истек срок действия, либо ваш IP изменился)
     * 301    Неправильный пароль, либо пользователь не найден
     * 302    Пользователь авторизован, но аккаунт не подтвержден (пользователь не ввел код, присланный в регистрационной смс)
     */
    public function insertUpdateResultSMS($id = null)
    {
        if (!is_null($id)) {
            $query = "UPDATE `sklad_sms` SET `id_sms` =  '{$this->sms_id}',`status` = '{$this->sms_status}' WHERE  `id` ={$id}";
            $this->DB->update($query);
        }
    }

    /**
     * @param $post_arr
     *
     * @return string
     *
     * коллбак для сервиса смс.ру
     */
    public function callback($post_arr)
    {
        foreach ($post_arr as $entry) {
            $lines = explode("\n", $entry);
//            if ($lines[0] == "sms_status") {

                $this->sms_id = $lines[1];
                $this->sms_status = $lines[2];
//            }

            $query = "UPDATE `sklad_sms` SET `status` = '{$this->sms_status}' WHERE  `id_sms` ='{$this->sms_id}'";
            $this->DB->update($query);
        }

        return "100"; /* Важно наличие этого блока, иначе наша система посчитает, что в вашем обработчике сбой */

    }

    public function getNotSendSMS()
    {
        $result = array();
        $query = "SELECT * FROM sklad_sms WHERE `status` IS NULL";
        if ($result = $this->DB->select($query)) {
            return $result;
        } else {
            return $result;
        }

    }
}