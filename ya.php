<?
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/rtxshop";
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = Array('IBLOCK_ID' => 9, "ACTIVE" => "Y","ID"=>array(16));
$db_list_categories = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect);

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "PREVIEW_PICTURE", "PROPERTY_POL", "PROPERTY_BREND", "PROPERTY_SERIYA",
    "IBLOCK_SECTION_ID", "DETAIL_PAGE_URL", "CATALOG_GROUP_1", "CATALOG_GROUP_2", "PROPERTY_LOAD_YANDEX");
$arFilter = Array("IBLOCK_ID" => 9, "ACTIVE" => "Y","SECTION_ID"=>array(16),">CATALOG_QUANTITY"=>0);
$db_list_elements = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);


$dom = new domDocument("1.0", "utf-8");

$root = $dom->createElement("yml_catalog"); // Создаём корневой элемент
$root->setAttribute("date", date("Y-m-d H:i"));
$dom->appendChild($root);

$shop = $root->appendChild($dom->createElement('shop'));
$shop->appendChild($dom->createElement("name", "rtxshop.ru"));
$shop->appendChild($dom->createElement("company", "rtxshop.ru"));
$shop->appendChild($dom->createElement("url", "https://rtxshop.ru"));

$delivery_options = $dom->createElement("delivery-options");
$shop->appendChild($delivery_options);

$option = $dom->createElement("option");
$delivery_options->appendChild($option);
$option->setAttribute("cost", 0);
$option->setAttribute("days", 1);
$option->setAttribute("order-before", 18);


$currencies = $shop->appendChild($dom->createElement('currencies'));
$currency = $dom->createElement("currency");
$currencies->appendChild($currency);
$currency->setAttribute("id", "RUB");
$currency->setAttribute("rate", "1");

$categories = $shop->appendChild($dom->createElement('categories'));
while ($ar_result_categories = $db_list_categories->GetNext()) {

    $category = $dom->createElement("category", $ar_result_categories['NAME']);
    $categories->appendChild($category);
    $category->setAttribute("id", $ar_result_categories['ID']);
}

$offers = $shop->appendChild($dom->createElement('offers'));

while ($ar_result_elements = $db_list_elements->GetNextElement()) {
    $row = $ar_result_elements->GetFields();

    $price = $row['CATALOG_PRICE_1'];
    $price = str_replace(".00", "", $price);

    if (IntVal($row["DETAIL_PICTURE"]) > 0 || IntVal($row["PREVIEW_PICTURE"]) > 0) {
        $pictNo = IntVal($row["DETAIL_PICTURE"]);
        if ($pictNo <= 0) $pictNo = IntVal($row["PREVIEW_PICTURE"]);

        if ($ar_file = CFile::GetFileArray($pictNo)) {
            $strFile = "https://rtxshop.ru" . $ar_file["SRC"];
        }
    }


        $description = $row['PROPERTY_POL_VALUE'] . " " . $row['NAME'] . " с гарантией";

        $offer = $dom->createElement("offer");
        $offers->appendChild($offer);
        $offer->setAttribute("id", $row['ID']);
        $offer->setAttribute("type", "vendor.model");
        $offer->setAttribute("available", "true");


        $offer->appendChild($dom->createElement("url", "https://rtxshop.ru" . $row['DETAIL_PAGE_URL']));
        $offer->appendChild($dom->createElement("price", $price));

        $sales_notes = "";
        //$description = "";

        $res = CIBlockSection::GetByID($row["IBLOCK_SECTION_ID"]);
        if ($ar_res = $res->GetNext())
            $vendor = $ar_res['NAME'];


        $offer->appendChild($dom->createElement("currencyId", "RUB"));
        $offer->appendChild($dom->createElement("categoryId", $row['IBLOCK_SECTION_ID']));
        $offer->appendChild($dom->createElement("picture", $strFile));
        $offer->appendChild($dom->createElement("delivery", "true"));
        $offer->appendChild($dom->createElement("typePrefix", "Клавиатуры"));
        $offer->appendChild($dom->createElement("vendor", "MSI"));
        $offer->appendChild($dom->createElement("model", $row['CODE']));
        $offer->appendChild($dom->createElement("market_category", "Все товары/Компьютерная техника/Периферийные устройства/Клавиатуры"));


        $offer->appendChild($dom->createElement("description", $description));


        $offer->appendChild($dom->createElement("sales_notes", $sales_notes));

        $offer->appendChild($dom->createElement("manufacturer_warranty", "true"));

//    $offer->appendChild($dom->createElement("pickup", "false"));

}


$dom->formatOutput = true;
$mail = $dom->saveXML();
if (isset($_GET['save'])){
    file_put_contents("ya.xml", $mail);
}
header('Content-Type: text/xml; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Дата в прошлом
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
echo $mail;


