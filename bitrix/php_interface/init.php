<? 
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "AddReviewEmailSend");
AddEventHandler("sale", "OnOrderNewSendEmail", "OnOrderNewSendEmailHandler");
AddEventHandler('search', 'BeforeIndex', "beforeIndexSearh");
function UpdatePrice(){
	CModule::IncludeModule('iblock');
	CModule::IncludeModule('catalog');
	$result = json_decode(file_get_contents("https://maxwatches.ru/api/TimePrice.php"));
        if(!empty($result)){
           // echo "<pre>"; print_r($data); echo "</pre>";
           foreach($result as $arr){
                $arSelect = Array("ID", "NAME","CATALOG_GROUP_1","CATALOG_GROUP_2");
                $arFilter = Array("IBLOCK_ID"=>9, "ACTIVE"=>"Y","CODE"=>$arr->code);
                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
                if($ob = $res->Fetch()){
                    if(!empty($arr->price) && !is_null($arr->price)){
                        $res = CPrice::GetList(array(),array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 1));
                        $proc = ($arr->price)/100*25;
                        $summ = ($arr->price) + $proc;
                        $newPrice = ceil($summ/100)*100;
                        $resultPrice = CPrice::GetList(array(),array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 1));
                        if ($arNew = $resultPrice ->Fetch()){
                                CPrice::Update($arNew["ID"], array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 1,"PRICE" => $newPrice));
                        }else{
                                CPrice::Add(array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 1,"PRICE" => $newPrice));
                        }
                    }
                    
                    if(!empty($arr->oldprice) && !is_null($arr->oldprice)){
                        $res = CPrice::GetList(array(),array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 2));
                        $Oldproc = ($arr->oldprice)/100*25;
                        $Oldsumm = ($arr->oldprice) + $Oldproc;
                        $newOldPrice = ceil($Oldsumm/100)*100;
                        $resultOldPrice = CPrice::GetList(array(),array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 2));
                        if ($arOld = $resultOldPrice ->Fetch()){
                                CPrice::Update($arOld["ID"], array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 2,"PRICE" => $newOldPrice));
                        }else{
                                CPrice::Add(array("PRODUCT_ID" => $ob['ID'],"CATALOG_GROUP_ID" => 2,"PRICE" => $newOldPrice));
                        }
                    }
                }
            }
        }

	 return "UpdatePrice();";
}
function availableList()
{
    $result = json_decode(file_get_contents("https://maxwatches.ru/api/nal.php"));
//echo "<pre>"; print_r(json_decode($result)); echo "</pre>";
    CModule::IncludeModule("iblock");
    CModule::IncludeModule("catalog");
    foreach($result as $arr){
        $allCodes[] = $arr;
    }
    if(!empty($allCodes)){
        $arSelect = Array("ID", "IBLOCK_ID", "NAME");
        $arFilter = Array("IBLOCK_ID" => 9, "PROPERTY_PROP13"=> 38,"IBLOCK_SECTION_ID"=>array(13,5,1));
        $db_list_elements = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ar_el = $db_list_elements->GetNext()) {
            $ELEMENT_ID = $ar_el["ID"];
            CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, 9, array("PROP13" => false));
            //echo "<pre>"; print_r($ELEMENT_ID); echo "</pre>";
        }

        $arSelect = Array("ID", "IBLOCK_ID", "CODE");
        $arFilter = Array("IBLOCK_ID" => 9, "CODE" => $allCodes);
        $obj = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

        while ($el = $obj->GetNext()) {

            $ELEMENT_ID = $el["ID"];  // код элемента
            CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array("PROP13" => 38));
            //$changed_codes[] = $el["CODE"];

            $arSelect = Array("ID", "IBLOCK_ID", "NAME", "CATALOG_GROUP_1", "DETAIL_PICTURE");
            $arFilter = Array("IBLOCK_ID" => 9, "ID" => $ELEMENT_ID);
            $db_list_elements = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
            while ($ar_el = $db_list_elements->GetNext()) {
                if (empty($ar_el["DETAIL_PICTURE"])) {
                    $not_image[] = $ar_el["NAME"];
                    continue;
                }
                if ((int)$ar_el["CATALOG_PRICE_1"] == 0) {
                    $el = new CIBlockElement;
                    $arLoadProductArray = Array("IBLOCK_ID" => 9, "ACTIVE" => "N");
                    $res = $el->Update($ELEMENT_ID, $arLoadProductArray, false, false);
                    $zero_price[] = $ar_el["NAME"];

                }
        }
    }
}
    return "availableList();";
}

