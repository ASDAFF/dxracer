<?
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule("sale");
//error_reporting( E_ALL );
//ini_set('memory_limit', '4096M');


$DB->Connect($DBHost, $DBName, $DBLogin, $DBPassword);

$exclude = array(909,913,923, 918);

$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = Array('IBLOCK_ID' => 15, 'GLOBAL_ACTIVE' => 'Y', "PROPERTY_STATUS" => false, "ID" => $exclude);
$db_list_categories = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect);


$arSelect = Array("DETAIL_PAGE_URL", "DETAIL_TEXT", "IBLOCK_SECTION_ID", "ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM", "CATALOG_GROUP_1");
$arFilter = Array("IBLOCK_ID" => 15, "ACTIVE" => "Y", "SECTION_ID" => $exclude, "PROPERTY_SEND_YANDEX"=>328);
$db_list_elements = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

$dom = new domDocument("1.0", "windows-1251");

$root = $dom->createElement("yml_catalog"); 
$root->setAttribute("date", date("Y-m-d H:i"));
$dom->appendChild($root);

$shop = $root->appendChild($dom->createElement('shop'));
$shop->appendChild($dom->createElement("name", "F5Store"));
$shop->appendChild($dom->createElement("company", "F5Store"));
$shop->appendChild($dom->createElement("url", "http://f5store.ru" . $row['DETAIL_PAGE_URL']));


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
$delivery_options = $dom->createElement("delivery-options");
$shop->appendChild($delivery_options);


$option = $dom->createElement("option");
$delivery_options->appendChild($option);
$option->setAttribute("cost", 0);
$option->setAttribute("days", 0);
$option->setAttribute("order-before", 9);


$offers = $shop->appendChild($dom->createElement('offers'));

while ($ar_list_elements = $db_list_elements->GetNextElement()) {
    $row= $ar_list_elements ->GetFields();  
    $props = $ar_list_elements ->GetProperties();
    $price = $row['CATALOG_PRICE_1'];
    if ($row["CATALOG_QUANTITY"]<=0) continue;

  if (IntVal($row["DETAIL_PICTURE"]) > 0 || IntVal($row["PREVIEW_PICTURE"]) > 0) {
    $pictNo = IntVal($row["DETAIL_PICTURE"]);
    if ($pictNo <= 0) $pictNo = IntVal($row["PREVIEW_PICTURE"]);

    if ($ar_file = CFile::GetFileArray($pictNo)) {
      $strFile = "http://f5store.ru" . $ar_file["SRC"];
    }
  }

  
  $offer = $dom->createElement("offer");
  $offers->appendChild($offer);
  $offer->setAttribute("id", $row['ID']);
  $offer->setAttribute("type", "vendor.model");
  $offer->setAttribute("available", "true");


  $offer->appendChild($dom->createElement("url", "http://f5store.ru" . $row['DETAIL_PAGE_URL']));
  $offer->appendChild($dom->createElement("price", $price));

  $vendor = $props['b2b_producer']['VALUE'];
  
  $sex = "";
  $year = "";
  $glass = "";
  $waterresist = "";
  $size = "";
  $description = $sex . $year . $glass . $waterresist . $size;

  $offer->appendChild($dom->createElement("currencyId", "RUB"));
  $offer->appendChild($dom->createElement("categoryId", $row['IBLOCK_SECTION_ID']));
  $offer->appendChild($dom->createElement("picture", $strFile));
  $offer->appendChild($dom->createElement("delivery", "true"));


  $offer->appendChild($dom->createElement("typePrefix", $props['b2b_itemNameRus']['VALUE']));
  $offer->appendChild($dom->createElement("vendor", $vendor));
  $offer->appendChild($dom->createElement("market_category", $props['b2b_fullEquipmentName']['VALUE']));
  $offer->appendChild($dom->createElement("model", $row['NAME']));

  $offer->appendChild($dom->createElement("manufacturer_warranty", "true"));
  $offer->appendChild($dom->createElement("seller_warranty", "true"));
  
    if ($row['IBLOCK_SECTION_ID']==923){
        $offer->appendChild($dom->createElement("description", (empty($row["DETAIL_TEXT"])?$description:$row["DETAIL_TEXT"])));
        //$offer->appendChild($dom->createElement("sales_notes", iconv('WINDOWS-1251', 'UTF-8', "Доп. выгода до 6000руб!")));
        $offer->appendChild($dom->createElement("sales_notes", ""));
        $offer->appendChild($dom->createElement("vendorCode", $props['b2b_producer']['VALUE']));
        $cost_summ = 0;
    }else{
      $offer->appendChild($dom->createElement("description", $description));
      //$offer->appendChild($dom->createElement("sales_notes", iconv('WINDOWS-1251', 'UTF-8', "Гарантия низкой цены.")));
      $offer->appendChild($dom->createElement("sales_notes", ""));
      $offer->appendChild($dom->createElement("vendorCode", $props['b2b_producer']['VALUE']));
      $cost_summ = 0;
    }
	
	if (!empty($props["stock"]["VALUE"])){
		$condition = $dom->createElement("condition");
		$condition->setAttribute("type", "used");
		$offer->appendChild($condition);
		$option = $dom->createElement("reason", $props["stock"]["VALUE"]);
		$condition->appendChild($option);
	}
    /****************/

    if (in_array($row['CODE'], $in_stock_arr)) {
        $day = 0;
    } else {
        $day = 2;
    }

    $delivery_options = $dom->createElement("delivery-options");
    $offer->appendChild($delivery_options);
    $option = $dom->createElement("option");
    $delivery_options->appendChild($option);
    $option->setAttribute("cost", $cost_summ);
    $option->setAttribute("days", $day);
    $option->setAttribute("order-before", 9);

    /*******************/

    foreach ($props as $prop){        
        if (empty($prop["VALUE"])) continue;
        if (!in_array($prop["ID"], [1210,1211,1212,1213,1214,1215,1216,1217,1218,1219,1220,1221,1222,1223,1224,1225,1170,1176])) continue;
        $domElement = $dom->createElement("param", htmlspecialchars($prop["VALUE"]));
        $domAttribute = $offer->setAttribute('name', trim(preg_replace('/\[.*?\]/', '', $prop["NAME"])));
        $domElement->appendChild($domAttribute);
        $offer->appendChild($domElement);
        //$dom->setAttribute('name', trim(preg_replace('/\[.*?\]/', '', $prop["NAME"])));
    }
}


$dom->formatOutput = true;
$mail = $dom->saveXML();
header('Content-Type: text/xml; charset=windows-1251');
echo $mail;

?>
<?
function first_letter_up($string, $coding = 'utf-8')
{
  if (function_exists('mb_strtoupper') && function_exists('mb_substr') && !empty($string)) {
    preg_match('#(.)#us', mb_strtoupper(mb_strtolower($string, $coding), $coding), $matches);
    $string = $matches[1] . mb_substr($string, 1, mb_strlen($string, $coding), $coding);
  } else {
    $string = ucfirst($string);
  }

  return $string;
}

?>