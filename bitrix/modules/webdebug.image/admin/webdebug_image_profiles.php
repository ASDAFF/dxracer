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

function WebdebugImageWriteExportFile(array $arLines){
	$Separator = ";";
	if (!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/")) {
		mkdir($_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/", BX_DIR_PERMISSIONS, true);
	}
	// Write text file
	$CsvFileName = $_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/export.csv";
	@unlink($CsvFileName);
	$CsvData = '';
	foreach ($arLines as $arLine) {
		foreach ($arLine as $Field => $Value) {
			$arLine[$Field] = str_replace($Separator, "[#]", $Value);
		}
		$Line = implode($Separator, $arLine);
		$CsvData .= $Line."\r\n";
	}
	if (defined('BX_UTF') && BX_UTF===true) {
		global $APPLICATION;
		$CsvData = $APPLICATION->ConvertCharset($CsvData,'UTF-8','CP1251');
	}
	file_put_contents($CsvFileName,$CsvData);
	// Write acrhieve
	$UseCompression = true;
	if(!extension_loaded('zlib') || !function_exists('gzcompress')) $UseCompression = false;
	$FileName = "export.tar.gz";
	if (!$UseCompression) $FileName = "export.tar";
	$ArcFileName = $_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/".$FileName;
	@unlink($ArcFileName);
	require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/tar_gz.php');
	$Archiver = new CArchiver($ArcFileName, $UseCompression);
	$Archiver->Add('"'.$CsvFileName.'"', false, $_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/");
	// Write additional files to archieve
	foreach ($arLines as $LineIndex => $arLine) {
		if ($LineIndex==0) continue;
		foreach ($arLine as $FieldIndex => $Value) {
			$arLines[$LineIndex][$arLines[0][$FieldIndex]] = $Value;
			unset($arLines[$LineIndex][$FieldIndex]);
		}
	}
	foreach ($arLines as $LineIndex => $arLine) {
		if ($LineIndex==0) continue;
		$arFileFields = array("CORNERS_FILE","WATERMARK_FILE");
		foreach ($arFileFields as $Field) {
			if (isset($arLine[$Field]) && trim($arLine[$Field])!="") {
				if (is_file($_SERVER["DOCUMENT_ROOT"].$arLine[$Field])) {
					$P = pathinfo ($_SERVER["DOCUMENT_ROOT"].$arLine[$Field]);
					$ImgPathName = $P["dirname"]."/".$P["basename"];
					$Archiver->Add($ImgPathName, false, $_SERVER["DOCUMENT_ROOT"]);
				}
			}
		}
	}
	// Remove all temporarily files
	@unlink($CsvFileName);
	// Download file
	$FileName = date("Y_m_d__H_i_s")."__".$FileName;
	header ("Content-Type: application/octet-stream");
	header ("Accept-Ranges: bytes");
	header ("Content-Length: ".filesize($ArcFileName));
	header ("Content-Disposition: attachment; filename=".$FileName);  
	readfile($ArcFileName);
	die();
}


// Start export
if (isset($_GET["webdebug_image_export"]) && $_GET["webdebug_image_export"]=="Y") {
	$arResult = array();
	$resProfiles = CWebdebugImageProfile::GetList(array($by => $order), $arFilter);
	$HeaderWrote = false;
	while ($arProfile = $resProfiles->GetNext(false,false)) {
		$arHeader = array();
		$arValues = array();
		foreach ($arProfile as $Field => $Value) {
			if (!$HeaderWrote) {
				$arHeader[] = $Field;
			}
			$arValues[] = $Value;
		}
		if (!$HeaderWrote) {
			$arResult[] = $arHeader;
			$HeaderWrote = true;
		}
		$arResult[] = $arValues;
	}
	WebdebugImageWriteExportFile($arResult);
}
// End export

// Start import
if (isset($_REQUEST["webdebug-import"]) && $_REQUEST["webdebug-import"]=="Y") {
	if (isset($_FILES["webdebug-import-file"]) && $_FILES["webdebug-import-file"]["error"]=="0") {
		// Extract
		$FileName = "export.tar.gz";
		$ArcFileName = $_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/".$FileName;
		@unlink($ArcFileName);
		require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/tar_gz.php');
		$Archiver = new CArchiver($_FILES["webdebug-import-file"]["tmp_name"]);
		$Archiver->extractFiles($_SERVER["DOCUMENT_ROOT"]."/upload/webdebug.image/");
		// Import from CSV
		$CsvFileName = $_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/export.csv";
		if (is_file($CsvFileName)) {
			$arImport = file($CsvFileName);
			if (is_array($arImport) && !empty($arImport)) {
			
				// Truncate
				$Truncate = isset($_REQUEST["webdebug-field-truncate"]) && $_REQUEST["webdebug-field-truncate"]=="Y";
				if ($Truncate) {
					global $DB;
					$SQL = "truncate `b_webdebug_image_profiles`";
					$DB->Query($SQL, false, __LINE__);
				}
			
				// Parse import file
				$Separator = ";";
				foreach ($arImport as $Key => $Line) $arImport[$Key] = str_replace("\r\n", "", $Line);
				$arHeader = explode($Separator, $arImport[0]);
				unset($arImport[0]);
				foreach ($arImport as $Line) {
					$arLine = explode($Separator, $Line);
					foreach ($arLine as $Key => $Value) {
						$Value = str_replace('[#]', $Separator, $Value);
						if (defined('BX_UTF') && BX_UTF===true) {
							global $APPLICATION;
							$Value = $APPLICATION->ConvertCharset($Value,'CP1251','UTF-8');
						}
						$arLine[$arHeader[$Key]] = $Value;
						unset($arLine[$Key]);
					}
					if (!$Truncate) unset($arLine["ID"]);
					CWebdebugImageProfile::Add($arLine);
				}
				@unlink($CsvFileName);
				
				// Copy files
				if (isset($_REQUEST["webdebug-field-importfiles"]) && $_REQUEST["webdebug-field-importfiles"]=="Y") {
					$Rewrite = isset($_REQUEST["webdebug-field-replacetfiles"]) && $_REQUEST["webdebug-field-replacetfiles"]=="Y";
					CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/upload/webdebug.image", $_SERVER["DOCUMENT_ROOT"], $Rewrite, true, true);
				}
			}
		}
		DeleteDirFilesEx("/upload/webdebug.image");
		@mkdir($_SERVER['DOCUMENT_ROOT']."/upload/webdebug.image/", BX_DIR_PERMISSIONS, true);
	}
}
// End import

$sTableID = "WebdebugImageProfiles";
$oSort = new CAdminSorting($sTableID, "SORT", "ASC");
$lAdmin = new CAdminList($sTableID, $oSort);

// Filter
function CheckFilter() {
	global $FilterArr, $lAdmin;
	foreach ($FilterArr as $f) global $f;
	return count($lAdmin->arFilterErrors)==0;
}
$FilterArr = Array(
	"find_id",
	"find_code",
	"find_name",
	"find_active",
	"find_sort",
	"find_description",
);
$lAdmin->InitFilter($FilterArr);
if (CheckFilter()) {
	$arFilter = Array(
		"ID" => $find_id,
		"%CODE" => $find_code,
		"%NAME" => $find_name,
		"ACTIVE" => $find_active,
		"SORT" => $find_sort,
		"%DESCRIPTION" => $find_description,
	);
}

// Processing with actions
if($lAdmin->EditAction()) {
	foreach($FIELDS as $ID=>$arFields) {
		if(!$lAdmin->IsUpdated($ID)) continue;
		$DB->StartTransaction();
		$ID = IntVal($ID);
		if(($rsData = CWebdebugImageProfile::GetByID($ID)) && ($arData = $rsData->Fetch())) {
			foreach($arFields as $key=>$value) $arData[$key]=$value;
			unset($arData["PHRASES_COUNT"]);
			if(!CWebdebugImageProfile::Update($ID, $arData)) {
				$lAdmin->AddGroupError(GetMessage("rub_save_error"), $ID);
				$DB->Rollback();
			}
		} else {
			$lAdmin->AddGroupError(GetMessage("rub_save_error")." ".GetMessage("rub_no_rubric"), $ID);
			$DB->Rollback();
		}
		$DB->Commit();
	}
}
if(($arID = $lAdmin->GroupAction())) {
  if($_REQUEST['action_target']=='selected') {
    $rsData = CWebdebugImageProfile::GetList(array($by=>$order), $arFilter);
    while($arRes = $rsData->Fetch()) $arID[] = $arRes['ID'];
  }
  foreach($arID as $ID) {
    if(strlen($ID)<=0) continue;
    $ID = IntVal($ID);
    switch($_REQUEST['action']) {
			case "delete":
				@set_time_limit(0);
				$DB->StartTransaction();
				if(!CWebdebugImageProfile::Delete($ID)) {
					$DB->Rollback();
					$lAdmin->AddGroupError(GetMessage("rub_del_err"), $ID);
				}
				$DB->Commit();
				break;
			case "activate":
			case "deactivate":
				if(($rsData = CWebdebugImageProfile::GetByID($ID)) && ($arFields = $rsData->Fetch())) {
					$arFields["ACTIVE"]=($_REQUEST['action']=="activate"?"Y":"N");
					if(!CWebdebugImageProfile::Update($ID, $arFields)) {
						$lAdmin->AddGroupError(GetMessage("rub_save_error"), $ID);
					}
				} else {
					$lAdmin->AddGroupError(GetMessage("rub_save_error")." ".GetMessage("rub_no_rubric"), $ID);
				}
				break;
    }
  }
}

// Get items list
$rsData = CWebdebugImageProfile::GetList(array($by => $order), $arFilter);
$rsData = new CAdminResult($rsData, $sTableID);
$rsData->NavStart();
$lAdmin->NavText($rsData->GetNavPrint(GetMessage("rub_nav")));

// Add headers
$lAdmin->AddHeaders(array(
  array(
	  "id" => "ID",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_ID"),
    "sort" => "id",
    "align" => "right",
    "default" => true,
  ),
  array(
	  "id" =>"CODE",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_CODE"),
    "sort" => "code",
		"align" => "left",
    "default" => true,
  ),
  array(
	  "id" =>"NAME",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_NAME"),
    "sort" => "name",
		"align" => "left",
    "default" => true,
  ),
  array(
	  "id" =>"ACTIVE",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_ACTIVE"),
    "sort" => "active",
		"align" => "center",
    "default" => true,
  ),
  array(
	  "id" =>"SORT",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_SORT"),
    "sort" => "sort",
    "align" => "right",
    "default" => true,
  ),
  array(
	  "id" =>"DESCRIPTION",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_DESCRIPTION"),
    "sort" => "description",
		"align" => "left",
    "default" => false,
  ),
  array(
	  "id" =>"RESIZE_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_RESIZE_FLAG"),
    "sort" => "resize_flag",
		"align" => "center",
    "default" => true,
  ),
  array(
	  "id" =>"WIDTH",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_WIDTH"),
    "sort" => "width",
		"align" => "right",
    "default" => true,
  ),
  array(
	  "id" =>"HEIGHT",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_HEIGHT"),
    "sort" => "height",
		"align" => "right",
    "default" => true,
  ),
  array(
	  "id" =>"PIXELS",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_PIXELS"),
    "sort" => "PIXELS",
		"align" => "right",
    "default" => false,
  ),
  array(
	  "id" =>"RATIO_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_RATIO_FLAG"),
    "sort" => "ratio_flag",
		"align" => "center",
    "default" => true,
  ),
  array(
	  "id" =>"RATIOCROP_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_RATIOCROP_FLAG"),
    "sort" => "ratiocrop_flag",
		"align" => "center",
    "default" => true,
  ),
  array(
	  "id" =>"FILL_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_FILL_FLAG"),
    "sort" => "fill_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"BACKGROUND_COLOR",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_BACKGROUND_COLOR"),
    "sort" => "background_color",
		"align" => "left",
    "default" => false,
  ),
  array(
	  "id" =>"NOZOOMIN_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_NOZOOMIN_FLAG"),
    "sort" => "nozoomin_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"NOZOOMOUT_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_NOZOOMOUT_FLAG"),
    "sort" => "nozoomout_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"RATIO_X_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_RATIO_X_FLAG"),
    "sort" => "ratio_x_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"RATIO_Y_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_RATIO_Y_FLAG"),
    "sort" => "ratio_y_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"WATERMARK_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_WATERMARK_FLAG"),
    "sort" => "watermark_flag",
		"align" => "center",
    "default" => true,
  ),
  array(
	  "id" =>"WATERMARK_FILE",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_WATERMARK_FILE"),
    "sort" => "watermark_file",
		"align" => "left",
    "default" => true,
  ),
  array(
	  "id" =>"CORNERS_FLAG",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_CORNERS_FLAG"),
    "sort" => "corners_flag",
		"align" => "center",
    "default" => false,
  ),
  array(
	  "id" =>"CORNERS_FILE",
    "content" => GetMessage("WEBDEBUG_IMAGE_HEADER_CORNERS_FILE"),
    "sort" => "corners_file",
		"align" => "left",
    "default" => false,
  ),
));

