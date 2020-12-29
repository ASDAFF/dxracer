<?php

/**
 * Created by PhpStorm.
 * User: chaos
 * Date: 14.02.17
 * Time: 13:24
 */
class Search extends Sklad
{


    private $max_result = 5;
    private $dop_text = "Имеются прочие совпадение, пожалуйста, уточните поиск";

    public function globalSearch($string)
    {

        if (!empty($string) AND strlen($string) >= 6) {
            $i = 1;
            $dop_text = false;
            $table = '<table class="table table-bordered table-hover">';

            $query_search = explode(" ", $string);
            $dop_query = [];
            foreach ($query_search as $value) {
                if (!empty($value)) {
                    $dop_query[] = "(`phone` LIKE '%{$value}%' OR `text` LIKE '%{$value}%')";
                }
            }

            $dop_query = implode(' AND ', $dop_query);


            if (isset($_REQUEST["Refusals"])) {
                $query_r = " UNION ALL SELECT 'sklad_refusals', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_refusals` WHERE {$dop_query}";
            }

            if (isset($_REQUEST["Problems"])) {
                $query_p = " UNION ALL SELECT 'sklad_problems', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_problems` WHERE {$dop_query}";
            }

            if (isset($_REQUEST["Other"])) {
                $query_o = " UNION ALL SELECT 'sklad_other', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_other` WHERE {$dop_query}";
            }

            $query = "
            SELECT * FROM (
            SELECT 'sklad_sales',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_sales` WHERE {$dop_query} 
            UNION 
            SELECT 'sklad_shipment',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_shipment` WHERE {$dop_query} AND `model_id` NOT IN (SELECT `model_id` FROM `sklad_coming_money` WHERE {$dop_query} )
            UNION  
            SELECT 'sklad_coming_money',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_coming_money` WHERE {$dop_query} 
            UNION 
            SELECT 'sklad_all_orders', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_all_orders` WHERE {$dop_query}
            {$query_r}
            {$query_p}
            {$query_o}
            ) as glbS LIMIT 6
                  ";
//            echo "<pre>";
//            print_r($query);
//            echo "</pre>";

            $ob = $this->DB->simpleQuery($query);


            while ($res_arr = $ob->fetch_assoc()) {

                $color_class = "";

                if ($res_arr["sklad_sales"] == "sklad_refusals")
                    $color_class = "refusals";

                if ($res_arr["sklad_sales"] == "sklad_problems")
                    $color_class = "problems";

                if ($res_arr["sklad_sales"] == "sklad_other")
                    $color_class = "other";

                if ($res_arr["sklad_sales"] == "sklad_shipment")
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

                if ($i >= $this->max_result) {
                    $dop_text = true;
                    break;
                }
                $i++;

            }
            $table .= '</table>';

            if ($dop_text) {
                $table .= '<div class="alert alert-warning">' . $this->dop_text . '</div>';
            }

            return $table;
        } else {
            return "";
        }
    }


    public function globalSearchAdmin($string, $Refusals = "", $Problems = "", $Other = "", $limit = 6, $max_result = 5)
    {

        if (!empty($string) AND (strlen($string) >= 3 OR $string == "all")) {
            $i = 1;
            $dop_text = false;


            $query_search = explode(" ", $string);
            $dop_query = "";

            foreach ($query_search as $value) {
                if (!empty($value)) {
                    $dop_query_1[] = "(`phone` LIKE '%{$value}%' OR `text` LIKE '%{$value}%')";
                }
            }

            $dop_query = implode(' AND ', $dop_query_1);


            if ($string == "all") {

                $date_from = $this->getLastDateCloseSklad();
                $dop_query = " `date_insert` > '{$date_from}'";
            }


            if (!empty($Refusals)) {
                $query_r = " UNION SELECT 'sklad_refusals', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_refusals` WHERE {$dop_query}";
            }

            if (!empty($Problems)) {
                $query_p = " UNION SELECT 'sklad_problems', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_problems` WHERE {$dop_query}";
            }

            if (!empty($Other)) {
                $query_o = " UNION SELECT 'sklad_other', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_other` WHERE {$dop_query}";
            }

            $query = "
            SELECT * FROM (
            SELECT 'sklad_sales',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_sales` WHERE {$dop_query} 
            UNION ALL 
            SELECT 'sklad_sales',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_coming_money` WHERE {$dop_query}";
            if ($string != "all") {
                $query .= "
                 UNION 
                    SELECT 'sklad_all_orders', `model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_all_orders` WHERE {$dop_query}
                 UNION 
                    SELECT 'sklad_shipment',`model`,`phone`,`text`,`price`,`date_1`,`date_2`,`comment`,`project` FROM `sklad_shipment` WHERE {$dop_query} AND `model_id` 
                        NOT IN (SELECT `model_id` FROM `sklad_coming_money` WHERE {$dop_query} )
                        ";
            }
            $query .= " 
            {$query_r}
            {$query_p}
            {$query_o}
            ) as glbS LIMIT {$limit}
                  ";
//            echo "<pre>";
//            print_r($query);
//            echo "</pre>";

            $ob = $this->DB->simpleQuery($query);


            while ($res_arr = $ob->fetch_assoc()) {
                $full_arr[$res_arr["sklad_sales"]][] = $res_arr;
            }
            $table = '<div class="panel-group" id="accordion">';
            foreach ($full_arr as $key => $value) {
                $color_class = "";
                $name ="";
                if ($key == "sklad_sales") {
                    $color_class = "";
                    $name ="Продажи";
                }

                if ($key == "sklad_refusals") {
                    $color_class = "refusals";
                    $name ="Отказы";
                }

                if ($key == "sklad_problems") {
                    $color_class = "problems";
                    $name ="Проблемы";
                }

                if ($key == "sklad_other") {
                    $color_class = "other";
                    $name ="Прочее";
                }

                if ($key== "sklad_shipment") {
                    $color_class = "yellow";
                }

                if($color_class == ""){
                    $color_class = "info";
                }

                $table .= '
                    <div class="panel panel-'.$color_class.'">
                		<div class="panel-heading">
					        <a data-toggle="collapse" data-parent="#accordion" href="#' . $key . '">' . $name . '</a>
				        </div>
					<div id="' . $key . '" class="panel-collapse collapse">
					    <div class="panel-body">
					        <table class="table table-bordered">
                ';

                foreach ($value as $res_arr) {


                    $color_class = "";



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
                $table .= '</table></div></div></div>';
            }
            $table .= '</div>';


            return $table;
        } else {
            return "";
        }
    }

}