<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

if (CModule::IncludeModule("webdebug.image")) {
	// Set defaults
	if (!isset($arParams["RETURN"]) || !in_array($arParams["RETURN"],array("IMAGE","TEMPLATE","ARRAY","SRC","DEBUG"))) $arParams["RETURN"]="IMAGE";
	$arParams["IMAGE"] = trim($arParams["IMAGE"]);
	$arParams["DESCRIPTION"] = trim($arParams["DESCRIPTION"]);
	if (is_numeric($arParams["IMAGE"]) && IntVal($arParams["IMAGE"])>0) {
		$arResult["FILE"] = CFile::GetFileArray($arParams["IMAGE"]);
		$arParams["IMAGE"] = $arResult["FILE"]["SRC"];
		$arParams["DESCRIPTION"] = $arResult["FILE"]["DESCRIPTION"];
	}
	
	if (trim($arParams["IMAGE"])!="") {
		// Prepare to process image
		$ProfileID = trim($arParams["PROFILE"]);
		if ($ProfileID=="") $ProfileID = 1;
		$resProfile = CWebdebugImageProfile::GetByID($ProfileID);
		
		// Set image parameters from profile
		if ($arProfile = $resProfile->GetNext()) {
			$arResult["IMAGE"] = "";
			$arResult["FILE"] = "";
			$arResult["PROFILE"] = $arProfile;
			
			$arResult["IMAGE"] = CWebdebugImageProfile::Resize($arProfile, $arParams["IMAGE"], $arParams["CACHE_IMAGE"]=="Y" ? true : false);
			$arResult["FILE"] = CFile::MakeFileArray($arResult["IMAGE"]);
			$arSize = getimagesize($arResult["FILE"]["tmp_name"]);
			$Pos = strrpos($arResult["IMAGE"], "/");
			$arResult["FILE"] = array(
				"TIMESTAMP_X" => date("Y-m-d H:i:s", filemtime($arResult["FILE"]["tmp_name"])),
				"MODULE_ID" => "webdebug.image",
				"HEIGHT" => $arSize[1],
				"WIDTH" => $arSize[0],
				"FILE_SIZE" => $arResult["FILE"]["size"],
				"CONTENT_TYPE" => $arResult["FILE"]["type"],
				"SUBDIR" => $Pos!==false ? substr($arResult["IMAGE"], 0, $Pos+1) : "",
				"FILE_NAME" => $arResult["IMAGE"],
				"ORIGINAL_NAME" => $arResult["FILE"]["name"],
				"DESCRIPTION" => $arParams["DESCRIPTION"],
				"~src" => $arResult["FILE"]["tmp_name"],
				"SRC" => $arResult["IMAGE"],
			);
			
			// Return
			if ($arParams["RETURN"]=="IMAGE") {
				print "<img src=\"{$arResult["IMAGE"]}\" width=\"{$arResult["FILE"]["WIDTH"]}\" height=\"{$arResult["FILE"]["HEIGHT"]}\" alt=\"{$arResult["FILE"]["DESCRIPTION"]}\" />";
				return true;
			} elseif ($arParams["RETURN"]=="ARRAY") {
				return $arResult["FILE"];
			} elseif ($arParams["RETURN"]=="SRC") {
				return $arResult["IMAGE"];
			} elseif($arParams["RETURN"]=="DEBUG") {
				print "<pre>".print_r($arResult,true)."</pre>";
				return true;
			} else {
				$this->IncludeComponentTemplate();
				return true;
			}
		} elseif($arParams["DISPLAY_ERRORS"]!="N") {
			ShowError(GetMessage("WEBDEBUG_IMAGE_ERROR_NO_PROFILE_FOUND"));
		}
	} elseif($arParams["DISPLAY_ERRORS"]!="N") {
		ShowError(GetMessage("WEBDEBUG_IMAGE_ERROR_NO_IMAGE"));
	}
} elseif($arParams["DISPLAY_ERRORS"]!="N") {
	ShowError(GetMessage("WEBDEBUG_IMAGE_ERROR_NO_MODULE"));
}

?>