// Build items list
while ($arRes = $rsData->NavNext(true, "f_")) {
  $row = &$lAdmin->AddRow($f_ID, $arRes); 
	// ID
	$row->AddViewField("ID", "<a href='webdebug_image_profile_edit.php?ID={$f_ID}&lang=".LANGUAGE_ID."' title='".GetMessage("WEBDEBUG_IMAGE_EDITPROFILE")."'>{$f_ID}</a>");
  // CODE
  $row->AddInputField("CODE",array("SIZE" => "20"));
  // NAME
  $row->AddInputField("NAME",array("SIZE" => "40"));
  $row->AddViewField("NAME", "<a href='webdebug_image_profile_edit.php?ID={$f_ID}&lang=".LANGUAGE_ID."' title='".GetMessage("WEBDEBUG_IMAGE_EDITPROFILE")."'>{$f_NAME}</a>");
  // ACTIVE
  $row->AddCheckField("ACTIVE"); 
  // SORT
  $row->AddInputField("SORT", array("SIZE"=>5)); 
	// DESCR
	$sHTML = '<textarea rows="5" cols="50" name="FIELDS['.$f_ID.'][DESCRIPTION]">'.htmlspecialchars($row->arRes["DESCRIPTION"]).'</textarea>';
	$row->AddEditField("DESCRIPTION", $sHTML);
	$row->AddViewField("DESCRIPTION", $f_DESCRIPTION);
	
	// RESIZE_FLAG
	$row->AddCheckField("RESIZE_FLAG"); 
	// WIDTH
	$row->AddInputField("WIDTH", array("SIZE"=>6)); 
	// HEIGHT
	$row->AddInputField("HEIGHT", array("SIZE"=>6)); 
	// PIXELS
	$row->AddInputField("PIXELS", array("SIZE"=>10)); 
	// RATIO_FLAG
	$row->AddCheckField("RATIO_FLAG");
	// RATIOCROP_FLAG
	$row->AddCheckField("RATIOCROP_FLAG"); 
	// FILL_FLAG
	$row->AddCheckField("FILL_FLAG"); 
	// BACKGROUND_COLOR
	$row->AddInputField("BACKGROUND_COLOR", array("SIZE"=>10)); 
	// NOZOOMIN_FLAG
	$row->AddCheckField("NOZOOMIN_FLAG"); 
	// NOZOOMOUT_FLAG
	$row->AddCheckField("NOZOOMOUT_FLAG"); 
	// RATIO_X_FLAG
	$row->AddCheckField("RATIO_X_FLAG"); 
	// RATIO_Y_FLAG
	$row->AddCheckField("RATIO_Y_FLAG"); 
	// WATERMARK_FLAG
	$row->AddCheckField("WATERMARK_FLAG");
	// WATERMARK_FILE
	$sHTML = '<input type="text" name="FIELDS['.$f_ID.'][WATERMARK_FILE]" size="40" value="'.$f_WATERMARK_FILE.'" />';
	$sView = "";
	$sLink = "";
	if ($f_WATERMARK_FILE) {
		$sView = '<div><img src="'.$f_WATERMARK_FILE.'" alt=""/></div>';
		$sLink = '<a href="'.$f_WATERMARK_FILE.'" target="_blank">'.$f_WATERMARK_FILE.'</a>';
	}
	$row->AddEditField("WATERMARK_FILE", $sHTML.$sView);
	$row->AddViewField("WATERMARK_FILE", $sLink.$sView);
	// CORNERS_FLAG
	$row->AddCheckField("CORNERS_FLAG");
	// CORNERS_FILE
	$sHTML = '<input type="text" name="FIELDS['.$f_ID.'][CORNERS_FILE]" />';
	$row->AddEditField("CORNERS_FILE", $sHTML);
	$row->AddViewField("CORNERS_FILE", $f_CORNERS_FILE?'<img src="'.$f_CORNERS_FILE.'" />':'');
	
	
	// Build context menu
  $arActions = Array();
  $arActions[] = array(
    "ICON" => "edit",
    "DEFAULT"=>true,
    "TEXT" => GetMessage("WEBDEBUG_IMAGE_CONTEXT_EDIT"),
    "ACTION"=>$lAdmin->ActionRedirect("webdebug_image_profile_edit.php?ID=".$f_ID."&lang=".LANGUAGE_ID)
  );
  $arActions[] = array(
    "ICON" => "copy",
    "DEFAULT"=>false,
    "TEXT" => GetMessage("WEBDEBUG_IMAGE_CONTEXT_COPY"),
    "ACTION"=>$lAdmin->ActionRedirect("webdebug_image_profile_edit.php?CopyID=".$f_ID."&lang=".LANGUAGE_ID)
  );
	if ($f_ID!=1) {
		$arActions[] = array(
			"ICON" => "delete",
			"DEFAULT"=>false,
			"TEXT" => GetMessage("WEBDEBUG_IMAGE_CONTEXT_DELETE"),
			"ACTION" => "if(confirm('".sprintf(GetMessage('WEBDEBUG_IMAGE_CONTEXT_DELETE_CONFIRM'), $f_NAME)."')&&'u254'=='u254') ".$lAdmin->ActionDoGroup($f_ID, "delete")
		);
	}
  $arActions[] = array("SEPARATOR"=>true);
  if(is_set($arActions[count($arActions)-1], "SEPARATOR")) {
    unset($arActions[count($arActions)-1]);
	}
  $row->AddActions($arActions);
}

