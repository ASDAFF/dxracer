<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock")) return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];

$arSorts = Array("ASC"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_ASC"), "DESC"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_DESC"));
$arSortFields = Array(
	"ID"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_FID"),
	"NAME"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_FNAME"),
	"ACTIVE_FROM"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_FACT"),
	"SORT"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_FSORT"),
	"TIMESTAMP_X"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_FTSAMP"),
	"SHOW_COUNTER"=>GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_SHOW_COUNTER"),
);

$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch()) {
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S"))) {
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}

$arProfiles = array("-" => GetMessage("WEBDEBUG_PHOTOGALLERY_NOPROFILE"));
if (CModule::IncludeModule("webdebug.image")) {
	$ResProfiles = CWebdebugImageProfile::GetList(array("SORT"=>"ASC","NAME"=>"ASC"),array("ACTIVE"=>"Y"));
	while ($arProfile = $ResProfiles->GetNext(false,false)) {
		$arProfiles[($arProfile["CODE"] ? $arProfile["CODE"] : $arProfile["ID"])] = "[".($arProfile["CODE"] ? $arProfile["CODE"] : $arProfile["ID"])."] ".$arProfile["NAME"];
	}
}

$arJQuery = array(
	"1.8.3.min" => "1.8.3.min",
	"1.8.2.min" => "1.8.2.min",
	"1.8.1.min" => "1.8.1.min",
	"1.8.0.min" => "1.8.0.min",
	"1.7.2.min" => "1.7.2.min",
	"1.7.1.min" => "1.7.1.min",
	"1.7.min" => "1.7.min",
	"1.6.4.min" => "1.6.4.min",
	"1.6.3.min" => "1.6.3.min",
	"1.6.2.min" => "1.6.2.min",
	"1.6.1.min" => "1.6.1.min",
	"1.6.min" => "1.6.min",
	"1.5.min" => "1.5.min",
	"1.5.2.min" => "1.5.2.min",
	"1.5.1.min" => "1.5.1.min",
	"1.4.min" => "1.4.min",
	"1.4.4.min" => "1.4.4.min",
	"1.4.3.min" => "1.4.3.min",
	"1.4.2.min" => "1.4.2.min",
	"1.4.1.min" => "1.4.1.min",
	"1.3.min" => "1.3.min",
	"1.3.2.min" => "1.3.2.min",
	"1.3.1.min" => "1.3.1.min",
	"1.2.min" => "1.2.min",
);

