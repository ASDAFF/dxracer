<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/webdebug.image/include.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/webdebug.image/prolog.php");
IncludeModuleLangFile(__FILE__);
?>

<br/>
<form action="/bitrix/admin/webdebug_image_profiles.php?lang=<?=LANGUAGE_ID?>" id="WebdebugImageImportForm" method="post" enctype="multipart/form-data">
	<div>
		<div class="webdebug-label"><?=GetMessage("WEBDEBUG_IMAGE_IMPORT_FILE")?></div><br/>
		<div class="webdebug-field">
			<input type="file" name="webdebug-import-file" />
			<input type="hidden" name="webdebug-import" value="Y" />
		</div>
	</div>
	<br/>
	<div>
		<div class="webdebug-label"><input type="checkbox" name="webdebug-field-truncate" id="webdebug-field-truncate" value="Y" /><label for="webdebug-field-truncate"><?=GetMessage("WEBDEBUG_IMAGE_IMPORT_TRUNCATE")?></label></div>
	</div>
	<br/>
	<div>
		<div class="webdebug-label"><input type="checkbox" name="webdebug-field-importfiles" id="webdebug-field-importfiles" value="Y" onchange="WebdebugImageImportFilesChecked(this);" /><label for="webdebug-field-importfiles"><?=GetMessage("WEBDEBUG_IMAGE_IMPORT_IMPORT_FILES")?></label></div>
	</div>
	<br/>
	<div>
		<div class="webdebug-label"><input type="checkbox" name="webdebug-field-replacetfiles" id="webdebug-field-replacetfiles" value="Y" disabled="disabled" /><label for="webdebug-field-replacetfiles"><?=GetMessage("WEBDEBUG_IMAGE_IMPORT_IMPORT_FILES_REPLACE")?></label></div>
	</div>
</form>

<script type="text/javascript">
function WebdebugImageImportFilesChecked(Sender) {
	if (Sender.checked===true) {
		document.getElementById("webdebug-field-replacetfiles").disabled=false;
	} else {
		document.getElementById("webdebug-field-replacetfiles").disabled=true;
	}
}
</script>