// List Footer
$lAdmin->AddFooter(
  array(
    array("title" => GetMessage("MAIN_ADMIN_LIST_SELECTED"), "value"=>$rsData->SelectedRowsCount()),
    array("counter"=>true, "title" => GetMessage("MAIN_ADMIN_LIST_CHECKED"), "value" => "0"),
  )
);
$lAdmin->AddGroupActionTable(Array(
  "delete" => GetMessage("MAIN_ADMIN_LIST_DELETE"),
  "activate" => GetMessage("MAIN_ADMIN_LIST_ACTIVATE"),
  "deactivate" => GetMessage("MAIN_ADMIN_LIST_DEACTIVATE"),
));

// Context menu
$aContext = array(
  array(
    "TEXT" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_ADD_NAME"),
    "LINK" => "webdebug_image_profile_edit.php?lang=".LANGUAGE_ID,
    "TITLE" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_ADD_DESC"),
    "ICON" => "btn_new",
  ),
  array(
    "TEXT" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_EXPORT_NAME"),
    "LINK" => "webdebug_image_profiles.php?webdebug_image_export=Y&lang=".LANGUAGE_ID,
    "TITLE" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_EXPORT_DESC"),
    "ICON" => "",
  ),
  array(
    "TEXT" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_IMPORT_NAME"),
    "TITLE" => GetMessage("WEBDEBUG_IMAGE_TOOLBAR_IMPORT_DESC"),
    "ICON" => "",
    "ONCLICK" => "WebdebugImageImport_openMyPopup();",
  ),
);
$lAdmin->AddAdminContextMenu($aContext);

