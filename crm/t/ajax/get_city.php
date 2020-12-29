
<?php
require_once("../classes/Configuration.php");
/**
 * Получаем города и БД
 */
error_reporting(1);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
$c = mysqli_connect(Configuration::MYSQL_SERVER, Configuration::MYSQL_USERNAME, Configuration::MYSQL_PASSWORD,Configuration::MYSQL_DB);

if (isset($_REQUEST["term"])) {
    $trans = array('q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 't' => 'е', 'y' => 'н', 'u' => 'г', 'i' => 'ш', 'o' => 'щ', 'p' => 'з', '[' => 'х', ']' => 'ъ', 'a' => 'ф', 's' => 'ы', 'd' => 'в', 'f' => 'а', 'g' => 'п', 'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д', ';' => 'ж', "'" => 'э', 'z' => 'я', 'x' => 'ч', 'c' => 'с', 'v' => 'м', 'b' => 'и', 'n' => 'т', 'm' => 'ь', ',' => 'б', '.' => 'ю', '/' => '.', '`' => 'ё', 'Q' => 'Й', 'W' => 'Ц', 'E' => 'У', 'R' => 'К', 'T' => 'Е', 'Y' => 'Н', 'U' => 'Г', 'I' => 'Ш', 'O' => 'Щ', 'P' => 'З', '{' => 'Х', '}' => 'Ъ', 'A' => 'Ф', 'S' => 'Ы', 'D' => 'В', 'F' => 'А', 'G' => 'П', 'H' => 'Р', 'J' => 'О', 'K' => 'Л', 'L' => 'Д', ':' => 'Ж', '"' => 'Э', '|' => '/', 'Z' => 'Я', 'X' => 'Ч', 'C' => 'С', 'V' => 'М', 'B' => 'И', 'N' => 'Т', 'M' => 'Ь', '<' => 'Б', '>' => 'Ю', '?' => ',', '~' => 'Ё', '@' => '"', '#' => '№', '$' => ';', '^' => ':', '&' => '?');
    $search = strtr($_REQUEST["term"], $trans);
    $search = urldecode($search);
    if (empty($search)) {
        echo "error";
        exit();
    }


    $AOLEVEL = "'1','4','6'";
    if ($search == 'Москва' OR $search == 'москва') {
        $_REQUEST["one"] = 1;
        $AOLEVEL = "'1'";
    }

    if (!isset($_REQUEST["one"])) {
        $search = '%' . $search . '%';
    }

    $shortname[] = "'область'";
    $shortname[] = "'тер'";
    $shortname[] = "'край'";
    $shortname[] = "'Республика'";


    $shortname_sql = implode(',', $shortname);
    $gorod = 'г';

    $sql = "SELECT
AA.AOGUID,
AA.FORMALNAME as NAME,
AA.REGIONCODE,
CONCAT(AA.FORMALNAME,' ',AA.SHORTNAME) as NAME_1,
CONCAT(AA1.FORMALNAME,' ',AA1.SHORTNAME) as NAME_2,
CONCAT(AA2.FORMALNAME,' ',AA2.SHORTNAME) as NAME_3,
CONCAT(AA3.FORMALNAME,' ',AA3.SHORTNAME) as NAME_4
FROM `adr_arrrobg` as AA
LEFT JOIN `adr_arrrobg` as AA1 ON AA.PARENTGUID = AA1.AOGUID
LEFT JOIN `adr_arrrobg` as AA2 ON AA1.PARENTGUID = AA2.AOGUID
LEFT JOIN `adr_arrrobg` as AA3 ON AA2.PARENTGUID = AA3.AOGUID
WHERE AA.FORMALNAME LIKE '{$search}' AND AA.AOLEVEL IN ({$AOLEVEL})
AND AA.SHORTNAME NOT IN ({$shortname_sql})
ORDER BY AA.SORT ASC";


//    mysqli_query("SET NAMES 'utf8'", $c);
    $result = mysqli_query($c,$sql );
    if (mysqli_error($c)) {
        echo mysqli_error($c);
        die();
    }
    if (mysqli_num_rows($result) == 0) {
        echo "error ".mysqli_num_rows($result);
        exit();
    }

    while ($row = mysqli_fetch_array($result)) {
        $description = "";
        $name = $row['NAME_1'];
        $description = array();
        if (!is_null($row['NAME_2']))
            $description[] = $row['NAME_2'];
        if (!is_null($row['NAME_3']))
            $description[] = $row['NAME_3'];
        if (!is_null($row['NAME_4']))
            $description[] = $row['NAME_4'] . ' ';

        if (!empty($description)) {
            $description = '( ' . implode(', ', $description) . ' )';
        } else {
            $description = "";
        }
        $value = $row['NAME'];
        $jsCitiesArr[] = array("label" => $name, "desc" => $description, "value" => $value, "id" => $row["AOGUID"], "region" => $row["REGIONCODE"]);
    }
    echo json_encode($jsCitiesArr);
}

if (isset($_REQUEST['only_spsr'])) {
    $cityAOGUID = $_REQUEST["AOGUID"];

    $sql = "SELECT SPSR_CITY_CODE, SPSR_CITY_OWNER_ID,SPSR_DATE FROM  `adr_arrrobg` WHERE  `AOGUID` LIKE  '{$cityAOGUID}'";
    $result = mysqli_query($c,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $citySPSRid = $row["SPSR_CITY_CODE"];
        $OWNER_ID = $row["SPSR_CITY_OWNER_ID"];
        $SPSR_DATE = $row["SPSR_DATE"];
        $SPSR_DATE_1 = $SPSR_DATE[0];
        $SPSR_DATE_2 = $SPSR_DATE[0];
    }
    if (!empty($citySPSRid)) {
        $UP_TABLE .= "<br><table class='show_hide'>";
        $UP_TABLE .= '<tr><td>SPSR</td><td>от ' . (intval($SPSR_DATE_1) + 1) . '  до ' . (intval($SPSR_DATE_2) + 2) . ' рабочих дней</td></tr>';
        echo $UP_TABLE . "</table>";
    }


}