function AddReviewEmailSend(&$arFields){
        if($arFields['IBLOCK_ID']==10){
            $SITE_ID = 's1'; 
            $IBLOCK_ID = 10; 
            $EVEN_TYPE = 'ADD_REVIEW'; 
            if ($arFields['IBLOCK_ID'] == $IBLOCK_ID && !empty($arFields['PREVIEW_TEXT'])) {
                $arFeedForm = array(
                    "ID"=>$arFields['ID'],
                    "NAME"=>$arFields['NAME'],
                    "TEXT"=>$arFields['PREVIEW_TEXT'],
                );
                CEvent::Send($EVEN_TYPE, $SITE_ID, $arFeedForm );
            }
		 
        }
    }
    function OnOrderNewSendEmailHandler($ID, &$eventName, &$arFields)
	{
        
		$db_props = CSaleOrderPropsValue::GetOrderProps($ID);

		while ($arProps = $db_props->Fetch()) {
			
			switch ($arProps["CODE"]) {
				case 'PHONE':
					$arFields["PHONE"] = $arProps["VALUE"];
					break;
				case 'ADRESS':
					$arFields["FULL_ADDRESS_FOR_MANAGERS"] = $arProps["VALUE"];
					break;
				case 'EMAIL':
					$arFields["EMAIL"] = $arProps["VALUE"];
					break;
				case 'FIO':
					$arFields["ORDER_USER"] = $arProps["VALUE"];
					break;
				
			}
		}
		
			
			$arFields["LOCATION"] = "";
			$arFields["ORDER_LIST_FOR_MANAGER"] = $arFields["ORDER_LIST"];

			$arFields["ORDER_LIST_FOR_HEADER"] = str_replace("\n", '', strip_tags($arFields["ORDER_LIST"]));
            $arOrder = CSaleOrder::GetByID($ID);
            $arFields["ORDER_DESCRIPTION"] = $arOrder["USER_DESCRIPTION"];
			$arDeliv = CSaleDelivery::GetByID($arOrder["DELIVERY_ID"]);
			$arFields["DELIVERY_NAME_FOR_MANAGERS"] = $arDeliv["NAME"];
			$arFields["DATE"] = Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("SHORT", LANG)));


			$dbBasketItems = CSaleBasket::GetList(
				array("NAME" => "ASC"),
				array("ORDER_ID" => $ID),
				false,
				false,
				array("ID", "NAME", "QUANTITY", "PRICE", "CURRENCY", "PRODUCT_ID")
			);
			while ($arBasketItems = $dbBasketItems->Fetch()) {
				$productIds[] = $arBasketItems;
			}
			
			foreach($productIds as $productID){
				$res = CIBlockElement::GetByID($productID["PRODUCT_ID"])->Fetch();
				$price[] = round($productID["PRICE"]);
				$code[] = $res["NAME"] ;
			}
			$arFields["CODES"] = implode('<br>', $code);
			$arFields["CODES_PRICES"] =  implode('<br>', $price);
			if($arFields["ORDER_CRM"]!='Y'){
				$arFields['SUBJECT']="Заказ №".$arFields['ORDER_ID']." на ".$arFields["ORDER_LIST_FOR_HEADER"];
				$arFields["EMAIL"]=$arFields["EMAIL"];
			}
			else
			{
				$arFields['SUBJECT']="Новый заказ RTX";
				$arFields["EMAIL"]="";
            }
            
            
    }
    


    function beforeIndexSearh($arFields)
    {
        if ($arFields['MODULE_ID'] == 'iblock' && $arFields['PARAM2'] == 9 && strlen($arFields['ITEM_ID']) > 0) {
           $dbArtt = CIBlockElement::GetProperty( $arFields["PARAM2"],$arFields["ITEM_ID"],array("sort" => "asc"),Array("CODE"=>"ART_SEARCH_2"));
                if($ar_2 = $dbArtt->Fetch()){
                            $arFields["TITLE"] .= " ".$ar_2["VALUE"];
                }

            $dbArt = CIBlockElement::GetProperty( $arFields["PARAM2"],$arFields["ITEM_ID"],array("sort" => "asc"),Array("CODE"=>"ART_SEARCH"));
                if($ar_1 = $dbArt->Fetch()){
                            $arFields["TITLE"] .= " ".$ar_1["VALUE"];
                }
            $db_props = CIBlockElement::GetProperty( $arFields["PARAM2"],$arFields["ITEM_ID"],array("sort" => "asc"),Array("CODE"=>"PROP13"));
            if($ar_props = $db_props->Fetch()){
                if(empty($ar_props["VALUE"])){
                        $arFields['TITLE'] = '';
                }
            }
        }
 
        return $arFields;
 
    }
    function Reindex_Search()
    {
        if(CModule::IncludeModule("search"))
        {
            $Result= false;
            $Result = CSearch::ReIndexAll(true, 60);
            while(is_array($Result))
            {
                $Result = CSearch::ReIndexAll(true, 60, $Result);
            }
        }
    return "Reindex_Search();";
    }
?>