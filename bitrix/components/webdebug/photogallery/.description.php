<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("WEBDEBUG_IMAGE_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_DESC"),
	"ICON" => "/images/image.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "webdebug",
		"NAME" => GetMessage("WEBDEBUG_IMAGE_COMPONENT_SECTION_WEBDEBUG"),
		"SORT" => 1,
		"CHILD" => array(
			"ID" => "webdebug_images",
			"NAME" => GetMessage("WEBDEBUG_IMAGE_COMPONENT_SECTION_WEBDEBUG_IMAGES"),
			"SORT" => 100,
		),
	),
);

?>