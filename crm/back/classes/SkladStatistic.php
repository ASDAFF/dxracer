<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 24.08.16
 * Time: 11:26
 */
class SkladStatistic extends Sklad
{

    function action($action, $data = "", $model_id = "",$post="")
    {
        switch ($action) {
            case 'full':
                return $this->full();
                break;
            case 'sales':
                return $this->sales();
                break;
            case 'shipment':
                return $this->shipment();
                break;
            case 'shipmentGO':
                return $this->shipmentGO();
                break;
            case 'shipmentInHand':
                return $this->shipmentInHand();
                break;
            case 'money':
                return $this->money();
                break;
            case 'averageCheck':
                return $this->averageCheck();
                break;
            case 'averageCheckFull':
                return $this->averageCheckFull();
                break;
            case 'paymentCard':
                return $this->paymentCard();
                break;
            case 'discard':
                return $this->discard();
                break;

        }

    }


    private function shipmentGO(){
        $sql = "SELECT SC.brand,count(SC.brand) as cnt FROM `sklad_shipment` as SS
                INNER JOIN sklad_coming as SC on SC.id=SS.model_id WHERE SC.id NOT IN (SELECT model_id FROM sklad_coming_money) 
                GROUP BY SC.brand";

        return $this->DB->select($sql);
    }

    private function shipmentInHand(){
        $sql = "SELECT SC.brand,count(SC.brand) as cnt FROM `sklad_shipment` as SS
                INNER JOIN sklad_coming as SC on SC.id=SS.model_id WHERE SC.id IN (SELECT model_id FROM sklad_coming_money) 
                GROUP BY SC.brand";

        return $this->DB->select($sql);
    }

    private function full(){
        $sql = "SELECT brand,count(brand) as cnt FROM `sklad_coming` WHERE 
                id NOT IN(SELECT model_id FROM sklad_sales) AND 
                id NOT IN(SELECT model_id FROM sklad_shipment) AND 
                id NOT IN(SELECT model_id FROM sklad_discard) GROUP BY brand ORDER BY sort ASC";

        return $this->DB->select($sql);
    }

    private function sales(){
        $sql = "SELECT SC.brand,count(SC.brand) as cnt FROM `sklad_sales` as SS
                INNER JOIN sklad_coming as SC on SC.id=SS.model_id
                GROUP BY SC.brand";

        return $this->DB->select($sql);
    }

    private function shipment(){
        $sql = "SELECT SC.brand,count(SC.brand) as cnt FROM `sklad_shipment` as SS
                INNER JOIN sklad_coming as SC on SC.id=SS.model_id
                GROUP BY SC.brand";

        return $this->DB->select($sql);
    }

    private function money(){
        $sql = "SELECT SC.brand,sum(f.price) as cnt FROM (SELECT model_id,price FROM `sklad_sales`
                UNION ALL
                SELECT model_id,price FROM `sklad_coming_money`) as f
                      INNER JOIN sklad_coming as SC on SC.id=f.model_id
                                GROUP BY SC.brand
				";

        return $this->DB->select($sql);
    }

    private function averageCheck(){
        $sql = "SELECT SC.brand,ROUND(sum(f.price)/count(SC.brand)) as cnt FROM (SELECT model_id,price FROM `sklad_sales`
                UNION ALL
                SELECT model_id,price FROM `sklad_coming_money`) as f
                      INNER JOIN sklad_coming as SC on SC.id=f.model_id
                                GROUP BY SC.brand
				";

        return $this->DB->select($sql);
    }

    private function averageCheckFull(){
        $sql  ="SELECT ROUND(sum(f.price)/count(SC.brand)) as cnt FROM (SELECT model_id,price FROM `sklad_sales`
                UNION ALL
                SELECT model_id,price FROM `sklad_coming_money`) as f
                      INNER JOIN sklad_coming as SC on SC.id=f.model_id
                                ";

        return $this->DB->select($sql);
    }


    private function paymentCard()
    {
        $sql = "SELECT brand,sum(price) AS cnt FROM `sklad_sales` as SS
                 INNER JOIN sklad_coming AS SC ON SC.id=SS.model_id
                 WHERE pay_card = 1 
                GROUP BY brand";

        return $this->DB->select($sql);
    }

    private function discard(){
        $sql = "SELECT SC.brand,count(SC.brand) as cnt FROM `sklad_discard` as SS
                INNER JOIN sklad_coming as SC on SC.id=SS.model_id
                GROUP BY SC.brand";

        return $this->DB->select($sql);
    }
}