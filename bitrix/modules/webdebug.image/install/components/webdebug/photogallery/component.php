<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CPageOption::SetOptionString("main", "nav_page_in_session", "N");

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
if(strlen($arParams["IBLOCK_TYPE"])<=0) $arParams["IBLOCK_TYPE"] = "photos";
$arParams["IBLOCK_ID"] = IntVal($arParams["IBLOCK_ID"]);
$arParams["PARENT_SECTION"] = IntVal($arParams["PARENT_SECTION"]);
$arParams["INCLUDE_SUBSECTIONS"] = $arParams["INCLUDE_SUBSECTIONS"]!="N";

$arParams["SORT_BY1"] = trim($arParams["SORT_BY1"]);
if(strlen($arParams["SORT_BY1"])<=0)
	$arParams["SORT_BY1"] = "ACTIVE_FROM";
if(!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER1"]))
	 $arParams["SORT_ORDER1"]="DESC";

if(strlen($arParams["SORT_BY2"])<=0)
	$arParams["SORT_BY2"] = "SORT";
if(!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER2"]))
	 $arParams["SORT_ORDER2"]="ASC";

if(strlen($arParams["FILTER_NAME"])<=0 || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"])) {
	$arrFilter = array();
} else {
	$arrFilter = $GLOBALS[$arParams["FILTER_NAME"]];
	if(!is_array($arrFilter)) $arrFilter = array();
}

$arParams["CHECK_DATES"] = $arParams["CHECK_DATES"]!="N";

if(!is_array($arParams["FIELD_CODE"]))
	$arParams["FIELD_CODE"] = array();
foreach($arParams["FIELD_CODE"] as $key=>$val)
	if(!$val)
		unset($arParams["FIELD_CODE"][$key]);

if(!is_array($arParams["PROPERTY_CODE"]))
	$arParams["PROPERTY_CODE"] = array();
foreach($arParams["PROPERTY_CODE"] as $key=>$val)
	if($val==="")
		unset($arParams["PROPERTY_CODE"][$key]);

$arParams["DETAIL_URL"]=trim($arParams["DETAIL_URL"]);

$arParams["NEWS_COUNT"] = IntVal($arParams["NEWS_COUNT"]);
if($arParams["NEWS_COUNT"]<=0)
	$arParams["NEWS_COUNT"] = 15;

$arParams["CACHE_FILTER"] = $arParams["CACHE_FILTER"]=="Y";
if(!$arParams["CACHE_FILTER"] && count($arrFilter)>0)
	$arParams["CACHE_TIME"] = 0;

$arParams["SET_TITLE"] = $arParams["SET_TITLE"]!="N";
$arParams["ADD_SECTIONS_CHAIN"] = $arParams["ADD_SECTIONS_CHAIN"]=="Y";
$arParams["INCLUDE_IBLOCK_INTO_CHAIN"] = $arParams["INCLUDE_IBLOCK_INTO_CHAIN"]=="Y";
$arParams["ACTIVE_DATE_FORMAT"] = trim($arParams["ACTIVE_DATE_FORMAT"]);
if(strlen($arParams["ACTIVE_DATE_FORMAT"])<=0)
	$arParams["ACTIVE_DATE_FORMAT"] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
$arParams["PREVIEW_TRUNCATE_LEN"] = IntVal($arParams["PREVIEW_TRUNCATE_LEN"]);
$arParams["HIDE_LINK_WHEN_NO_DETAIL"] = $arParams["HIDE_LINK_WHEN_NO_DETAIL"]=="Y";

$arParams["DISPLAY_TOP_PAGER"] = $arParams["DISPLAY_TOP_PAGER"]=="Y";
$arParams["DISPLAY_BOTTOM_PAGER"] = $arParams["DISPLAY_BOTTOM_PAGER"]!="N";
$arParams["PAGER_TITLE"] = trim($arParams["PAGER_TITLE"]);
$arParams["PAGER_SHOW_ALWAYS"] = $arParams["PAGER_SHOW_ALWAYS"]!="N";
$arParams["PAGER_TEMPLATE"] = trim($arParams["PAGER_TEMPLATE"]);
$arParams["PAGER_DESC_NUMBERING"] = $arParams["PAGER_DESC_NUMBERING"]=="Y";
$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"] = IntVal($arParams["PAGER_DESC_NUMBERING_CACHE_TIME"]);
$arParams["PAGER_SHOW_ALL"] = $arParams["PAGER_SHOW_ALL"]=="Y";

if($arParams["DISPLAY_TOP_PAGER"] || $arParams["DISPLAY_BOTTOM_PAGER"]) {
	$arNavParams = array(
		"nPageSize" => $arParams["NEWS_COUNT"],
		"bDescPageNumbering" => $arParams["PAGER_DESC_NUMBERING"],
		"bShowAll" => $arParams["PAGER_SHOW_ALL"],
	);
	$arNavigation = CDBResult::GetNavParams($arNavParams);
	if($arNavigation["PAGEN"]==0 && $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"]>0)
		$arParams["CACHE_TIME"] = $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"];
} else {
	$arNavParams = array(
		"nTopCount" => $arParams["NEWS_COUNT"],
		"bDescPageNumbering" => $arParams["PAGER_DESC_NUMBERING"],
	);
	$arNavigation = false;
}

$arParams["USE_PERMISSIONS"] = $arParams["USE_PERMISSIONS"]=="Y";
if(!is_array($arParams["GROUP_PERMISSIONS"]))
	$arParams["GROUP_PERMISSIONS"] = array(1);

$bUSER_HAVE_ACCESS = !$arParams["USE_PERMISSIONS"];
if($arParams["USE_PERMISSIONS"] && isset($GLOBALS["USER"]) && is_object($GLOBALS["USER"])) {
	$arUserGroupArray = $GLOBALS["USER"]->GetUserGroupArray();
	foreach($arParams["GROUP_PERMISSIONS"] as $PERM) {
		if(in_array($PERM, $arUserGroupArray)) {
			$bUSER_HAVE_ACCESS = true;
			break;
		}
	}
}

$UseForPreview = "DETAIL_PICTURE";
if ($arParams["USE_FOR_PREVIEW"]=="PREVIEW") $UseForPreview = "PREVIEW_PICTURE";

$UseForDetail = "DETAIL_PICTURE";
if ($arParams["USE_FOR_DETAIL"]=="PREVIEW") $UseForDetail = "PREVIEW_PICTURE";

if (CModule::IncludeModule("webdebug.image")) {
	if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups()), $bUSER_HAVE_ACCESS, $arNavigation, $arrFilter))) {
		if(!CModule::IncludeModule("iblock")) {
			$this->AbortResultCache();
			ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
			return;
		}
		if(is_numeric($arParams["IBLOCK_ID"])) {
			$rsIBlock = CIBlock::GetList(array(), array(
				"ACTIVE" => "Y",
				"ID" => $arParams["IBLOCK_ID"],
			));
		} else {
			$rsIBlock = CIBlock::GetList(array(), array(
				"ACTIVE" => "Y",
				"CODE" => $arParams["IBLOCK_ID"],
				"SITE_ID" => SITE_ID,
			));
		}
		if($arResult = $rsIBlock->GetNext()) {
			$arResult["USER_HAVE_ACCESS"] = $bUSER_HAVE_ACCESS;
			// SELECT
			$arSelect = array_merge($arParams["FIELD_CODE"], array(
				"ID",
				"IBLOCK_ID",
				"IBLOCK_SECTION_ID",
				"NAME",
				"ACTIVE_FROM",
				"DETAIL_PAGE_URL",
				"PREVIEW_TEXT",
				"PREVIEW_TEXT_TYPE",
				"PREVIEW_PICTURE",
				"DETAIL_PICTURE",
				"SHOW_COUNTER",
			));
			$bGetProperty = count($arParams["PROPERTY_CODE"])>0;
			if($bGetProperty)
				$arSelect[]="PROPERTY_*";
			//WHERE
			$arFilter = array (
				"IBLOCK_ID" => $arResult["ID"],
				"IBLOCK_LID" => SITE_ID,
				"ACTIVE" => "Y",
				"CHECK_PERMISSIONS" => "Y",
			);
			if ($arParams["SKIP_IF_NO_DETAIL"]!="N") {
				$arFilter["!DETAIL_PICTURE"] = false;
			}

			if($arParams["CHECK_DATES"])
				$arFilter["ACTIVE_DATE"] = "Y";

			$arParams["PARENT_SECTION"] = CIBlockFindTools::GetSectionID(
				$arParams["PARENT_SECTION"],
				$arParams["PARENT_SECTION_CODE"],
				array(
					"GLOBAL_ACTIVE" => "Y",
					"IBLOCK_ID" => $arResult["ID"],
				)
			);

			if($arParams["PARENT_SECTION"]>0) {
				$arFilter["SECTION_ID"] = $arParams["PARENT_SECTION"];
				if($arParams["INCLUDE_SUBSECTIONS"])
					$arFilter["INCLUDE_SUBSECTIONS"] = "Y";

				$arResult["SECTION"]= array("PATH" => array());
				$rsPath = GetIBlockSectionPath($arResult["ID"], $arParams["PARENT_SECTION"]);
				$rsPath->SetUrlTemplates("", $arParams["SECTION_URL"], $arParams["IBLOCK_URL"]);
				while($arPath=$rsPath->GetNext()) {
					$arResult["SECTION"]["PATH"][] = $arPath;
				}
			} else {
				$arResult["SECTION"]= false;
			}
			//ORDER BY
			$arSort = array(
				$arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],
				$arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"],
			);
			if(!array_key_exists("ID", $arSort))
				$arSort["ID"] = "DESC";

			$obParser = new CTextParser;
			$arResult["ITEMS"] = array();
			$arResult["ELEMENTS"] = array();
			$rsElement = CIBlockElement::GetList($arSort, array_merge($arFilter, $arrFilter), false, $arNavParams, $arSelect);
			$rsElement->SetUrlTemplates($arParams["DETAIL_URL"], "", $arParams["IBLOCK_URL"]);
			while($obElement = $rsElement->GetNextElement()) {
				$arItem = $obElement->GetFields();
				$arButtons = CIBlock::GetPanelButtons(
					$arItem["IBLOCK_ID"],
					$arItem["ID"],
					0,
					array("SECTION_BUTTONS"=>false, "SESSID"=>false)
				);
				$arItem["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
				$arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

				if($arParams["PREVIEW_TRUNCATE_LEN"] > 0)
					$arItem["PREVIEW_TEXT"] = $obParser->html_cut($arItem["PREVIEW_TEXT"], $arParams["PREVIEW_TRUNCATE_LEN"]);

				if(strlen($arItem["ACTIVE_FROM"])>0)
					$arItem["DISPLAY_ACTIVE_FROM"] = CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($arItem["ACTIVE_FROM"], CSite::GetDateFormat()));
				else
					$arItem["DISPLAY_ACTIVE_FROM"] = "";
				
				if ($arItem["DETAIL_PICTURE"]>0) $arItem["DETAIL_PICTURE"] = CFile::GetFileArray($arItem["DETAIL_PICTURE"]);
				if ($arParams["REPLACE_PREVIEW_WITH_DETAIL"]=="Y" && is_array($arItem["DETAIL_PICTURE"]) && !empty($arItem["DETAIL_PICTURE"]))
					$arItem["PREVIEW_PICTURE"] = $arItem["DETAIL_PICTURE"];
				else
					$arItem["PREVIEW_PICTURE"] = CFile::GetFileArray($arItem["PREVIEW_PICTURE"]);
				
				if (trim($arParams["PROFILE_PREVIEW"])!="" && trim($arParams["PROFILE_PREVIEW"])!="-") {
					$arPicture = $arItem[$UseForPreview];
					$arItem["PREVIEW_PICTURE"] = $APPLICATION->IncludeComponent("webdebug:image", "", array(
						"PROFILE" => $arParams["PROFILE_PREVIEW"],
						"RETURN" => "ARRAY",
						"IMAGE" => $arPicture["SRC"],
						"DESCRIPTION" => $arPicture["DESCRIPTION"] ? $arPicture["DESCRIPTION"] : $arItem["NAME"],
						"CACHE_IMAGE" => $arParams["CACHE_IMAGE"],
						"DISPLAY_ERRORS" => $arParams["DISPLAY_ERRORS"],
					), false, array("HIDE_ICONS"=>"Y"));
				}
				if (trim($arParams["PROFILE_DETAIL"])!="" && trim($arParams["PROFILE_DETAIL"])!="-") {
					$arPicture = $arItem[$UseForDetail];
					$arItem["DETAIL_PICTURE"] = $APPLICATION->IncludeComponent("webdebug:image", "", array(
						"PROFILE" => $arParams["PROFILE_DETAIL"],
						"RETURN" => "ARRAY",
						"IMAGE" => $arPicture["SRC"],
						"DESCRIPTION" => $arPicture["DESCRIPTION"] ? $arPicture["DESCRIPTION"] : $arItem["NAME"],
						"CACHE_IMAGE" => $arParams["CACHE_IMAGE"],
						"DISPLAY_ERRORS" => $arParams["DISPLAY_ERRORS"],
					), false, array("HIDE_ICONS"=>"Y"));
				}

				$arItem["FIELDS"] = array();
				foreach($arParams["FIELD_CODE"] as $code)
					if(array_key_exists($code, $arItem))
						$arItem["FIELDS"][$code] = $arItem[$code];

				if($bGetProperty)
					$arItem["PROPERTIES"] = $obElement->GetProperties();
				$arItem["DISPLAY_PROPERTIES"]=array();
				foreach($arParams["PROPERTY_CODE"] as $pid) {
					$prop = &$arItem["PROPERTIES"][$pid];
					if((is_array($prop["VALUE"]) && count($prop["VALUE"])>0) || (!is_array($prop["VALUE"]) && strlen($prop["VALUE"])>0)) {
						$arItem["DISPLAY_PROPERTIES"][$pid] = CIBlockFormatProperties::GetDisplayValue($arItem, $prop, "webdebug_photogallery_event");
					}
				}

				$arResult["ITEMS"][] = $arItem;
				$arResult["ELEMENTS"][] = $arItem["ID"];
			}
			$arResult["NAV_STRING"] = $rsElement->GetPageNavStringEx($navComponentObject, $arParams["PAGER_TITLE"], $arParams["PAGER_TEMPLATE"], $arParams["PAGER_SHOW_ALWAYS"]);
			$arResult["NAV_CACHED_DATA"] = $navComponentObject->GetTemplateCachedData();
			$arResult["NAV_RESULT"] = $rsElement;
			$this->SetResultCacheKeys(array(
				"ID",
				"IBLOCK_TYPE_ID",
				"LIST_PAGE_URL",
				"NAV_CACHED_DATA",
				"NAME",
				"SECTION",
				"ELEMENTS",
			));
			$arResult["GALLERY_ID"] = RandString("8");
			$this->IncludeComponentTemplate();
		} else {
			$this->AbortResultCache();
			if($arParams["SHOW_ERRORS"]==="Y")
				ShowError(GetMessage("WEBDEBUG_PHOTOGALLERY_ERROR_SECTION_NOT_FOUND"));
			if($arParams["SET_STATUS_404"]==="Y") {
				@define("ERROR_404", "Y");
				CHTTP::SetStatus("404 Not Found");
			}
		}
	}

	if(isset($arResult["ID"])) {
		if ($arParams["INCLUDE_JQUERY"]=="Y") {
			$arParams["JQUERY_VERSION"] = trim($arParams["JQUERY_VERSION"]);
			if ($arParams["JQUERY_VERSION"]=="")
				$arParams["JQUERY_VERSION"] = ".min";
			else
				$arParams["JQUERY_VERSION"] = "-".$arParams["JQUERY_VERSION"];
			$APPLICATION->AddHeadString("<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery".$arParams["JQUERY_VERSION"].".js\"></script>");
		}
		if ($arParams["INCLUDE_JQUERY_EASING"]=="Y") {
			$APPLICATION->AddHeadString("<script type=\"text/javascript\" src=\"http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js\"></script>");
		}
		$arTitleOptions = null;
		if($USER->IsAuthorized()) {
			if($APPLICATION->GetShowIncludeAreas() || (is_object($GLOBALS["INTRANET_TOOLBAR"]) && $arParams["INTRANET_TOOLBAR"]!=="N") || $arParams["SET_TITLE"]) {
				if(CModule::IncludeModule("iblock")){
					$arButtons = CIBlock::GetPanelButtons(
						$arResult["ID"],
						0,
						$arParams["PARENT_SECTION"],
						array("SECTION_BUTTONS"=>false)
					);

					if($APPLICATION->GetShowIncludeAreas())
						$this->AddIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));

					if(is_array($arButtons["intranet"]) && is_object($GLOBALS["INTRANET_TOOLBAR"]) && $arParams["INTRANET_TOOLBAR"]!=="N") {
						foreach($arButtons["intranet"] as $arButton)
							$GLOBALS["INTRANET_TOOLBAR"]->AddButton($arButton);
					}

					if($arParams["SET_TITLE"]) {
						$arTitleOptions = array(
							'ADMIN_EDIT_LINK' => $arButtons["submenu"]["edit_iblock"]["ACTION"],
							'PUBLIC_EDIT_LINK' => "",
							'COMPONENT_NAME' => $this->GetName(),
						);
					}
				}
			}
		}

		$this->SetTemplateCachedData($arResult["NAV_CACHED_DATA"]);

		if($arParams["SET_TITLE"]) {
			$APPLICATION->SetTitle($arResult["NAME"], $arTitleOptions);
		}

		if($arParams["INCLUDE_IBLOCK_INTO_CHAIN"] && isset($arResult["NAME"])) {
			if($arParams["ADD_SECTIONS_CHAIN"] && is_array($arResult["SECTION"]))
				$APPLICATION->AddChainItem($arResult["NAME"], strlen($arParams["IBLOCK_URL"]) > 0? $arParams["IBLOCK_URL"]: $arResult["LIST_PAGE_URL"]);
			else
				$APPLICATION->AddChainItem($arResult["NAME"]);
		}

		if($arParams["ADD_SECTIONS_CHAIN"] && is_array($arResult["SECTION"])) {
			foreach($arResult["SECTION"]["PATH"] as $arPath){
				$APPLICATION->AddChainItem($arPath["NAME"], $arPath["~SECTION_PAGE_URL"]);
			}
		}

		return $arResult["ELEMENTS"];
	}
}

?>