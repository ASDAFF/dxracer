<?
global $DB, $DBType;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	"webdebug.image",
	array(
		"CWebdebugImageProcessor" => "classes/general/CWebdebugImageProcessor.php",
		"CWebdebugImageProfile" => "classes/{$DBType}/CWebdebugImageProfile.php",
	)
);

?>