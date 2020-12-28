<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
require_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/webdebug.image/install/demo.php');
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/webdebug.image/include.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/webdebug.image/prolog.php");
IncludeModuleLangFile(__FILE__);

if (webdebug_image_demo_expired()) {
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	webdebug_image_show_demo();
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$ModuleRights = $APPLICATION->GetGroupRight("webdebug.image");
if($ModuleRights=="D") {
	$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
}

$APPLICATION->SetTitle(GetMessage("WEBDEBUG_IMAGE_APPLICATION_TITLE"));

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

if (!webdebug_image_demo_expired()) {
	webdebug_image_show_demo();
}

function WebdebugSelectBoxFromArray($Name, $Values, $Selected="", $Default="", $AddToTag="") {
	?>
	<select name="<?=$Name?>"<?if(trim($AddToTag)!=""):?> <?=trim($AddToTag)?><?endif?>>
		<?if($Default):?><option value="none"><?=$Default?></option><?endif?>
		<?foreach($Values as $Key => $Value):?>
		<option value="<?=$Key?>"<?if($Selected!="" && $Selected!="none" && $Key==$Selected):?> selected="selected"<?endif?>><?=$Value?></option>
		<?endforeach?>
	</select>
	<?
}

global $DB;
global $APPLICATION;

$ID = IntVal($_GET["ID"]);
$Mode = "add";
if ($ID>0) $Mode = "edit";

/////////////////////////////////////////////////////////////////////////////////////////////
// Defaults
/////////////////////////////////////////////////////////////////////////////////////////////
$arFields = array(
	"ACTIVE" => "Y",
	"NAME" => "",
	"CODE" => "",
	"SORT" => "100",
	"DESCRIPTION" => "",
	
	"SAVE_FOLDER" => "default",
	"SAVE_FOLDER_PATH" => "",
	"SAVE_MODE" => "folders",
	"SAVE_MODE_FILE_LENGTH" => "8",
	
	"CONVERT_MODE" => "",
	"CONVERT_MODE_JPEG_TYPE" => "quality",
	"CONVERT_MODE_JPEG_QUALITY_VALUE" => "85",
	"CONVERT_MODE_JPEG_SIZE_VALUE" => "25600",
	
	"RESIZE_FLAG" => "N",
	"WIDTH" => "600",
	"HEIGHT" => "500",
	"PIXELS" => "0",
	"RATIO_FLAG" => "N",
	"RATIOCROP_FLAG" => "N",
	"FILL_FLAG" => "N",
	"BACKGROUND_COLOR" => "FFFFFF",
	"NOZOOMIN_FLAG" => "N",
	"NOZOOMOUT_FLAG" => "N",
	"RATIO_X_FLAG" => "N",
	"RATIO_Y_FLAG" => "N",
	
	"BRIGHTNESS_FLAG" => "N",
	"BRIGHTNESS_VALUE" => "89",
	"CONTRAST_FLAG" => "N",
	"CONTRAST_VALUE" => "-66",
	"OPACITY_FLAG" => "N",
	"OPACITY_VALUE" => "45",
	"TINT_FLAG" => "N",
	"TINT_VALUE" => "FFFFFF",
	"NEGATIVE_FLAG" => "N",
	"GRAYSCALE_FLAG" => "N",
	"SHARPEN_FLAG" => "N",
	"SHARPEN_AMOUNT_FLAG" => "N",
	"SHARPEN_AMOUNT_VALUE" => "80",
	"SHARPEN_RADIUS_FLAG" => "N",
	"SHARPEN_RADIUS_VALUE" => "1",
	
	"TEXT_FLAG" => "N",
	"TEXT_VALUE" => "",
	"TEXT_DIRECTION_VALUE" => "h",
	"TEXT_COLOR" => "333333",
	"TEXT_OPACITY_VALUE" => "100",
	"TEXT_SIZE_VALUE" => "3",
	"TEXT_BACKGROUND_FLAG" => "N",
	"TEXT_BACKGROUND_COLOR" => "FFFFFF",
	"TEXT_BACKGROUND_OPACITY_VALUE" => "100",
	"TEXT_POSITION_TYPE" => "place",
	"TEXT_POSITION_VALUE" => "BL",
	"TEXT_SPACE_H_VALUE" => "4",
	"TEXT_SPACE_V_VALUE" => "4",
	"TEXT_PADDING_VALUE" => "2",
	"TEXT_PADDING_H_VALUE" => "0",
	"TEXT_PADDING_V_VALUE" => "0",
	
	"CORNERS_FLAG" => "N",
	"CORNERS_FILE" => "",
	
	"WATERMARK_FLAG" => "N",
	"WATERMARK_FILE" => "",
	"WATERMARK_POSITION_TYPE" => "place",
	"WATERMARK_POSITION_VALUE" => "BR",
	"WATERMARK_SPACE_H_VALUE" => "-10",
	"WATERMARK_SPACE_V_VALUE" => "-10",
	
	"REFLECTION_FLAG" => "N",
	"REFLECTION_HEIGHT_VALUE" => "50",
	"REFLECTION_SPACE_VALUE" => "0",
	"REFLECTION_COLOR" => "FFFFFF",
	"REFLECTION_OPACITY_FLAG" => "N",
	"REFLECTION_OPACITY_VALUE" => "100",
	
	"BORDER_FLAG" => "N",
	"BORDER_VALUE" => "",
	"BORDER_COLOR" => "FFFFFF",
	"BORDER_OPACITY_FLAG" => "N",
	"BORDER_OPACITY_VALUE" => "100",
	"BORDER_TRANSPARENT_FLAG" => "N",
	"BORDER_TRANSPARENT_VALUE" => "100",
	
	"FRAME_FLAG" => "N",
	"FRAME_VALUE" => "1",
	"FRAME_COLOR" => "FFFFFF",
	"FRAME_OPACITY_FLAG" => "N",
	"FRAME_OPACITY_VALUE" => "100",
	
	"BEVEL_FLAG" => "N",
	"BEVEL_VALUE" => "",
	"BEVEL_COLOR_1" => "",
	"BEVEL_COLOR_2" => "",
	
	"FLIP_FLAG" => "N",
	"FLIP_VALUE" => "",
	"ROTATE_FLAG" => "N",
	"ROTATE_VALUE" => "",
	"CROP_FLAG" => "N",
	"CROP_VALUE" => "",
	"PRECROP_FLAG" => "N",
	"PRECROP_VALUE" => "",
);

if (isset($_POST["save"]) && trim($_POST["save"])!="" || isset($_POST["apply"]) && trim($_POST["apply"])!="") {
	$arSaveFields = $_POST["fields"];
	if (!isset($arSaveFields["ACTIVE"]) || $arSaveFields["ACTIVE"]=="") $arSaveFields["ACTIVE"]="N";
	if (!isset($arSaveFields["NAME"]) || trim($arSaveFields["NAME"])=="") $arSaveFields["NAME"]=GetMessage("WEBDEBUG_IMAGE_ITEM_DEFAULT_NAME");
	if (!is_numeric($arSaveFields["SORT"])) $arSaveFields["SORT"]="100";
	if (CModule::IncludeModule("webdebug.image")) {
		$WebdebugImageProfile = new CWebdebugImageProfile;
		foreach ($arFields as $Key => $Value) {
			if (!isset($arSaveFields[$Key])) {
				$arSaveFields[$Key] = $Value;
			}
		}
		if ($Mode=="edit") {
			$Res = $WebdebugImageProfile->Update($ID, $arSaveFields);
		} else {
			$Res = $WebdebugImageProfile->Add($arSaveFields);
			if (is_numeric($Res)) $ID = $Res;
		}
		if (is_numeric($Res)) {
			if (isset($_POST["save"]) && trim($_POST["save"])!="") {
				LocalRedirect("/bitrix/admin/webdebug_image_profiles.php?lang=".LANGUAGE_ID);
			} else {
				LocalRedirect("/bitrix/admin/webdebug_image_profile_edit.php?ID={$ID}&lang=".LANGUAGE_ID."&WebdebugImageProfileTabControl_active_tab=".$_REQUEST["WebdebugImageProfileTabControl_active_tab"]);
			}
		}
	} else ShowError(GetMessage("WEBDEBUG_IMAGE_ERROR_ITEM_NOT_FOUND"));
}
/////////////////////////////////////////////////////////////////////////////////////////////

// Copying
if (IntVal($_GET["CopyID"])>0 && empty($_POST)) {
	$Res = CWebdebugImageProfile::GetByID(IntVal($_GET["CopyID"]));
	$arFields = $Res->GetNext(false,false);
}

if ($ID>0) {
	$Res = CWebdebugImageProfile::GetByID($ID);
	$arFields = $Res->GetNext();
}

if ($arFields["SHARPEN_AMOUNT_VALUE"]<50 || $arFields["SHARPEN_AMOUNT_VALUE"]>200) $arFields["SHARPEN_AMOUNT_VALUE"] = 50;

// Deleting Profile
if ($_GET["action"]=="delete" && IntVal($_GET["ID"])>0 && check_bitrix_sessid()) {
	$_GET["ID"] = IntVal($_GET["ID"]);
	CWebdebugImageProfile::Delete($_GET["ID"]);
	LocalRedirect("webdebug_image_profiles.php?lang=".LANGUAGE_ID);
}

// MenuItem: Profiles
$aMenu[] = array(
	"TEXT"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_LIST_NAME"),
	"LINK"	=> "/bitrix/admin/webdebug_image_profiles.php?lang=".LANGUAGE_ID,
	"ICON"	=> "btn_list",
	"TITLE"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_LIST_DESC"),
);
if ($Mode == "edit") {
	// MenuItem: Add
	$aMenu[] = array(
		"TEXT"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_ADD_NAME"),
		"LINK"	=> "/bitrix/admin/webdebug_image_profile_edit.php?lang=".LANGUAGE_ID,
		"ICON"	=> "btn_new",
		"TITLE"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_ADD_DESC"),
	);
	$aMenu[] = array(
		"TEXT"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_COPY_NAME"),
		"LINK"	=> "/bitrix/admin/webdebug_image_profile_edit.php?CopyID=".$ID."lang=".LANGUAGE_ID,
		"ICON"	=> "btn_copy",
		"TITLE"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_COPY_DESC"),
	);
}
if ($Mode == "edit" && $ID!=1) {
	// MenuItem: Delete
	$aMenu[] = array(
		"TEXT"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_DELETE_NAME"),
		"LINK"	=> "javascript:if (confirm('".GetMessage("WEBDEBUG_IMAGE_TOOLBAR_DELETE_NAME_CONFIRM")."')) window.location='/bitrix/admin/webdebug_image_profile_edit.php?action=delete&ID=".$ID."&lang=".LANGUAGE_ID."&".bitrix_sessid_get()."';",
		"ICON"	=> "btn_delete",
		"TITLE"	=> GetMessage("WEBDEBUG_IMAGE_TOOLBAR_DELETE_DESC"),
	);
}
$context = new CAdminContextMenu($aMenu);
$context->Show();
?>

<?if($WebdebugImageProfile->LAST_ERROR) ShowError($WebdebugImageProfile->LAST_ERROR);?>

<?if($Mode=="edit" && !empty($arFields) || $Mode=="add"):?>
	<?
	$arTabs = array();
	$arTabs[] = array("DIV"=>"general", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_GENERAL_NAME"), "ICON"=>"webdebug-image-profile-tabs-general", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_GENERAL_DESC"));
	$arTabs[] = array("DIV"=>"save", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_SAVE_NAME"), "ICON"=>"webdebug-image-profile-tabs-save", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_SAVE_DESC"));
	$arTabs[] = array("DIV"=>"convert", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_CONVERT_NAME"), "ICON"=>"webdebug-image-profile-tabs-convert", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_CONVERT_DESC"));
	$arTabs[] = array("DIV"=>"resize", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_RESIZE_NAME"), "ICON"=>"webdebug-image-profile-tabs-resize", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_RESIZE_DESC"));
	$arTabs[] = array("DIV"=>"properties", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_PROPERTIES_NAME"), "ICON"=>"webdebug-image-profile-tabs-properties", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_PROPERTIES_DESC"));
	$arTabs[] = array("DIV"=>"text", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_TEXT_NAME"), "ICON"=>"webdebug-image-profile-tabs-text", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_TEXT_DESC"));
	$arTabs[] = array("DIV"=>"corners", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_CORNERS_NAME"), "ICON"=>"webdebug-image-profile-tabs-corners", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_CORNERS_DESC"));
	$arTabs[] = array("DIV"=>"watermark", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_WATERMARK_NAME"), "ICON"=>"webdebug-image-profile-tabs-watermark", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_WATERMARK_DESC"));
	$arTabs[] = array("DIV"=>"reflection", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_REFLECTION_NAME"), "ICON"=>"webdebug-image-profile-tabs-reflection", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_REFLECTION_DESC"));
	$arTabs[] = array("DIV"=>"borders", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_BORDERS_NAME"), "ICON"=>"webdebug-image-profile-tabs-borders", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_BORDERS_DESC"));
	$arTabs[] = array("DIV"=>"additional", "TAB"=>GetMessage("WEBDEBUG_IMAGE_TAB_ADDITIONAL_NAME"), "ICON"=>"webdebug-image-profile-tabs-additional", "TITLE"=>GetMessage("WEBDEBUG_IMAGE_TAB_ADDITIONAL_DESC"));
	?>
	<?
		$APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="https://yandex.st/jquery-ui/1.8.20/themes/start/jquery.ui.all.min.css" />');
		$APPLICATION->AddHeadString('<script type="text/javascript" src="https://yandex.st/jquery/1.7.2/jquery.min.js"></script>');
		$APPLICATION->AddHeadString('<script type="text/javascript" src="https://yandex.st/jquery-ui/1.8.20/jquery-ui.min.js"></script>');
	?>
	<script type="text/javascript">
	function WebdebugParseInt(Value) {
		Value = parseInt(Value);
		if (isNaN(Value)) Value=0;
		return Value;
	}
	function WebdebugParseFloat(Value) {
		Value = parseFloat(Value);
		if (isNaN(Value)) Value=0;
		return Value;
	}
	</script>
	<form method="post" action="" enctype="multipart/form-data" name="post_form" id="webdebug-image-parameters">
		<?$tabControl = new CAdminTabControl("WebdebugImageProfileTabControl", $arTabs);?>
		<?$tabControl->Begin();?>
		<?$tabControl->BeginNextTab();?>
		<?// General settings ?>
		<tr id="tr_active">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_ACTIVE")?>:</td>
			<td class="field-data">
				<input type="checkbox" name="fields[ACTIVE]" value="Y"<?if($arFields["ACTIVE"]=="Y"):?> checked="checked"<?endif?> />
			</td>
		</tr>
		<tr id="tr_name">
			<td class="field-name" width="40%"><span class="required">*</span><?=GetMessage("WEBDEBUG_IMAGE_FIELD_NAME")?>:</td>
			<td class="field-data">
				<input type="text" name="fields[NAME]" value="<?=$arFields["NAME"]?>" size="60" maxlength="255" />
			</td>
		</tr>
		<tr id="tr_code">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_CODE")?>:</td>
			<td class="field-data">
				<input type="text" name="fields[CODE]" value="<?=$arFields["CODE"]?>" size="60" maxlength="255" />
			</td>
		</tr>
		<tr id="tr_sort">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_SORT")?>:</td>
			<td class="field-data">
				<input type="text" name="fields[SORT]" value="<?=$arFields["SORT"]?>" size="10" maxlength="9" />
			</td>
		</tr>
		<tr id="tr_description">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_DESCRIPTION")?>:</td>
			<td class="field-data">
				<textarea name="fields[DESCRIPTION]" cols="47" rows="4"><?=$arFields["DESCRIPTION"]?></textarea>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Save settings?>
		<tr id="tr_save_folder">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_FOLDER")?>:</td>
			<td class="field-data">
				<?=WebdebugSelectBoxFromArray("fields[SAVE_FOLDER]", array("default"=>GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_FOLDER_DEFAULT"),"custom"=>GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_FOLDER_CUSTOM")), $arFields["SAVE_FOLDER"], "", "id=\"webdebug-image-savefolder\"");?>
				<script type="text/javascript">
				$("#webdebug-image-savefolder").change(function(){
					$("#tr_save_folder_path").css("display", $(this).val() == "custom" ? "table-row" : "none")
				});
				</script>
			</td>
		</tr>
		<tr id="tr_save_folder_path"<?if($arFields["SAVE_FOLDER"]!="custom"):?> style="display:none"<?endif?>>
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_FOLDER_PATH")?>:</td>
			<td class="field-data">
				<input type="text" name="fields[SAVE_FOLDER_PATH]" value="<?=$arFields["SAVE_FOLDER_PATH"]?>" size="60" maxlength="255" />
			</td>
		</tr>
		<tr id="tr_save_mode">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_MODE")?>:</td>
			<td class="field-data">
				<?=WebdebugSelectBoxFromArray("fields[SAVE_MODE]", array("folders"=>GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_MODE_FOLDERS"), "files"=>GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_MODE_FILES")), $arFields["SAVE_MODE"], "", "id=\"webdebug-image-savemode-select\"");?>
				<?/*
				<script type="text/javascript">
				$("#webdebug-image-savemode-select").change(function(){
					$("#tr_save_mode_filelen").css("display", $(this).val() == "custom" ? "table-row" : "none")
				});
				</script>
				*/?>
			</td>
		</tr>
		<tr id="tr_save_mode_filelen">
			<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_SAVE_MODE_FILE_LENGTH")?>:</td>
			<td class="field-data">
				<input type="text" name="fields[SAVE_MODE_FILE_LENGTH]" value="<?=$arFields["SAVE_MODE_FILE_LENGTH"]?>" size="10" maxlength="9" />
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Convert settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_convert_to_type">
							<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE")?>:</td>
							<td class="field-data">
								<?=WebdebugSelectBoxFromArray("fields[CONVERT_MODE]",array("0"=>GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_DEF"),"jpeg"=>"jpg", "png"=>"png", "gif"=>"gif", "bmp"=>"bmp"), $arFields["CONVERT_MODE"], "", "id=\"webdebug-image-convert-mode\"");?>
							</td>
						</tr>
						<tr id="tr_jpeg_quality_type">
							<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_TYPE")?>:</td>
							<td class="field-data">
								<?=WebdebugSelectBoxFromArray("fields[CONVERT_MODE_JPEG_TYPE]", array("quality"=>GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_TYPE_QUALITY"),"size"=>GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_TYPE_SIZE")), $arFields["CONVERT_MODE_JPEG_TYPE"], GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_TYPE_NONE"), "id=\"webdebug-image-jpeg-quality-type\"");?>
								<script type="text/javascript">
								$("#webdebug-image-jpeg-quality-type").change(function(){
									$("#tr_jpeg_quality_value").css("display", $(this).val() == "quality" ? "table-row" : "none");
									$("#tr_jpeg_quality_size").css("display", $(this).val() == "size" ? "table-row" : "none");
								});
								</script>
							</td>
						</tr>
						<tr id="tr_jpeg_quality_value"<?if($arFields["CONVERT_MODE_JPEG_TYPE"]!="quality"):?> style="display:none"<?endif?>>
							<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_QUALITY_VALUE")?>:</td>
							<td class="field-data">
								<br/><br/>
								<div class="slider-wrapper">
									<div class="slider" inputid="webdebug-image-jpeg-quality-value" inputname="fields[CONVERT_MODE_JPEG_QUALITY_VALUE]" value="<?=$arFields["CONVERT_MODE_JPEG_QUALITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr id="tr_jpeg_quality_size"<?if($arFields["CONVERT_MODE_JPEG_TYPE"]!="size"):?> style="display:none"<?endif?>>
							<td class="field-name" width="40%"><?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_SIZE_VALUE")?>:</td>
							<td class="field-data">
								<input type="text" id="webdebug-image-jpeg-quality-size" name="fields[CONVERT_MODE_JPEG_SIZE_VALUE]" value="<?=$arFields["CONVERT_MODE_JPEG_SIZE_VALUE"]?>" size="10" maxlength="9" /> <?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONVERT_MODE_JPEG_SIZE_VALUE_BYTES")?>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-convert" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CONVERT")?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-convert"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-convert" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CONVERT")?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-convert").click(function(){
					var Params = "";
					Params += "&convert_mode="+$("#webdebug-image-convert-mode").val();
					Params += "&jpeg_quality_type="+$("#webdebug-image-jpeg-quality-type").val();
					Params += "&jpeg_quality_value="+$("#webdebug-image-jpeg-quality-value").val();
					Params += "&jpeg_quality_size="+$("#webdebug-image-jpeg-quality-size").val();
					$(".webdebug-image-photo-test-button-convert").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-convert img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-convert").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CONVERT")?>").removeAttr("disabled");
					});
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Resize settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr>
							<tr id="tr_resize_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-resize-flag" name="fields[RESIZE_FLAG]" value="Y"<?if($arFields["RESIZE_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_RESIZE_FLAG")?>
									</label>
									<script type="text/javascript">
									$("#webdebug-image-resize-flag").change(function(){
										$("#tr_resize_value").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
									});
									</script>
									<br/><br/>
								</td>
							</tr>
							<tr id="tr_resize_value"<?if($arFields["RESIZE_FLAG"]!="Y"):?> style="display:none"<?endif?>>
								<td>
									<table>
										<tbody>
											<tr>
												<td class="field-data" id="td_resize_width" style="padding-right:14px">
													<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WIDTH")?>:<br/>
													<input id="webdebug-image-resize-width" type="text" name="fields[WIDTH]" value="<?=$arFields["WIDTH"]?>" size="6" maxlength="5" /> px
													<br/><br/>
												</td>
												<td class="field-data" id="td_resize_height" style="padding-right:14px">
													<?=GetMessage("WEBDEBUG_IMAGE_FIELD_HEIGHT")?>:<br/>
													<input id="webdebug-image-resize-height" type="text" name="fields[HEIGHT]" value="<?=$arFields["HEIGHT"]?>" size="6" maxlength="5" /> px
													<br/><br/>
												</td>
												<td class="field-data" id="td_resize_pixels">
													<?=GetMessage("WEBDEBUG_IMAGE_FIELD_PIXELS")?>:<br/>
													<input id="webdebug-image-resize-pixiles" type="text" name="fields[PIXELS]" value="<?=$arFields["PIXELS"]?>" size="12" maxlength="11" /> px
													<br/><br/>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr id="tr_ratio_flag">
								<td class="field-data">
									<label>
										<input id="webdebug-image-ratio-flag" type="checkbox" name="fields[RATIO_FLAG]" value="Y"<?if($arFields["RATIO_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_RATIO_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_ratiocrop_flag">
								<td class="field-data">
									<label>
										<input id="webdebug-image-ratiocrop-flag" type="checkbox" name="fields[RATIOCROP_FLAG]" value="Y"<?if($arFields["RATIOCROP_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_RATIOCROP_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_fill_flag">
								<td class="field-data">
									<label>
										<input id="webdebug-image-fill-flag" type="checkbox" id="fill" name="fields[FILL_FLAG]" value="Y"<?if($arFields["FILL_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FILL_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_background_color">
								<td class="field-data">
									<label>
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BACKGROUND_COLOR")?>:<br/>
										<input id="webdebug-image-background-color" type="text" name="fields[BACKGROUND_COLOR]" value="<?=$arFields["BACKGROUND_COLOR"]?>" size="10" maxlength="6">
									</label>
								</td>
							</tr>
							<tr id="tr_nozoomin_flag">
								<td class="field-data">
									<label>
										<input id="webdebug-image-no-zoom-in" type="checkbox" name="fields[NOZOOMIN_FLAG]" value="Y"<?if($arFields["NOZOOMIN_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_NOZOOMIN_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_nozoomout_flag">
								<td class="field-data">
										<label>
										<input id="webdebug-image-no-zoom-out" type="checkbox" name="fields[NOZOOMOUT_FLAG]" value="Y"<?if($arFields["NOZOOMOUT_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_NOZOOMOUT_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_ratiox">
								<td class="field-data">
									<label>
										<input id="webdebug-image-ratio-x" type="checkbox" name="fields[RATIO_X_FLAG]" value="Y"<?if($arFields["RATIO_X_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_RATIO_X_FLAG")?>
									</label>
								</td>
							</tr>
							<tr id="tr_ratioy">
								<td class="field-data">
									<label>
										<input id="webdebug-image-ratio-y" type="checkbox" name="fields[RATIO_Y_FLAG]" value="Y"<?if($arFields["RATIO_Y_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_RATIO_Y_FLAG")?>
									</label>
								</td>
							</tr>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-resize" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_RESIZE");?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-resize"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-resize" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_RESIZE");?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-resize").click(function(){
					var Params = "";
					Params += "&resize_flag="+($("#webdebug-image-resize-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&width="+$.trim($("#webdebug-image-resize-width").val());
					Params += "&height="+$.trim($("#webdebug-image-resize-height").val());
					Params += "&ratio_flag="+($("#webdebug-image-ratio-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&ratiocrop_flag="+($("#webdebug-image-ratiocrop-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&fill_flag="+($("#webdebug-image-fill-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&background_color="+$("#webdebug-image-background-color").val();
					Params += "&nozoomin_flag="+($("#webdebug-image-no-zoom-in").attr("checked")=="checked" ? "Y" : "N");
					Params += "&nozoomout_flag="+($("#webdebug-image-no-zoom-out").attr("checked")=="checked" ? "Y" : "N");
					Params += "&ratio_x="+($("#webdebug-image-ratio-x").attr("checked")=="checked" ? "Y" : "N");
					Params += "&ratio_y="+($("#webdebug-image-ratio-y").attr("checked")=="checked" ? "Y" : "N");
					Params += "&pixels="+$.trim($("#webdebug-image-resize-pixiles").val());
					$(".webdebug-image-photo-test-button-resize").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-resize img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-resize").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_RESIZE");?>").removeAttr("disabled");
					})
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Properties settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr>
							<tr id="tr_brightness_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-brightness-flag" class="checkbox-with-slider" name="fields[BRIGHTNESS_FLAG]" value="Y"<?if($arFields["BRIGHTNESS_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BRIGHTNESS_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["BRIGHTNESS_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<div class="slider" inputid="webdebug-image-brightness-value" inputname="fields[BRIGHTNESS_VALUE]" value="<?=$arFields["BRIGHTNESS_VALUE"];?>" min="-127" max="127" fraction="1" /></div>
									</div>
									<br/>
								</td>
							</tr>
							<tr id="tr_contrast_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-contrast-flag" class="checkbox-with-slider" name="fields[CONTRAST_FLAG]" value="Y"<?if($arFields["CONTRAST_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_CONTRAST_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["CONTRAST_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<div class="slider" inputid="webdebug-image-contrast-value" inputname="fields[CONTRAST_VALUE]"value="<?=$arFields["CONTRAST_VALUE"];?>" min="-127" max="127" fraction="1" /></div>
									</div>
									<br/>
								</td>
							</tr>
							<tr id="tr_opacity_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-opacity-flag" class="checkbox-with-slider" name="fields[OPACITY_FLAG]" value="Y"<?if($arFields["OPACITY_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_OPACITY_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["OPACITY_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<div class="slider" inputid="webdebug-image-opacity-value" inputname="fields[OPACITY_VALUE]" value="<?=$arFields["OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
									</div>
									<br/>
								</td>
							</tr>
							<tr id="tr_tint_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-tint-flag" class="checkbox-with-slider" name="fields[TINT_FLAG]" value="Y"<?if($arFields["TINT_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TINT_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["TINT_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<input type="text" id="webdebug-image-tint-value" name="fields[TINT_VALUE]" value="<?=$arFields["TINT_VALUE"]?>" size="12" maxlength="6" />
									</div>
									<br/><br/>
								</td>
							</tr>
							<tr id="tr_negative_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-negative-flag" name="fields[NEGATIVE_FLAG]" value="Y"<?if($arFields["NEGATIVE_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_NEGATIVE_FLAG")?>
									</label>
									<br/>
								</td>
							</tr>
							<tr id="tr_grayscale_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-grayscale-flag" name="fields[GRAYSCALE_FLAG]" value="Y"<?if($arFields["GRAYSCALE_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_GRAYSCALE_FLAG")?>
									</label>
									<br/>
								</td>
							</tr>
							<tr id="tr_sharpen_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-sharpen-flag" name="fields[SHARPEN_FLAG]" value="Y"<?if($arFields["SHARPEN_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_SHARPEN_FLAG")?>
									</label>
									<br/>
								</td>
							</tr>
							<tr id="tr_sharpen_amount_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-sharpen-amount-flag" class="checkbox-with-slider" name="fields[SHARPEN_AMOUNT_FLAG]" value="Y"<?if($arFields["SHARPEN_AMOUNT_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_SHARPEN_AMOUNT_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["SHARPEN_AMOUNT_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<div class="slider" inputid="webdebug-image-sharpen-amount-value" inputname="fields[SHARPEN_AMOUNT_VALUE]" value="<?=$arFields["SHARPEN_AMOUNT_VALUE"];?>" min="50" max="200" fraction="1" /></div>
									</div>
									<br/>
								</td>
							</tr>
							<?/*
							<tr id="tr_sharpenradius_flag">
								<td class="field-data">
									<label>
										<input type="checkbox" id="webdebug-image-sharpen-radius-flag" class="checkbox-with-slider" name="fields[SHARPEN_RADIUS_FLAG]" value="Y"<?if($arFields["SHARPEN_RADIUS_FLAG"]=="Y"):?> checked="checked"<?endif?> />
										<?=GetMessage("WEBDEBUG_IMAGE_FIELD_SHARPEN_RADIUS_FLAG")?>
									</label>
									<div class="slider-wrapper"<?if($arFields["SHARPEN_RADIUS_FLAG"]!="Y"):?> style="display:none"<?endif?>>
										<div class="slider" inputid="webdebug-image-sharpen-radius-value" inputname="fields[SHARPEN_RADIUS_VALUE]" value="<?=$arFields["SHARPEN_RADIUS_VALUE"];?>" min="5" max="10" fraction="100" /></div>
									</div>
									<br/>
								</td>
							</tr>
							*/?>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-properties" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_PROPERTIES");?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-properties"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-properties" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_PROPERTIES");?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-properties").click(function(){
					var Params = "";
					Params += "&brightness_flag="+($("#webdebug-image-brightness-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&brightness_value="+$.trim($("#webdebug-image-brightness-value").val());
					Params += "&contrast_flag="+($("#webdebug-image-contrast-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&contrast_value="+$.trim($("#webdebug-image-contrast-value").val());
					Params += "&opacity_flag="+($("#webdebug-image-opacity-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&opacity_value="+$.trim($("#webdebug-image-opacity-value").val());
					Params += "&tint_flag="+($("#webdebug-image-tint-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&tint_value="+$.trim($("#webdebug-image-tint-value").val());
					Params += "&negative_flag="+($("#webdebug-image-negative-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&grayscale_flag="+($("#webdebug-image-grayscale-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&sharpen_flag="+($("#webdebug-image-sharpen-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&sharpen_amount_flag="+($("#webdebug-image-sharpen-amount-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&sharpen_amount_value="+$.trim($("#webdebug-image-sharpen-amount-value").val());
					Params += "&sharpen_radius_flag="+($("#webdebug-image-sharpen-radius-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&sharpen_radius_value="+$.trim($("#webdebug-image-sharpen-radius-value").val());
					$(".webdebug-image-photo-test-button-properties").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-properties img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-properties").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_PROPERTIES");?>").removeAttr("disabled");
					});
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Text settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_textadd">
							<td class="field-data" width="100%">
								<label>
									<input type="checkbox" id="webdebug-image-text-flag" name="fields[TEXT_FLAG]" value="Y"<?if($arFields["TEXT_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_FLAG")?>
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_value">
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_VALUE")?>:<br/>
								<textarea id="webdebug-image-text-value" name="fields[TEXT_VALUE]" cols="38" rows="3" style="width:98%"><?=$arFields["TEXT_VALUE"]?></textarea>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_direction">
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_DIRECTION_VALUE")?>:<br/>
								<?=WebdebugSelectBoxFromArray("fields[TEXT_DIRECTION_VALUE]", array("h"=>GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_DIRECTION_VALUE_H"), "v"=>GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_DIRECTION_VALUE_V")), $arFields["TEXT_DIRECTION_VALUE"], "", "id=\"webdebug-image-text-direction-value\"");?>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_color">
							<td class="field-data" width="100%">
								<label>
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_COLOR")?>:<br/>
									<input type="text" id="webdebug-image-text-color" name="fields[TEXT_COLOR]" value="<?=$arFields["TEXT_COLOR"]?>" size="10" maxlength="6">
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_textopacity">
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_OPACITY_VALUE")?>:<br/>
								<div class="slider-wrapper">
									<div class="slider" inputid="webdebug-image-text-opacity" inputname="fields[TEXT_OPACITY_VALUE]" name="fields[TEXT_OPACITY_VALUE]" value="<?=$arFields["TEXT_OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr id="tr_text_background_flag">
							<td class="field-data" width="100%">
								<label>
									<input type="checkbox" id="webdebug-image-text-background-flag" name="fields[TEXT_BACKGROUND_FLAG]" value="Y"<?if($arFields["TEXT_BACKGROUND_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_BACKGROUND_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-text-background-flag").change(function(){
									$(".webdebug-image-background").css("display", $(this).attr("checked") == "checked" ? "table-row" : "none");
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_background_color" class="webdebug-image-background"<?if($arFields["TEXT_BACKGROUND_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data" width="100%">
								<label>
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_BACKGROUND_COLOR")?>:<br/>
									<input type="text" id="webdebug-image-text-background-color" name="fields[TEXT_BACKGROUND_COLOR]" value="<?=$arFields["TEXT_BACKGROUND_COLOR"]?>" size="10" maxlength="6">
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_background_opacity" class="webdebug-image-background"<?if($arFields["TEXT_BACKGROUND_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_BACKGROUND_OPACITY_VALUE")?>:<br/>
								<div class="slider-wrapper">
									<div class="slider" inputid="webdebug-image-text-background-opacity" inputname="fields[TEXT_BACKGROUND_OPACITY_VALUE]" value="<?=$arFields["TEXT_BACKGROUND_OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr id="tr_text_size">
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_SIZE_VALUE")?>:<br/>
								<div class="slider-wrapper">
									<div class="slider" inputid="webdebug-image-text-size" inputname="fields[TEXT_SIZE_VALUE]" value="<?=$arFields["TEXT_SIZE_VALUE"];?>" min="1" max="5" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr id="tr_text_position_type">
							<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_POSITION_TYPE")?>:<br/>
								<?=WebdebugSelectBoxFromArray("fields[TEXT_POSITION_TYPE]", array("place"=>GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_POSITION_TYPE_PLACE"),"margins"=>GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_POSITION_TYPE_MARGINS")), $arFields["TEXT_POSITION_TYPE"], "", "id=\"webdebug-image-text-position-type-select\"");?>
								<script type="text/javascript">
								$("#webdebug-image-text-position-type-select").change(function(){
									$("#tr_text_position_place").css("display", $(this).val() == "place" ? "table-row" : "none");
									$("#tr_text_position_margins").css("display", $(this).val() == "margins" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_text_position_place"<?if($arFields["TEXT_POSITION_TYPE"]=="margins"):?> style="display:none"<?endif?>>
						<td class="field-data" width="100%">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_POSITION_VALUE")?>:<br/>
								<input type="hidden" id="webdebug-image-text-position-place-value" name="fields[TEXT_POSITION_VALUE]" value="<?=$arFields["TEXT_POSITION_VALUE"]?>" size="10" maxlength="6">
								<div id="webdebug-image-text-position-ui" class="webdebug-image-position-select">
									<table>
										<tbody>
											<tr>
												<td class="l t"><a pos="TL"<?if($arFields["TEXT_POSITION_VALUE"]=="TL"):?> class="active"<?endif?>>1</a></td>
												<td class="t"><a pos="T"<?if($arFields["TEXT_POSITION_VALUE"]=="T"):?> class="active"<?endif?>>2</a></td>
												<td class="r t"><a pos="TR"<?if($arFields["TEXT_POSITION_VALUE"]=="TR"):?> class="active"<?endif?>>3</a></td>
											</tr>
											<tr>
												<td class="l"><a pos="L"<?if($arFields["TEXT_POSITION_VALUE"]=="L"):?> class="active"<?endif?>>4</a></td>
												<td><a pos=""<?if($arFields["TEXT_POSITION_VALUE"]==""):?> class="active"<?endif?>>5</a></td>
												<td class="r"><a pos="R"<?if($arFields["TEXT_POSITION_VALUE"]=="R"):?> class="active"<?endif?>>6</a></td>
											</tr>
											<tr>
												<td class="l b"><a pos="BL"<?if($arFields["TEXT_POSITION_VALUE"]=="BL"):?> class="active"<?endif?>>7</a></td>
												<td class="b"><a pos="B"<?if($arFields["TEXT_POSITION_VALUE"]=="B"):?> class="active"<?endif?>>8</a></td>
												<td class="r b"><a pos="BR"<?if($arFields["TEXT_POSITION_VALUE"]=="BR"):?> class="active"<?endif?>>9</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<script type="text/javascript">
								$("#webdebug-image-text-position-ui a").click(function(){
									$("#webdebug-image-text-position-ui a").removeClass("active");
									$("#webdebug-image-text-position-place-value").val($(this).addClass("active").attr("pos"));
									return false;
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_text_position_margins"<?if($arFields["TEXT_POSITION_TYPE"]!="margins"):?> style="display:none"<?endif?>>
							<td class="field-data" width="100%">
								<table>
									<tbody>
										<tr>
											<td class="field-data" id="tr_text_space_h" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_SPACE_H_VALUE")?>:<br/>
												<input type="text" id="webdebug-image-text-space-h" name="fields[TEXT_SPACE_H_VALUE]" value="<?=$arFields["TEXT_SPACE_H_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
											<td class="field-data" id="tr_text_space_v" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_SPACE_V_VALUE")?>:<br/>
												<input type="text" id="webdebug-image-text-space-v" name="fields[TEXT_SPACE_V_VALUE]" value="<?=$arFields["TEXT_SPACE_V_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
										</tr>
									</tbody>
								</table>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_textpaddings">
							<td class="field-data" width="100%">
								<table>
									<tbody>
										<tr>
											<td class="field-data" id="tr_text_padding" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_PADDING_VALUE")?>:<br/>
												<input type="text" id="webdebug-image-text-padding" name="fields[TEXT_PADDING_VALUE]" value="<?=$arFields["TEXT_PADDING_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
											<td class="field-data" id="tr_textpaddingh" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_PADDING_H_VALUE")?>:<br/>
												<input type="text" id="webdebug-image-text-padding-h" name="fields[TEXT_PADDING_H_VALUE]" value="<?=$arFields["TEXT_PADDING_H_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
											<td class="field-data" id="tr_textpaddingv" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_TEXT_PADDING_V_VALUE")?>:<br/>
												<input type="text" id="webdebug-image-text-padding-v" name="fields[TEXT_PADDING_V_VALUE]" value="<?=$arFields["TEXT_PADDING_V_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
										</tr>
									</tbody>
								</table>
								<br/><br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-text" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_TEXT");?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-text"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-text" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_TEXT");?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-text").click(function(){
					var Params = "";
					Params += "&text_flag="+($("#webdebug-image-text-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&text_value="+$.trim($("#webdebug-image-text-value").val());
					Params += "&text_direction="+$("#webdebug-image-text-direction-value").val();
					Params += "&text_color="+$("#webdebug-image-text-color").val();
					Params += "&text_opacity="+$("#webdebug-image-text-opacity").val();
					Params += "&text_background_flag="+($("#webdebug-image-text-background-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&text_background_color="+$.trim($("#webdebug-image-text-background-color").val());
					Params += "&text_background_opacity="+$.trim($("#webdebug-image-text-background-opacity").val());
					Params += "&text_size="+$.trim($("#webdebug-image-text-size").val());
					Params += "&text_position_type="+$.trim($("#webdebug-image-text-position-type-select").val());
					Params += "&text_position_place="+$.trim($("#webdebug-image-text-position-place-value").val());
					Params += "&text_space_h="+$.trim($("#webdebug-image-text-space-h").val());
					Params += "&text_space_v="+$.trim($("#webdebug-image-text-space-v").val());
					Params += "&text_padding="+$.trim($("#webdebug-image-text-padding").val());
					Params += "&text_padding_h="+$.trim($("#webdebug-image-text-padding-h").val());
					Params += "&text_padding_v="+$.trim($("#webdebug-image-text-padding-v").val());
					$(".webdebug-image-photo-test-button-text").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-text img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-text").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_TEXT");?>").removeAttr("disabled");
					});
				});
				</script>
			</td>
		</tr>
		
		
		
		<?$tabControl->BeginNextTab();?>
		<?// Corners settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_corners">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-field-corners" name="fields[CORNERS_FLAG]" value="Y"<?if($arFields["CORNERS_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_CORNERS_FLAG")?>
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_cornersfile">
							<td class="field-data">
								<table width="100%">
									<tbody>
										<tr>
											<td>
												<?
													CAdminFileDialog::ShowScript(Array(
														"event" => "OpenImageCorners",
														"arResultDest" => Array("FORM_NAME" => "post_form", "FORM_ELEMENT_NAME" => "cornersfile"),
														"arPath" => Array(),
														"select" => 'F',
														"operation" => 'O',
														"showUploadTab" => true,
														"showAddToMenuTab" => false,
														"fileFilter" => 'image',
														"allowAllFiles" => true,
														"saveConfig" => true
													));
												?>
												<input type="text" name="fields[CORNERS_FILE]" id="cornersfile" value="<?=$arFields["CORNERS_FILE"]?>" style="width:98%" />
												<script type="text/javascript">
												setInterval(function(){
													if ($.trim($("#cornersfile").val())!="") {
														$("#corners-preview").html('<img src="'+$("#cornersfile").val()+'" />').parent().css("visibility","visible");
													} else {
														$("#corners-preview").html("").parent().css("visibility","hidden");
													}
												},1000);
												</script>
											</td>
											<td width="100">
												<input type="button" value="<?=GetMessage("WEBDEBUG_IMAGE_FIELD_CORNERS_FILE");?>" id="corners_open_button" />
												<script type="text/javascript">
													document.getElementById("corners_open_button").onclick = OpenImageCorners;
												</script>
											</td>
										</tr>
										<tr>
											<td><div style="border:1px solid silver; display:inline-block; padding:4px;"><div id="corners-preview" style="background:#AE9C78; display:inline-block;"></div></div></td>
										</tr>
									</tbody>
								</table>
								<br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-corners" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CORNERS");?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-corners" style="position:relative"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-corners" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CORNERS");?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-corners").click(function(){
					var Params = "";
					Params += "&corners="+($("#tr_corners input").attr("checked")=="checked" ? "Y" : "N");
					Params += "&cornersfile="+encodeURIComponent($.trim($("#cornersfile").val()));
					
					$(".webdebug-image-photo-test-button-corners").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-corners img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-corners").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_CORNERS");?>").removeAttr("disabled");
					})
					
				});
				</script>
			</td>
		</tr>
		
		
		
		<?$tabControl->BeginNextTab();?>
		<?// Watermark settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_watermark">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-field-watermark" name="fields[WATERMARK_FLAG]" value="Y"<?if($arFields["WATERMARK_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_FLAG")?>
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_watermarkfile">
							<td class="field-data">
								<table width="100%">
									<tbody>
										<tr>
											<td>
												<?
													CAdminFileDialog::ShowScript(Array(
														"event" => "OpenImageWatermark",
														"arResultDest" => Array("FORM_NAME" => "post_form", "FORM_ELEMENT_NAME" => "watermarkfile"),
														"arPath" => Array(),
														"select" => 'F',
														"operation" => 'O',
														"showUploadTab" => true,
														"showAddToMenuTab" => false,
														"fileFilter" => 'image',
														"allowAllFiles" => true,
														"saveConfig" => true
													));
												?>
												<input type="text" name="fields[WATERMARK_FILE]" id="watermarkfile" value="<?=$arFields["WATERMARK_FILE"]?>" style="width:98%" />
												<script type="text/javascript">
												setInterval(function(){
													if ($.trim($("#watermarkfile").val())!="") {
														$("#watermarkfile-preview").html('<img src="'+$("#watermarkfile").val()+'" />');
													} else {
														$("#watermarkfile-preview").html("");
													}
												},1000);
												</script>
											</td>
											<td width="100">
												<input type="button" value="<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_FILE");?>" id="watermark_open_button" />
												<script type="text/javascript">
													document.getElementById("watermark_open_button").onclick = OpenImageWatermark;
												</script>
											</td>
										</tr>
										<tr>
											<td><div id="watermarkfile-preview"></div></td>
										</tr>
									</tbody>
								</table>
								<br/>
							</td>
						</tr>
						<tr id="tr_watermarkpostype">
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_POSITION_TYPE")?>:<br/>
								<?=WebdebugSelectBoxFromArray("fields[WATERMARK_POSITION_TYPE]", array("place"=>GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_POSITION_TYPE_PLACE"),"margins"=>GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_POSITION_TYPE_MARGINS")), $arFields["WATERMARK_POSITION_TYPE"], "", "id=\"webdebug-image-watermarkpostype-select\"");?>
								<script type="text/javascript">
								$("#webdebug-image-watermarkpostype-select").change(function(){
									$("#tr_watermarkposition").css("display", $(this).val() == "place" ? "table-row" : "none");
									$("#tr_watermarkspace").css("display", $(this).val() == "margins" ? "table-row" : "none");
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_watermarkposition"<?if($arFields["WATERMARK_POSITION_TYPE"]!="place"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_POSITION_VALUE")?>:<br/>
								<input type="hidden" id="watermarkposition" name="fields[WATERMARK_POSITION_VALUE]" value="<?=$arFields["WATERMARK_POSITION_VALUE"]?>" size="10" maxlength="6">
								<div id="webdebug-image-watermarkposition-select" class="webdebug-image-position-select">
									<table>
										<tbody>
											<tr>
												<td class="l t"><a pos="TL"<?if($arFields["WATERMARK_POSITION_VALUE"]=="TL"):?> class="active"<?endif?>>1</a></td>
												<td class="t"><a pos="T"<?if($arFields["WATERMARK_POSITION_VALUE"]=="T"):?> class="active"<?endif?>>2</a></td>
												<td class="r t"><a pos="TR"<?if($arFields["WATERMARK_POSITION_VALUE"]=="TR"):?> class="active"<?endif?>>3</a></td>
											</tr>
											<tr>
												<td class="l"><a pos="L"<?if($arFields["WATERMARK_POSITION_VALUE"]=="L"):?> class="active"<?endif?>>4</a></td>
												<td><a pos=""<?if($arFields["WATERMARK_POSITION_VALUE"]==""):?> class="active"<?endif?>>5</a></td>
												<td class="r"><a pos="R"<?if($arFields["WATERMARK_POSITION_VALUE"]=="R"):?> class="active"<?endif?>>6</a></td>
											</tr>
											<tr>
												<td class="l b"><a pos="BL"<?if($arFields["WATERMARK_POSITION_VALUE"]=="BL"):?> class="active"<?endif?>>7</a></td>
												<td class="b"><a pos="B"<?if($arFields["WATERMARK_POSITION_VALUE"]=="B"):?> class="active"<?endif?>>8</a></td>
												<td class="r b"><a pos="BR"<?if($arFields["WATERMARK_POSITION_VALUE"]=="BR"):?> class="active"<?endif?>>9</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<script type="text/javascript">
								$("#webdebug-image-watermarkposition-select a").click(function(){
									$("#webdebug-image-watermarkposition-select a").removeClass("active");
									$("#watermarkposition").val($(this).addClass("active").attr("pos"));
									return false;
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_watermarkspace"<?if($arFields["WATERMARK_POSITION_TYPE"]=="place"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<table>
									<tbody>
										<tr>
											<td class="field-data" id="tr_watermarkspaceh" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_SPACE_H_VALUE")?>:<br/>
												<input type="text" name="fields[WATERMARK_SPACE_H_VALUE]" value="<?=$arFields["WATERMARK_SPACE_H_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
											<td class="field-data" id="tr_watermarkspacev" style="padding-right:14px">
												<?=GetMessage("WEBDEBUG_IMAGE_FIELD_WATERMARK_SPACE_V_VALUE")?>:<br/>
												<input type="text" name="fields[WATERMARK_SPACE_V_VALUE]" value="<?=$arFields["WATERMARK_SPACE_V_VALUE"]?>" size="6" maxlength="5" /> px
												<br/><br/>
											</td>
										</tr>
									</tbody>
								</table>
								<br/><br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-watermark" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_WATERMARK");?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-watermark" style="position:relative"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-watermark" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_WATERMARK");?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-watermark").click(function(){
					var Params = "";
					Params += "&watermark="+($("#tr_watermark input").attr("checked")=="checked" ? "Y" : "N");
					Params += "&watermarkfile="+encodeURIComponent($.trim($("#watermarkfile").val()));
					Params += "&watermarkpostype="+$.trim($("#webdebug-image-watermarkpostype-select").val());
					Params += "&watermarkposition="+$.trim($("#watermarkposition").val());
					Params += "&watermarkspaceh="+$.trim($("#tr_watermarkspaceh input").val());
					Params += "&watermarkspacev="+$.trim($("#tr_watermarkspacev input").val());
					
					$(".webdebug-image-photo-test-button-watermark").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-watermark img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-watermark").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_WATERMARK");?>").removeAttr("disabled");
					})
					
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Reflection settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_reflection">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-field-reflection" name="fields[REFLECTION_FLAG]" value="Y"<?if($arFields["REFLECTION_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_REFLECTION_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-field-reflection").change(function(){
									$("#tr_reflectionheight").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
									$("#tr_reflectionspace").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
									$("#tr_reflectioncolor").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
									$("#tr_reflectionopacity").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_reflectionheight"<?if($arFields["REFLECTION_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_REFLECTION_HEIGHT_VALUE")?>:<br/>
								<input type="text" name="fields[REFLECTION_HEIGHT_VALUE]" value="<?=$arFields["REFLECTION_HEIGHT_VALUE"]?>" size="6" maxlength="5" /> px
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_reflectionspace"<?if($arFields["REFLECTION_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_REFLECTION_SPACE_VALUE")?>:<br/>
								<input type="text" name="fields[REFLECTION_SPACE_VALUE]" value="<?=$arFields["REFLECTION_SPACE_VALUE"]?>" size="6" maxlength="5" /> px
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_reflectioncolor"<?if($arFields["REFLECTION_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<label>
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_REFLECTION_COLOR")?>:<br/>
									<input type="text" id="reflectioncolor" name="fields[REFLECTION_COLOR]" value="<?=$arFields["REFLECTION_COLOR"]?>" size="10" maxlength="6">
								</label>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_reflectionopacity"<?if($arFields["REFLECTION_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-reflection-opacity" class="checkbox-with-slider" name="fields[REFLECTION_OPACITY_FLAG]" value="Y"<?if($arFields["REFLECTION_OPACITY_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_REFLECTION_OPACITY_FLAG")?>
								</label>
								<div class="slider-wrapper"<?if($arFields["REFLECTION_OPACITY_FLAG"]!="Y"):?> style="display:none"<?endif?>>
									<div class="slider" inputid="reflectionopacity" inputname="fields[REFLECTION_OPACITY_VALUE]" value="<?=$arFields["REFLECTION_OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-reflection" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_REFLECTION")?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-reflection"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-reflection" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_REFLECTION")?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-reflection").click(function(){
					var Params = "";
					Params += "&reflection="+($("#tr_reflection input").attr("checked")=="checked" ? "Y" : "N");
					Params += "&reflectionh="+$.trim($("#tr_reflectionheight input").val());
					Params += "&reflectionsp="+$.trim($("#tr_reflectionspace input").val());
					Params += "&reflectionc="+$.trim($("#reflectioncolor").val());
					Params += "&reflectionop="+($("#webdebug-image-reflection-opacity").attr("checked")=="checked" ? "Y" : "N");
					Params += "&reflectionop_val="+$.trim($("#reflectionopacity").val());
					
					$(".webdebug-image-photo-test-button-reflection").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-reflection img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-reflection").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_REFLECTION")?>").removeAttr("disabled");
					})
					
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Borders settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_border_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-border-flag" name="fields[BORDER_FLAG]" value="Y"<?if($arFields["BORDER_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BORDER_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-border-flag").change(function(){
									$(".webdebug_image_group_border").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_border_value" class="webdebug_image_group_border"<?if($arFields["BORDER_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<br/>
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BORDER_VALUE")?>:<br/>
								<input type="text" id="webdebug-image-border-value" name="fields[BORDER_VALUE]" value="<?=$arFields["BORDER_VALUE"]?>" size="20" maxlength="18">
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_border_color" class="webdebug_image_group_border"<?if($arFields["BORDER_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BORDER_COLOR")?>:<br/>
								<input type="text" id="webdebug-image-border-color" name="fields[BORDER_COLOR]" value="<?=$arFields["BORDER_COLOR"]?>" size="10" maxlength="6">
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_border_opacity_flag" class="webdebug_image_group_border"<?if($arFields["BORDER_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-border-opacity-flag" class="checkbox-with-slider" name="fields[BORDER_OPACITY_FLAG]" value="Y"<?if($arFields["BORDER_OPACITY_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BORDER_OPACITY_FLAG")?>
								</label>
								<div class="slider-wrapper"<?if($arFields["BORDER_FLAG"]!="Y"):?> style="display:none"<?endif?>>
									<div class="slider" inputid="webdebug-image-border-opacity-value" inputname="fields[BORDER_OPACITY_VALUE]" value="<?=$arFields["BORDER_OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr id="tr_border_transparent" class="webdebug_image_group_border"<?if($arFields["BORDER_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<label>
									<input id="webdebug-image-border-transparent-flag" type="checkbox" class="checkbox-with-slider" name="fields[BORDER_TRANSPARENT_FLAG]" value="Y"<?if($arFields["BORDER_TRANSPARENT_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BORDER_TRANSPARENT_FLAG")?>
								</label>
								<div class="slider-wrapper"<?if($arFields["BORDER_TRANSPARENT_FLAG"]!="Y"):?> style="display:none"<?endif?>>
									<div class="slider" inputid="webdebug-image-border-transparent-value" inputname="fields[BORDER_TRANSPARENT_VALUE]" value="<?=$arFields["BORDER_TRANSPARENT_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
							</td>
						</tr>
						<tr>
							<td><hr/></td>
						</tr>
						<tr id="tr_frame_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-frame-flag" name="fields[FRAME_FLAG]" value="Y"<?if($arFields["FRAME_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-frame-flag").change(function(){
									$(".webdebug_image_group_frame").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_frameVALUE" class="webdebug_image_group_frame"<?if($arFields["FRAME_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<br/>
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_VALUE")?>:<br/>
								<?=WebdebugSelectBoxFromArray("fields[FRAME_VALUE]", array("1"=>GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_VALUE_1"), "2"=>GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_VALUE_2")), $arFields["FRAME_VALUE"], "", "id=\"webdebug-image-frame-type\"");?>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_framecolor" class="webdebug_image_group_frame"<?if($arFields["FRAME_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_COLOR")?>:<br/>
								<input type="text" id="webdebug-image-frame-color" name="fields[FRAME_COLOR]" value="<?=$arFields["FRAME_COLOR"]?>" size="10" maxlength="50">
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_frameopacity_flag" class="webdebug_image_group_frame"<?if($arFields["FRAME_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-frame-opacity-flag" class="checkbox-with-slider" name="fields[FRAME_OPACITY_FLAG]" value="Y"<?if($arFields["FRAME_OPACITY_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FRAME_OPACITY_FLAG")?>
								</label>
								<div class="slider-wrapper"<?if($arFields["FRAMEOPACITY"]!="Y"):?> style="display:none"<?endif?>>
									<div class="slider" inputid="webdebug-image-frame-opacity-value" inputname="fields[FRAME_OPACITY_VALUE]" value="<?=$arFields["FRAME_OPACITY_VALUE"];?>" min="0" max="100" fraction="1" /></div>
								</div>
								<br/>
							</td>
						</tr>
						<tr>
							<td><hr/></td>
						</tr>
						<tr id="tr_bevel_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-bevel-flag" name="fields[BEVEL_FLAG]" value="Y"<?if($arFields["BEVEL_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BEVEL_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-bevel-flag").change(function(){
									$(".webdebug_image_group_bevel").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_bevel_value" class="webdebug_image_group_bevel"<?if($arFields["BEVEL_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<br/>
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BEVEL_VALUE")?>:<br/>
								<input type="text" id="webdebug-image-bevel-value" name="fields[BEVEL_VALUE]" value="<?=$arFields["BEVEL_VALUE"]?>" size="20" maxlength="18">
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_bevel_color_1" class="webdebug_image_group_bevel"<?if($arFields["BEVEL_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BEVEL_COLOR_1")?>:<br/>
								<input type="text" id="webdebug-image-bevel-color-1" name="fields[BEVEL_COLOR_1]" value="<?=$arFields["BEVEL_COLOR_1"]?>" size="10" maxlength="6">
								<br/><br/>
							</td>
						</tr>
						<tr id="tr_bevel_color_2" class="webdebug_image_group_bevel"<?if($arFields["BEVEL_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=GetMessage("WEBDEBUG_IMAGE_FIELD_BEVEL_COLOR_2")?>:<br/>
								<input type="text" id="webdebug-image-bevel-color-2" name="fields[BEVEL_COLOR_2]" value="<?=$arFields["BEVEL_COLOR_2"]?>" size="10" maxlength="6">
								<br/><br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-borders" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_BORDERS")?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-borders"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-borders" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_BORDERS")?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-borders").click(function(){
					var Params = "";
					// Border settigns
					Params += "&border_flag="+($("#webdebug-image-border-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&border_value="+$("#webdebug-image-border-value").val();
					Params += "&border_color="+$("#webdebug-image-border-color").val();
					Params += "&border_opacity_flag="+($("#webdebug-image-border-opacity-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&border_opacity_value="+$("#webdebug-image-border-opacity-value").val();
					Params += "&border_transparent_flag="+($("#webdebug-image-border-transparent-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&border_transparent_value="+$("#webdebug-image-border-transparent-value").val();
					// Frame settings
					Params += "&frame_flag="+($("#webdebug-image-frame-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&frame_type="+$("#webdebug-image-frame-type").val();
					Params += "&frame_color="+$("#webdebug-image-frame-color").val();
					Params += "&frame_opacity_flag="+$("#webdebug-image-frame-opacity-flag").val();
					Params += "&frame_opacity_value="+$("#webdebug-image-frame-opacity-value").val();
					// Bevel settings
					Params += "&bevel_flag="+($("#webdebug-image-bevel-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&bevel_value="+$("#webdebug-image-bevel-value").val();
					Params += "&bevel_color_1="+$("#webdebug-image-bevel-color-1").val();
					Params += "&bevel_color_2="+$("#webdebug-image-bevel-color-2").val();
					// Do request with SRC attribute
					$(".webdebug-image-photo-test-button-borders").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-borders img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-borders").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_BORDERS")?>").removeAttr("disabled");
					});
				});
				</script>
			</td>
		</tr>
		<?$tabControl->BeginNextTab();?>
		<?// Additional settings?>
		<tr>
			<td valign="top">
				<table class="webdebug-image-inner-table">
					<tbody>
						<tr id="tr_flip_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-flip-flag" name="fields[FLIP_FLAG]" value="Y"<?if($arFields["FLIP_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_FLIP_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-flip-flag").change(function(){
									$("#tr_flip_value").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_flip_value"<?if($arFields["FLIP_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=WebdebugSelectBoxFromArray("fields[FLIP_VALUE]",  array("v"=>GetMessage("WEBDEBUG_IMAGE_FIELD_FLIP_VALUE_H"), "h"=>GetMessage("WEBDEBUG_IMAGE_FIELD_FLIP_VALUE_V")), $arFields["FLIP_VALUE"], "", "id=\"webdebug-image-flip-value\"");?>
								<br/><br/>
							</td>
						</tr>
						<tr><td><hr/></td></tr>
						<tr id="tr_rotate_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-rotate-flag" name="fields[ROTATE_FLAG]" value="Y"<?if($arFields["ROTATE_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_ROTATE_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-rotate-flag").change(function(){
									$("#tr_rotate_value").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_rotate_value"<?if($arFields["ROTATE_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<?=WebdebugSelectBoxFromArray("fields[ROTATE_VALUE]", array("90"=>GetMessage("WEBDEBUG_IMAGE_FIELD_ROTATE_VALUE_90"), "180"=>GetMessage("WEBDEBUG_IMAGE_FIELD_ROTATE_VALUE_180"), "270"=>GetMessage("WEBDEBUG_IMAGE_FIELD_ROTATE_VALUE_270")), $arFields["ROTATE_VALUE"], "", "id=\"webdebug-image-rotate-value\"");?>
								<br/><br/>
							</td>
						</tr>
						<tr><td><hr/></td></tr>
						<tr id="tr_crop_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-crop-flag" name="fields[CROP_FLAG]" value="Y"<?if($arFields["CROP_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_CROP_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-crop-flag").change(function(){
									$("#tr_crop_value").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_crop_value"<?if($arFields["CROP_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<input type="text" id="webdebug-image-crop-value" name="fields[CROP_VALUE]" value="<?=$arFields["CROP_VALUE"]?>" size="20" maxlength="30">
								<br/><br/>
							</td>
						</tr>
						<tr><td><hr/></td></tr>
						<tr id="tr_precrop_flag">
							<td class="field-data">
								<label>
									<input type="checkbox" id="webdebug-image-precrop-flag" name="fields[PRECROP_FLAG]" value="Y"<?if($arFields["PRECROP_FLAG"]=="Y"):?> checked="checked"<?endif?> />
									<?=GetMessage("WEBDEBUG_IMAGE_FIELD_PRECROP_FLAG")?>
								</label>
								<script type="text/javascript">
								$("#webdebug-image-precrop-flag").change(function(){
									$("#tr_precrop_value").css("display", $(this).attr("checked")=="checked" ? "table-row" : "none");
								});
								</script>
								<br/>
							</td>
						</tr>
						<tr id="tr_precrop_value"<?if($arFields["PRECROP_FLAG"]!="Y"):?> style="display:none"<?endif?>>
							<td class="field-data">
								<input type="text" id="webdebug-image-precrop-value" name="fields[PRECROP_VALUE]" value="<?=$arFields["PRECROP_VALUE"]?>" size="20" maxlength="30">
								<br/><br/>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
			<td width="450" valign="top">
				<div class="webdebug-image-button-test-top"><input type="button" class="webdebug-image-photo-test-button-additional" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_ADDITIONAL")?>" /></div>
				<div class="webdebug-image-photo-test" id="webdebug-image-photo-test-image-additional"><img src="/bitrix/images/webdebug.image/photo.jpg" alt="" width="450" height="300" /></div>
				<div class="webdebug-image-button-test-bottom"><input type="button" class="webdebug-image-photo-test-button-additional" value="<?=GetMessage("WEBDEBUG_IMAGE_CHECK_ADDITIONAL")?>" /></div>
				<script type="text/javascript">
				$(".webdebug-image-photo-test-button-additional").click(function(){
					var Params = "";
					// Flip settings
					Params += "&flip_flag="+($("#webdebug-image-flip-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&flip_value="+$("#webdebug-image-flip-value").val();
					// Rotate settings
					Params += "&rotate_flag="+($("#webdebug-image-rotate-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&rotate_value="+$("#webdebug-image-rotate-value").val();
					// Crop settings
					Params += "&crop_flag="+($("#webdebug-image-crop-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&crop_value="+$("#webdebug-image-crop-value").val();
					// Pre-Crop settings
					Params += "&precrop_flag="+($("#webdebug-image-precrop-flag").attr("checked")=="checked" ? "Y" : "N");
					Params += "&precrop_value="+$("#webdebug-image-precrop-value").val();
					
					$(".webdebug-image-photo-test-button-additional").attr("disabled","disabled").val("<?=GetMessage("WEBDEBUG_IMAGE_PROCESSING")?>");
					$("#webdebug-image-photo-test-image-additional img")
					.attr("src", "/bitrix/admin/webdebug_image_test.php?anticache="+Math.random()+Params)
					.removeAttr("width").removeAttr("height").css({"width":"","height":""}).unbind("load")
					.load(function(){
						$(this).attr("width",$(this).css("width")).attr("height",$(this).css("height"));
						$(".webdebug-image-photo-test-button-additional").val("<?=GetMessage("WEBDEBUG_IMAGE_CHECK_ADDITIONAL")?>").removeAttr("disabled");
					})
					
				});
				</script>
			</td>
		</tr>
		<?$tabControl->Buttons(array("disabled"=>false,"back_url"=>"webdebug_image_profiles.php?lang=".LANG));?>
		<?$tabControl->End();?>
	</form>
	<script type="text/javascript">
	$("#webdebug-image-parameters .slider").each(function(){
		var Slider = $(this);
		var Value = WebdebugParseInt(Slider.attr("value"));
		var Fraction = WebdebugParseInt(Slider.attr("fraction"));
		var Fraction2 = Fraction=="1" ? "1" : Fraction*10;
		var Min = WebdebugParseInt(Slider.attr("min")) * Fraction;
		var Max = WebdebugParseInt(Slider.attr("max")) * Fraction;
		var ID = Slider.attr("inputid");
		var InputName = Slider.attr("inputname");
		Slider.parent().append("<div class='textcontrol'><input class='input' type='text' name='"+InputName+"' size='6' maxlength='10' value='"+Value+"' id='"+ID+"' /></div>");
		Slider.attr("id", ID+"_slider");
		var Minus = Slider.attr("minus")=="Y";
		$("#"+ID+"_slider").slider({
			value: Value - WebdebugParseInt(Min),
			min: 0,
			max: Max-Min,
			slide: function(event, ui) {
				Slider.parent().find(".input").val(WebdebugParseFloat(ui.value+Min)/Fraction2);
			}
		});
		$("#"+ID).keyup(function(){
			Slider.slider("value", WebdebugParseInt($(this).val()-Min));
		});
	});
	$("#webdebug-image-parameters .checkbox-with-slider").change(function(){
		$(this).parent().next().css("display", $(this).attr("checked")=="checked" ? "block" : "none");
	});
	</script>
<?elseif($Mode=="edit" && empty($arFields)):?>
	<?ShowError(GetMessage("WEBDEBUG_IMAGE_ERROR_ITEM_NOT_FOUND"))?>
<?endif?>

<?
/////////////////////////////////////////////////////////////////////////////////////////////
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
?>