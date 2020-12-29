<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 14.02.17
 * Time: 13:18
 */

require_once("PHPExcel.php");

class Invoice extends Sklad
{

    public $error_text;
    private $data;

    public function setArrivalByInvoice($invoice_id, $models = array())
    {
        $this->DB->transactionStart();

        foreach ($models as $model) {
            $query = "UPDATE `sklad_invoice_data` SET `date_get` = CURRENT_TIMESTAMP WHERE `id_invoice` = $invoice_id AND model = '{$model}' AND `date_get` IS NULL LIMIT 1";
            if (!$this->checkModelInInvoice($invoice_id, $model) OR !$this->DB->update($query)) {
                $this->error_text = "{$model} - нет в накладной(данные не записаны)";
                $this->DB->transactionRollBack();

                return false;
            }

            $this->checkSetFullInvoice($invoice_id);
        }
        $this->DB->transactionCommit();

        return true;
    }

    private function checkModelInInvoice($invoice_id, $model)
    {
        $query = "SELECT `id` FROM `sklad_invoice_data` WHERE `id_invoice` = $invoice_id AND `model` = '{$model}' AND `date_get` IS NULL  LIMIT 1";
        if ($this->DB->selectCell($query) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $invoice_id
     * Закрываем накладную если она полная
     */
    private function checkSetFullInvoice($invoice_id)
    {
        $query = "SELECT count(*) as cnt FROM `sklad_invoice_data` WHERE `id_invoice`={$invoice_id} AND `date_get` IS NULL";
        if ($this->DB->selectCell($query) == 0) {
            $query = "UPDATE `sklad_invoice` SET  `close` =  '1' WHERE `id` = $invoice_id";
            $this->DB->update($query);
        }


    }

    public function getAllInvoice($only_open = null)
    {
        if (is_null($only_open)) {
            $query = "SELECT * FROM  `sklad_invoice`  ORDER BY `date_insert` DESC";
        } else {
            $query = "SELECT * FROM  `sklad_invoice`  WHERE `close`= 0 ORDER BY `date_insert` DESC";
        }

        return $this->DB->select($query);

    }

    public function addPos2Invoce($post)
    {
        $this->data = $post;

        $this->logTextInsert('newInvoce', $this->data);
        $this->DB->transactionStart();
        $data = $this->data['data'];
        $invoce_id = (int)$this->data['number_invent'];

        $arr_data = explode(PHP_EOL, $data);

        /*проверяем что данные подходят правилам
         * единым столбцом с повторами или двумя столбцами без повторов с указанием количества во втором столбце.
         */
        $name = array();
        foreach ($arr_data as $value) {
            $value = trim(preg_replace("/ {2,}/", " ", $value)); //удаляем лишние пробелы

            $str_arr = explode("\t", $value);

            if (count($str_arr) == 2) {

                $cnt = $str_arr[1];
                if (!is_numeric($cnt))
                    return json_encode(array("result" => 0, "text" => " в строке {$value} "));

                for ($i = 0; $i < $cnt; $i++) {
                    $name[] = $str_arr[0];
                }

            } elseif (count($str_arr) == 1) {

                $cnt = 1;
                for ($i = 0; $i < $cnt; $i++) {
                    $name[] = $str_arr[0];
                }
            } elseif (count($str_arr) > 2) {
                return json_encode(array("result" => 0, "text" => " в строке {$value} "));
            }
        }




        $count_position = 0;
        foreach ($name as $value) {
            $count_position++;
            $query = "INSERT INTO `sklad_invoice_data` (`id`, `id_invoice`, `model`, `date_get`) VALUES (NULL, '{$invoce_id}', '{$value}', NULL)";
            if (!$this->DB->insert($query)) {
                $this->DB->transactionRollBack();

                return json_encode(array("result" => 0, "text" => " при добавлении данных {$this->DB->error()}"));
            }
        }
        $this->DB->transactionCommit();
        return json_encode(array("result" => 1, "text" => "Позиции добавлены в накладную"));



    }



    public function newInvoice($post)
    {
        $this->data = $post;

        $this->logTextInsert('newInvoce', $this->data);
        $this->DB->transactionStart();
        $data = $this->data['data'];
        $provider = $this->data['provider'];


        $arr_data = explode(PHP_EOL, $data);

        /*проверяем что данные подходят правилам
         * единым столбцом с повторами или двумя столбцами без повторов с указанием количества во втором столбце.
         */
        $name = array();
        foreach ($arr_data as $value) {
            $value = trim(preg_replace("/ {2,}/", " ", $value)); //удаляем лишние пробелы

            $str_arr = explode("\t", $value);

            if (count($str_arr) == 2) {

                $cnt = $str_arr[1];
                if (!is_numeric($cnt))
                    return json_encode(array("result" => 0, "text" => " в строке {$value} "));

                for ($i = 0; $i < $cnt; $i++) {
                    $name[] = $str_arr[0];
                }

            } elseif (count($str_arr) == 1) {

                $cnt = 1;
                for ($i = 0; $i < $cnt; $i++) {
                    $name[] = $str_arr[0];
                }
            } elseif (count($str_arr) > 2) {
                return json_encode(array("result" => 0, "text" => " в строке {$value} "));
            }
        }

        $invoce_id = $this->getLastInvoceId() + 1;


        $count_position = 0;
        foreach ($name as $value) {
            $count_position++;
            $query = "INSERT INTO `sklad_invoice_data` (`id`, `id_invoice`, `model`, `date_get`) VALUES (NULL, '{$invoce_id}', '{$value}', NULL)";
            if (!$this->DB->insert($query)) {
                $this->DB->transactionRollBack();

                return json_encode(array("result" => 0, "text" => " при добавлении данных {$this->DB->error()}"));
            }
        }


        $query = "INSERT INTO `sklad_invoice` (`id`, `date_insert`, `provider`) VALUES ('{$invoce_id}', CURRENT_TIMESTAMP, '{$provider}')";
        if ($this->DB->insert($query)) {
            $this->DB->transactionCommit();

            return json_encode(array("result" => 1, "text" => "Накладная успешно добавлена ({$count_position} позиций)"));
        } else {
            $this->DB->transactionRollBack();

            return json_encode(array("result" => 0, "text" => ""));
        }

    }

    public function updateComment($post){
        if((int)$post['id_invoice']>0) {
            $query = "UPDATE `sklad_invoice` SET `comment` ='{$post["data"]}' WHERE `id` = {$post["id_invoice"]}";

            if($this->DB->simpleQuery($query)){
                return 1;
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }

    private function getLastInvoceId()
    {
        $query = "SELECT `id` FROM  `sklad_invoice`  ORDER BY `id` DESC LIMIT 1";

        return $this->DB->selectCell($query);
    }

    public function getContentInvoice($invoice_id)
    {
        $query = "SELECT * FROM `sklad_invoice_data` WHERE `id_invoice`={$invoice_id}";

        return $this->DB->select($query);
    }

    public function getProvider($invoice_id)
    {
        $query = "SELECT `provider` FROM  `sklad_invoice` WHERE `id` = $invoice_id LIMIT 1";

        return $this->DB->selectCell($query);
    }

    /**
     * @param      $id
     * @param null $status
     * В накладной можно также каким-то часам присвоить статус "Не получены"
     */
    public function setStatusNotObtained($id)
    {
        $query = "UPDATE `sklad_invoice_data` SET `not_obtained` = 1, `date_get` = CURRENT_TIMESTAMP WHERE `id` = $id";
        $this->logTextInsert('setStatusNotObtained', $query);
        if ($this->DB->update($query)) {
            $this->checkSetFullInvoice($this->getInvoiceByElement($id));

            return 1;
        } else {
            return 0;
        }

    }

    /**
     *  Получаем номер накладной по номеру позиции
     *
     * @param $id
     *
     * @return string
     */
    private function getInvoiceByElement($id)
    {
        $query = "SELECT `id_invoice` FROM `sklad_invoice_data` WHERE `id` = $id LIMIT 1";

        return $this->DB->selectCell($query);
    }


    public function export($id_invoice, $tip, $two_cols = false)
    {

        $out = array();
        $id_invoice = (int)$id_invoice;
        switch ($tip) {
            case "all": {
                $tip = "Полная";
                if (!$two_cols)
                    $query = "SELECT `model`, DATE_FORMAT(`date_get`,'%d.%m.%Y') as `date`,`not_obtained` FROM `sklad_invoice_data` WHERE `id_invoice` = $id_invoice";
                else
                    $query = "SELECT `model`,count(*) AS cnt, DATE_FORMAT(`date_get`,'%d.%m.%Y')  as `date`,`not_obtained` FROM `sklad_invoice_data` WHERE `id_invoice` = 1 GROUP BY `model`,`date_update`,
                    `not_obtained`";


                break;
            }
            case "in": {
                $tip = "В пути";
                if (!$two_cols)
                    $query = "SELECT `model`, DATE_FORMAT(`date_get`,'%d.%m.%Y') as `date`,`not_obtained` FROM `sklad_invoice_data` 
                          WHERE `id_invoice` = $id_invoice AND `date_get` IS NULL AND `not_obtained`=0";
                else
                    $query = "SELECT `model`,count(*) AS cnt, DATE_FORMAT(`date_get`,'%d.%m.%Y')  as `date`,`not_obtained` AS cnt FROM `sklad_invoice_data`
                              WHERE `id_invoice` = $id_invoice AND `date_get` IS NULL AND `not_obtained`=0
                              GROUP BY `model`,`date_get`,`not_obtained`";
                break;
            }
            case "not": {
                $tip = "Не пришли";
                if (!$two_cols)
                    $query = "SELECT `model`, DATE_FORMAT(`date_get`,'%d.%m.%Y') as `date`,`not_obtained` FROM `sklad_invoice_data` WHERE `id_invoice` = $id_invoice AND `not_obtained`=1";
                else
                    $query = "SELECT `model`,count(*) AS cnt, DATE_FORMAT(`date_get`,'%d.%m.%Y')  as `date`,`not_obtained` AS cnt FROM `sklad_invoice_data`
                              WHERE `id_invoice` = $id_invoice AND `not_obtained`=1
                              GROUP BY `model`,`date_get`,`not_obtained`";
                break;
            }
            case "ok": {
                $tip = "Пришли";
                if (!$two_cols)
                    $query = "SELECT `model`, DATE_FORMAT(`date_get`,'%d.%m.%Y') as `date`,`not_obtained` FROM `sklad_invoice_data` 
                              WHERE `id_invoice` = $id_invoice AND `date_get` IS NOT NULL AND `not_obtained`=0";
                else
                    $query = "SELECT `model`,count(*) AS cnt, DATE_FORMAT(`date_get`,'%d.%m.%Y')  as `date`,`not_obtained` FROM `sklad_invoice_data`
                              WHERE `id_invoice` = $id_invoice AND `date_get` IS NOT NULL AND `not_obtained`=0
                              GROUP BY `model`,`date_get`,`not_obtained`";
                break;
            }
        }


        $ob = $this->DB->simpleQuery($query);
        while ($arr = $ob->fetch_assoc()) {
            if (is_null($arr['date']) AND $arr['not_obtained'] == 0) {
                $status = "В пути";
            } elseif ($arr['not_obtained'] == 1) {
                $status = "Не пришли";
            } else {
                $status = "Пришли";
            }
            unset($arr['not_obtained']);
            $arr['status'] = $status;
            $out[] = $arr;
        }

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        if ($two_cols) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Модель');
            $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Количество');
            $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Дата');
            $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Статус');
        }else{
            $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Модель');
            $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Дата');
            $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Статус');
        }
        $objPHPExcel->getActiveSheet()->fromArray($out, null, 'A2');

        $objPHPExcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
        if ($two_cols) {
            $objPHPExcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
        }
        $objPHPExcel->getActiveSheet()->getStyle("A1:D1")->applyFromArray(array("font" => array("bold" => true)));
        $objPHPExcel->getActiveSheet()->setTitle("Накладная № ' . $id_invoice");
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        // We'll be outputting an excel file
        header('Content-type: application/vnd.ms-excel');

// It will be called file.xls
        header('Content-Disposition: attachment; filename="Накладная № ' . $id_invoice . '(' . $tip . ').xls"');

        // Write file to the browser
        $objWriter->save('php://output');
    }


}