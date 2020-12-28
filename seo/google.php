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
echo $_SERVER['HTTP_HOST'];
//46 - citizen
//59  -casio
if($_SERVER['HTTP_HOST']!="timeavenue.su:443"){
$domain = "https://time-avenue.com";
$save_xml = 0;
}else{
$save_xml = 1;
$domain = "https://timeavenue.su";
}
$arSelect = Array("ID","PROPERTY_PROP3", "IBLOCK_ID", "NAME","IBLOCK_SECTION_ID","DETAIL_PAGE_URL","CATALOG_GROUP_1","DETAIL_PICTURE","PROPERTY_PROP12");
$arFilter = Array("IBLOCK_ID" => 9, "ACTIVE" => "Y", "!PROPERTY_PROP13" => false,"SECTION_ID"=>array(13,1,5,3));
$results = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$google_product_category = "Предметы одежды и аксессуары > Ювелирные изделия > Часы";
$product_type = "Часы";
$availability = "in stock";
$dom = new domDocument("1.0", "utf-8");

$root = $dom->createElement("rss"); // Создаём корневой элемент
$root->setAttribute("date", date("Y-m-d H:i"));
$root->setAttribute("xmlns:g", "http://base.google.com/ns/1.0");
$root->setAttribute("version", "2.0");
$dom->appendChild($root);
$shop = $root->appendChild($dom->createElement('channel'));
$shop->appendChild($dom->createElement("title", "TimeAvenue оригинальные часы Швейцария и Япония"));
$shop->appendChild($dom->createElement("link", $domain));
$shop->appendChild($dom->createElement("description", "Наручные часы в интернет-магазине: оригинальные брендовые часы"));
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
    $description = $sex." наручные часы  ".$brand." ".$row ['CODE']."  - 100% оригинал, гарантия 2 года.";
	unset($image);
        $image = $domain. "". CFile::GetPath($row['DETAIL_PICTURE']);
        

    $item = $shop->appendChild($dom->createElement('item'));
    $item->appendChild($dom->createElement("title",  ucfirst($sex)." " .$row['NAME']));
    $item->appendChild($dom->createElement("link", $domain."" . $row['DETAIL_PAGE_URL']));
    $item->appendChild($dom->createElement("description",$description ));
    $item->appendChild($dom->createElement("g:id",$row['ID']));
    $item->appendChild($dom->createElement("g:condition","new" ));
    $item->appendChild($dom->createElement("g:price",str_replace(".00", "",$price)." RUB"));
    $item->appendChild($dom->createElement("g:availability",$availability ));
    $item->appendChild($dom->createElement("g:image_link", $image));
    $item->appendChild($dom->createElement("g:product_type",$google_product_category));
    $item->appendChild($dom->createElement("g:brand",$brand));
    $item->appendChild($dom->createElement("g:gtin",$row['PROPERTY_PROP12_VALUE'] ));
    }
    $dom->formatOutput = true;
    if($save_xml!=1){
        $dom->save('/home/bitrix/www/seo/google.xml');
        header('Content-Type: text/xml; charset=utf-8');
        header("Location: google.xml");
    }else{
        $dom->save('/home/bitrix/www/seo/google-su.xml');
        header('Content-Type: text/xml; charset=utf-8');
        header("Location: google-su.xml");
    }
    
    
   // echo $mail;
?>
