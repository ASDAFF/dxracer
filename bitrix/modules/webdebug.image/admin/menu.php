<?
IncludeModuleLangFile(__FILE__);

if($APPLICATION->GetGroupRight("webdebug.image") >= "R") {
	$aMenu = array(
		"parent_menu" => "global_menu_content",
		"section" => "webdebug_image",
		"sort" => 1,
		"text" => GetMessage("WEBDEBUG_IMAGE_MENU_PROFILES_NAME"),
		"title" => GetMessage("WEBDEBUG_IMAGE_MENU_PROFILES_TEXT"),
		"url" => "webdebug_image_profiles.php?lang=".LANGUAGE_ID,
		"icon" => "webdebug_image_icon_17",
		"more_url" => Array("webdebug_image_profile_edit.php"),
		"page_icon" => "webdebug_image_icon_34",
	);
	return $aMenu;
}
return false;
?>
