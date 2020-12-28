<?
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "IBLOCK_ID", "NAME","IBLOCK_SECTION_ID","DETAIL_PAGE_URL","CATALOG_GROUP_1","PROPERTY_YANDEX_PICT","PROPERTY_PROP12");
$arFilter = Array("IBLOCK_ID" => 9, "ACTIVE" => "Y", "!PROPERTY_PROP13" => false,"SECTION_ID"=>array(13,1,5));
$db_list_elements = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$db_list_elements1 = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while ($ar_result_elements = $db_list_elements->GetNext()) {
    $SECTION_ID_ARR[] = $ar_result_elements['IBLOCK_SECTION_ID'];
}
if($_SERVER['HTTP_HOST']!="timeavenue.su:443"){
$domain = "https://time-avenue.com";
$save_xml = "Time-avenue.com";
}else{
$save_xml = "Timeavenue.su";
$domain = "https://timeavenue.su";
}
$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = Array('IBLOCK_ID' => 9, "ACTIVE" => "Y", "ID" => array(13,1,5,3));
$db_list_categories = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect);

$dom = new domDocument("1.0", "utf-8");

$root = $dom->createElement("yml_catalog"); // Создаём корневой элемент
$root->setAttribute("date", date("Y-m-d H:i"));
$dom->appendChild($root);

$shop = $root->appendChild($dom->createElement('shop'));
$shop->appendChild($dom->createElement("name", "" . $save_xml . ""));
$shop->appendChild($dom->createElement("company", "" . $save_xml . ""));
$shop->appendChild($dom->createElement("url", $domain));
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
$res = array();
$offers = $shop->appendChild($dom->createElement('offers'));
while ($ar_result_elements = $db_list_elements1->GetNextElement()) {
    $row = $ar_result_elements->GetFields();
    $price = $row['CATALOG_PRICE_1'];
    $price = str_replace(".00", "", $price);
    $PICT = CFile::GetPath($row['PROPERTY_YANDEX_PICT_VALUE']);
    $sales_notes = "100% подлинные. Без предоплат.";
    //echo "<pre>"; print_r($row); echo "</pre>";
     $res = CIBlockSection::GetByID($row['IBLOCK_SECTION_ID'])->GetNext();
    $key1 = $res['NAME'] ." ".$row['CODE'];
    $key2 = $res['NAME'] ." ".str_replace(array(".","-"), " ", $row['CODE']);
    $key3 = $res['NAME'] ." ".str_replace(array(".","-"), "", $row['CODE']);
    $offer = $dom->createElement("offer");
    $offers->appendChild($offer);
    $offer->setAttribute("id", $row['ID']);
    $offer->setAttribute("type", "vendor.model");
    $offer->setAttribute("available", "true");
    $offer->appendChild($dom->createElement("url", $domain."" .$row['DETAIL_PAGE_URL']));
    $offer->appendChild($dom->createElement("price", $price));
    $offer->appendChild($dom->createElement("currencyId", "RUB"));
    $offer->appendChild($dom->createElement("categoryId", $row['IBLOCK_SECTION_ID']));
    $offer->appendChild($dom->createElement("picture", $domain."" .$PICT));
    $offer->appendChild($dom->createElement("delivery", "true"));
//	$offer->appendChild($dom->createElement("local_delivery_cost", "0"));
    $offer->appendChild($dom->createElement("typePrefix", "Наручные часы"));
   
    $offer->appendChild($dom->createElement("vendor", $res['NAME']));
    $offer->appendChild($dom->createElement("vendorCode", $res['CODE']));
    $offer->appendChild($dom->createElement("model", $row['CODE']));
    $offer->appendChild($dom->createElement("description", $row['NAME']));
    $offer->appendChild($dom->createElement("key1", $key1));
    $offer->appendChild($dom->createElement("key2", $key2));
    $offer->appendChild($dom->createElement("key3", $key3));
    if(!empty($row["PROPERTY_PROP12_VALUE"])){
        $offer->appendChild($dom->createElement("gtin", $row["PROPERTY_PROP12_VALUE"]));
    }
    
    if (!empty($sales_notes)) {
        $offer->appendChild($dom->createElement("sales_notes", $sales_notes));
    }
}

$dom->formatOutput = true;
$mail = $dom->saveXML();
header('Content-Type: text/xml; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Дата в прошлом
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
echo $mail;
?>