// Start output
$lAdmin->CheckListMode();
$APPLICATION->SetTitle(GetMessage("WEBDEBUG_IMAGE_APPLICATION_TITLE"));
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

if (!webdebug_image_demo_expired()) {
	webdebug_image_show_demo();
}

// Output filter
$oFilter = new CAdminFilter(
  $sTableID."_filter",
  array(
		GetMessage("WEBDEBUG_IMAGE_FILTER_CODE"),
		GetMessage("WEBDEBUG_IMAGE_FILTER_NAME"),
		GetMessage("WEBDEBUG_IMAGE_FILTER_ACTIVE"),
		GetMessage("WEBDEBUG_IMAGE_FILTER_SORT"),
		GetMessage("WEBDEBUG_IMAGE_FILTER_DESCR"),
  )
);
?>

<?CAjax::Init();?>

<script type="text/javascript">
var MYPOPUPWindow = new BX.CDialog({
	title: '<?=GetMessage("WEBDEBUG_IMAGE_IMPORT_WINDOW_TITLE")?>',
	content: '',
	icon: 'head-block',
	resizable: false,
	draggable: true,
	height: '230',
	width: '480'
});
MYPOPUPWindow.SetButtons(
	[{
		'title': '<?=GetMessage("WEBDEBUG_IMAGE_IMPORT_SAVE")?>',
		'id': 'action_send',
		'name': 'action_send',
		'action': function(){
			BX.showWait();
			BX("WebdebugImageImportForm").submit();
			this.parentWindow.Close();
		}
	}, {
		'title': '<?=GetMessage("WEBDEBUG_IMAGE_IMPORT_CANCEL")?>',
		'id': 'cancel',
		'name': 'cancel',
		'action': function(){
			this.parentWindow.Close();
		}
	}]
);
function WebdebugImageImport_callback(result) {
	MYPOPUPWindow.SetContent(result);
	BX.closeWait();
}
function WebdebugImageImport_openMyPopup() {
	BX.showWait();
	MYPOPUPWindow.SetContent('<?=GetMessage("WEBDEBUG_IMAGE_IMPORT_LOADING")?>');
	jsAjaxUtil.LoadData('/bitrix/admin/webdebug_image_import.php?lang=<?=LANGUAGE_ID?>&' + Math.random(), WebdebugImageImport_callback);
	MYPOPUPWindow.Show();
	return false;
}
</script>

