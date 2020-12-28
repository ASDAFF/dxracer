<?
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-18);
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class webdebug_image extends CModule {
	var $MODULE_ID = "webdebug.image";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;

	function __construct() {
		$arModuleVersion = array();
		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");
		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)) {
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}
		$this->PARTNER_NAME = GetMessage("WEBDEBUG_IMAGE_PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("WEBDEBUG_IMAGE_PARTNER_URI");
		$this->MODULE_NAME = GetMessage("WEBDEBUG_IMAGE_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("WEBDEBUG_IMAGE_MODULE_DESC");
	}
	
	function InstallFiles() {
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/admin/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/admin", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/components/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/themes/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/images/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/images", true, true);
		// Copy corners to root
		$resSite = CSite::GetList(($by="sort"),($order="asc"));
		while ($arSite = $resSite->GetNext(false,false)) {
			CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/public/", $arSite['ABS_DOC_ROOT'].$arSite["DIR"], true, true);
		}
		return true;
	}
	
	function InstallDB() {
		global $APPLICATION, $DB, $DBType;
		$DBErrors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/db/{$DBType}/install.sql");
		if($DBErrors !== false) {
			$APPLICATION->ThrowException(implode("<br/>", $DBErrors));
		}
		return true;
	}

	function DoInstall() {
		global $APPLICATION, $step;
		$step = IntVal($step);
		if ($step < 2) {
			$APPLICATION->IncludeAdminFile(GetMessage("WEBDEBUG_IMAGE_STEP1_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/step1.php");
		} else {
			$this->InstallFiles();
			$this->InstallDB();
			RegisterModule($this->MODULE_ID);
			$this->AddDefaultProfile();
		}
		return true;
	}
	
	function UnInstallDB() {
		global $APPLICATION, $DB, $DBType;
		$DBErrors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/db/{$DBType}/uninstall.sql");
		if($DBErrors !== false) {
			$APPLICATION->ThrowException(implode("<br/>", $DBErrors));
		}
		return true;
	}
	
	function UnInstallFiles() {
		DeleteDirFilesEx("/bitrix/images/".($this->MODULE_ID));
		DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/themes/.default/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes/.default/");
		DeleteDirFilesEx("/bitrix/components/webdebug/image");
		rmdir($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/webdebug/"); // Delete "webdebug" folder if empty
		DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/admin/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/admin");
		return true;
	}

	function DoUninstall() {
		UnRegisterModule($this->MODULE_ID);
		$this->UnInstallDB();
		$this->UnInstallFiles();
		return true;
	}
	
	function AddDefaultProfile() {
		CModule::IncludeModule($this->MODULE_ID);
		require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/{$this->MODULE_ID}/include.php");
		if (class_exists('CWebdebugImageProfile')) {
			$WebdebugImageProfile = new CWebdebugImageProfile;
			$WebdebugImageProfile->Add(array(
				"ACTIVE" => "Y",
				"NAME" => GetMessage('WEBDEBUG_IMAGE_DEFAULT_PROFILE_NAME'),
				"CODE" => "default",
				"DESCRIPTION" => GetMessage('WEBDEBUG_IMAGE_DEFAULT_PROFILE_DESCR'),
				"SORT" => "1",
				"WIDTH" => "400",
				"HEIGHT" => "300",
				"TEXT_FLAG" => "Y",
				"TEXT_VALUE" => $_SERVER["HTTP_HOST"],
				"TEXT_POSITION_TYPE" => "place",
				"TEXT_POSITION_VALUE" => "BL",
				"TEXT_PADDING_H_VALUE" => 10,
				"TEXT_PADDING_V_VALUE" => 10,
				"CORNERS_FLAG" => "Y",
				"CORNERS_FILE" => "/image_processor_corners/corner_r10.png",
				"WATERMARK_POSITION_TYPE" => "place",
				"WATERMARK_POSITION_VALUE" => "BR",
				"WATERMARK_SPACE_H_VALUE" => "-10",
				"WATERMARK_SPACE_V_VALUE" => "-10",
			));
		}
	}
}
?>