$arComponentParameters = array(
	"GROUPS" => array(
		"IMAGE_PROCESSOR_SETTINGS" => array(
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_PROCESSOR_SETTINGS"),
			"SORT" => "110",
		),
		"JQUERY_SETTINGS" => array(
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_JQUERY_SETTINGS"),
			"SORT" => "1200",
		)
	),
	"PARAMETERS" => array(
		"AJAX_MODE" => array(),
		"IBLOCK_TYPE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_LIST_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "photos",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_LIST_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => 'photos',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"PARENT_SECTION" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_IBLOCK_SECTION_ID"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		"PARENT_SECTION_CODE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_IBLOCK_SECTION_CODE"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		"INCLUDE_SUBSECTIONS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_INCLUDE_SUBSECTIONS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"NEWS_COUNT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_LIST_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "15",
		),
		"SORT_BY1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_IBORD1"),
			"TYPE" => "LIST",
			"DEFAULT" => "ACTIVE_FROM",
			"VALUES" => $arSortFields,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_ORDER1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_IBBY1"),
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_BY2" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_IBORD2"),
			"TYPE" => "LIST",
			"DEFAULT" => "SORT",
			"VALUES" => $arSortFields,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_ORDER2" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_IBBY2"),
			"TYPE" => "LIST",
			"DEFAULT" => "ASC",
			"VALUES" => $arSorts,
			"ADDITIONAL_VALUES" => "Y",
		),
		"FILTER_NAME" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_FILTER"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"FIELD_CODE" => CIBlockParameters::GetFieldCode(GetMessage("WEBDEBUG_PHOTOGALLERY_IBLOCK_FIELD"), "DATA_SOURCE"),
		"PROPERTY_CODE" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_PROPERTY"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $arProperty_LNS,
			"ADDITIONAL_VALUES" => "Y",
		),
		"CHECK_DATES" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_CHECK_DATES"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
			"DETAIL",
			"DETAIL_URL",
			GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_DETAIL_PAGE_URL"),
			"",
			"URL_TEMPLATES"
		),
		"PREVIEW_TRUNCATE_LEN" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_PREVIEW_TRUNCATE_LEN"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
		"ACTIVE_DATE_FORMAT" => CIBlockParameters::GetDateFormat(GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_ACTIVE_DATE_FORMAT"), "ADDITIONAL_SETTINGS"),
		"SET_TITLE" => Array(),
		"SET_STATUS_404" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_SET_STATUS_404"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"SHOW_ERRORS" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_SHOW_ERRORS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"INCLUDE_IBLOCK_INTO_CHAIN" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_INCLUDE_IBLOCK_INTO_CHAIN"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"ADD_SECTIONS_CHAIN" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_ADD_SECTIONS_CHAIN"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => Array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_HIDE_LINK_WHEN_NO_DETAIL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
		"CACHE_FILTER" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_CACHE_FILTER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"PROFILE_PREVIEW" => array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_PROFILE_PREVIEW"), 
			"TYPE" => "LIST",
			"VALUES" => $arProfiles,
			"DEFAULT" => "default", 
		),
		"PROFILE_DETAIL" => array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_PROFILE_DETAIL"), 
			"TYPE" => "LIST",
			"VALUES" => $arProfiles,
			"DEFAULT" => "default", 
		),
		"USE_FOR_PREVIEW" => array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR_PREVIEW"), 
			"TYPE" => "LIST",
			"VALUES" => array(
				"PREVIEW" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR___PREVIEW"),
				"DETAIL" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR___DETAIL"),
			),
			"DEFAULT" => "DETAIL", 
		),
		"USE_FOR_DETAIL" => array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR_DETAIL"), 
			"TYPE" => "LIST",
			"VALUES" => array(
				"PREVIEW" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR___PREVIEW"),
				"DETAIL" => GetMessage("WEBDEBUG_PHOTOGALLERY_USE_FOR___DETAIL"),
			),
			"DEFAULT" => "DETAIL", 
		),
		"SKIP_IF_NO_DETAIL"  =>  array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_SKIP_IF_NO_DETAIL"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y", 
		),
		"REPLACE_PREVIEW_WITH_DETAIL"  =>  array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_REPLACE_PREVIEW_WITH_DETAIL"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N", 
		),
		"DISPLAY_ERRORS"  =>  array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_DISPLAY_ERRORS"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N", 
		),
		"CACHE_IMAGE" => array(
			"PARENT" => "IMAGE_PROCESSOR_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_CACHE_IMAGE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"INCLUDE_JQUERY" => array(
			"PARENT" => "JQUERY_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_INCLUDE_JQUERY"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
	),
);

if ($arCurrentValues["INCLUDE_JQUERY"]=="Y") {
	$arComponentParameters["PARAMETERS"]["JQUERY_VERSION"] = array(
		"PARENT" => "JQUERY_SETTINGS",
		"NAME" => GetMessage("WEBDEBUG_PHOTOGALLERY_JQUERY_VERSION"), 
		"TYPE" => "LIST",
		"VALUES" => $arJQuery,
		"DEFAULT" => "1.7.1.min", 
		"ADDITIONAL_VALUES" => "Y",
	);
}

CIBlockParameters::AddPagerSettings($arComponentParameters, GetMessage("WEBDEBUG_PHOTOGALLERY_DESC_PAGER_NEWS"), true, true);
?>