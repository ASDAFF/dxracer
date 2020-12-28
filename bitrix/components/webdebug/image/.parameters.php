<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arProfiles = array();
if (CModule::IncludeModule("webdebug.image")) {
	$ResProfiles = CWebdebugImageProfile::GetList(array("SORT"=>"ASC","NAME"=>"ASC"),array("ACTIVE"=>"Y"));
	while ($arProfile = $ResProfiles->GetNext(false,false)) {
		$arProfiles[($arProfile["CODE"] ? $arProfile["CODE"] : $arProfile["ID"])] = "[".($arProfile["CODE"] ? $arProfile["CODE"] : $arProfile["ID"])."] ".$arProfile["NAME"];
	}
}

$arComponentParameters = array(
	"GROUPS" => array(
		"PROFILE" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE"),
			"SORT" => "10",
		),
		"SOURCE" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_SOURCE"),
			"SORT" => "20",
		),
		"CACHE_SETTINGS" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_CACHE_SETTINGS"),
			"SORT" => "30",
		),
	),
	"PARAMETERS" => array(
		"PROFILE" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_PROFILE"), 
			"TYPE" => "LIST",
			"VALUES" => $arProfiles,
			"DEFAULT" => "default", 
			"PARENT" => "PROFILE",
		),
		"RETURN" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN"), 
			"TYPE" => "LIST",
			"VALUES" => array(
				"TEMPLATE" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN_TEMPLATE"),
				"ARRAY" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN_ARRAY"),
				"SRC" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN_SRC"),
				"IMAGE" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN_IMAGE"),
				"DEBUG" => GetMessage("WEBDEBUG_IMAGE_GROUP_PROFILE_RETURN_DEBUG"),
			),
			"DEFAULT" => "TEMPLATE", 
			"PARENT" => "PROFILE",
		),
		"CACHE_IMAGE"  =>  array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_CACHE_CACHE_IMAGE"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N", 
			"PARENT" => "CACHE_SETTINGS",
		),
		"IMAGE" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_SOURCE_IMAGE"), 
			"TYPE" => "TEXT",
			"SIZE" => "30",
			"DEFAULT" => "", 
			"PARENT" => "SOURCE",
		),
		"DESCRIPTION" => array(
			"NAME" => GetMessage("WEBDEBUG_IMAGE_GROUP_SOURCE_DESCRIPTION"), 
			"TYPE" => "TEXT",
			"SIZE" => "30",
			"DEFAULT" => "", 
			"PARENT" => "SOURCE",
		),
		"DISPLAY_ERRORS"  =>  array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WEBDEBUG_IMAGE_DISPLAY_ERRORS"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y", 
		),
	),
)

?>