<form name="find_form" method="get" action="<?=$APPLICATION->GetCurPage();?>">
	<?$oFilter->Begin();?>
	<tr>
		<td><b><?=GetMessage("WEBDEBUG_IMAGE_FILTER_ID")?>:</b></td>
		<td>
			<input type="text" size="25" name="find_id" value="<?=htmlspecialchars($find_id)?>" title="<?=GetMessage("WEBDEBUG_IMAGE_FILTER_ID_DESCR");?>"/>
		</td>
	</tr>
	<tr>
		<td><?=GetMessage("WEBDEBUG_IMAGE_FILTER_CODE")?>:</td>
		<td><input type="text" size="50" maxlength="255" name="find_code" value="<?=htmlspecialchars($find_code)?>" title="<?=GetMessage("WEBDEBUG_IMAGE_FILTER_CODE_DESCR");?>"/></td>
	</tr>
	<tr>
		<td><?=GetMessage("WEBDEBUG_IMAGE_FILTER_NAME")?>:</td>
		<td><input type="text" size="50" maxlength="255" name="find_name" value="<?=htmlspecialchars($find_name)?>" title="<?=GetMessage("WEBDEBUG_IMAGE_FILTER_NAME_DESCR");?>"/></td>
	</tr>
	<tr>
		<td><?=GetMessage("WEBDEBUG_IMAGE_FILTER_ACTIVE")?>:</td>
		<td>
			<?
			$arr = array(
				"reference" => array(
					GetMessage("WEBDEBUG_IMAGE_FILTER_ACTIVE_Y"),
					GetMessage("WEBDEBUG_IMAGE_FILTER_ACTIVE_N"),
				),
				"reference_id" => array("Y","N")
			);
			echo SelectBoxFromArray("find_active", $arr, $find_active, GetMessage("WEBDEBUG_IMAGE_FILTER_ACTIVE_ANY"), "");
			?>
		</td>
	</tr>
	<tr>
		<td><?=GetMessage("WEBDEBUG_IMAGE_FILTER_SORT")?>:</td>
		<td><input type="text" size="10" maxlength="10" name="find_sort" value="<?=htmlspecialchars($find_sort)?>" title="<?=GetMessage("WEBDEBUG_IMAGE_FILTER_SORT_DESCR");?>"/></td>
	</tr>
	<tr>
		<td><?=GetMessage("WEBDEBUG_IMAGE_FILTER_DESCR")?>:</td>
		<td><input type="text" size="50" maxlength="255" name="find_description" value="<?=htmlspecialchars($find_description)?>" title="<?=GetMessage("WEBDEBUG_IMAGE_FILTER_DESCR_DESCR");?>"/></td>
	</tr>
	<?$oFilter->Buttons(array("table_id"=>$sTableID,"url"=>$APPLICATION->GetCurPage(),"form" => "find_form"));?>
	<?$oFilter->End();?>
</form>

<?// Output ?>
<?$lAdmin->DisplayList();?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>