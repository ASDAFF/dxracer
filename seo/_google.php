<?
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
//46 - citizen
//59  -casio
$arSelect = Array("ID","PROPERTY_PROP3", "IBLOCK_ID", "NAME","IBLOCK_SECTION_ID","DETAIL_PAGE_URL","CATALOG_GROUP_1","DETAIL_PICTURE","PROPERTY_PROP12");
$arFilter = Array("IBLOCK_ID" => 9, "ACTIVE" => "Y", "!PROPERTY_PROP13" => false,"SECTION_ID"=>array(13,1,5));
$results = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);


$google_product_category = "Предметы одежды и аксессуары > Ювелирные изделия > Часы";
$product_type = "Часы";
$availability = "in stock";


echo "title | id | availability | condition | price | image link | url | brand | description | google_product_category | product_type | gtin\n";

while ($ob = $results->GetNextElement()) {
	$row = $ob->GetFields();

	if ($row["PROPERTY_PROP3_VALUE"] == trim("мужские"))
		$sex = " Мужские наручные часы.";
	if ($row["PROPERTY_PROP3_VALUE"] ==  trim("женские"))
		$sex = "Женские наручные часы.";

		$price = $row['CATALOG_PRICE_1'];
		$r = CIBlockSection::GetByID($row["IBLOCK_SECTION_ID"]);
        if($br = $r->GetNext()){
        $brand = $br['NAME'];
        }


$description = trim($row["PROPERTY_PROP3_VALUE"])." наручные часы  ".$brand." ".$row ['CODE']."  - 100% оригинал, гарантия 2 года.";
	unset($image);
		$image = "https://time-avenue.com" . CFile::GetPath($row['DETAIL_PICTURE']);
	$text = $row['NAME'] . " - " . $sex . " | " . $row['ID'] . " | " . $availability . " | new | " . $price . " | " . $image
		. " | " . $row['CODE'] . " | https://time-avenue.com" . $row['DETAIL_PAGE_URL'] . " | " . $brand . " | " . $description. " | " .
			$google_product_category . " | " . $product_type. " | " . $row['PROPERTY_PROP12_VALUE'];
	$text = str_replace("\r\n", '', $text);
	$text = str_replace("\n", '', $text);
	echo($text . "\n");

}

?>