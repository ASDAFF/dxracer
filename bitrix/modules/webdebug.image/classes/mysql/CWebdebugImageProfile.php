<?
IncludeModuleLangFile(__FILE__);

class CWebdebugImageProfile {
	public $LAST_ERROR;
	
	// Get profiles list
	// ToDo: $arFilter
	function GetList($arSort=false, $arFilter=false) {
		global $DB;
		if (!is_array($arSort)) {$arSort = array("SORT"=>"ASC", "NAME"=>"ASC");}
		foreach ($arSort as $Key => $Value) {
			$Value = strtolower($Value);
			if ($Value!="asc" && $Value!="desc") {
				unset($arSort[$Key]);
			}
		}
		$SQL = "SELECT * FROM `b_webdebug_image_profiles`";
		// Filter
		if (is_array($arFilter) && !empty($arFilter)) {
			foreach ($arFilter as $arFilterKey => $arFilterVal) {
				if (trim($arFilterVal)=="") {unset($arFilter[$arFilterKey]);}
			}
			$arWhere = array();
			foreach ($arFilter as $Key => $arFilterItem) {
				$SubStr2 = substr($Key, 0, 2);
				$SubStr1 = substr($Key, 0, 1);
				$Key = $DB->ForSQL($Key);
				$arFilterItem = $DB->ForSQL($arFilterItem);
				if ($SubStr2==">=" || $SubStr2=="<=") {
					$Val = substr($Key, 2);
					if ($SubStr2 == ">=") {$arWhere[] = "`b_webdebug_image_profiles`.`{$Val}` >= '{$arFilterItem}'";}
					if ($SubStr2 == "<=") {$arWhere[] = "`b_webdebug_image_profiles`.`{$Val}` <= '{$arFilterItem}'";}
				} elseif ($SubStr1==">" || $SubStr1=="<") {
					$Val = substr($Key, 1);
					if ($SubStr1 == ">") {$arWhere[] = "`b_webdebug_image_profiles`.`{$Val}` > '{$arFilterItem}'";}
					if ($SubStr1 == "<") {$arWhere[] = "`b_webdebug_image_profiles`.`{$Val}` < '{$arFilterItem}'";}
					if ($SubStr1 == "!") {$arWhere[] = "`b_webdebug_image_profiles`.`{$Val}` <> '{$arFilterItem}'";}
				} elseif ($SubStr1=="%") {
					$Val = substr($Key, 1);
					$arWhere[] = "upper(`b_webdebug_image_profiles`.`{$Val}`) like upper ('%{$arFilterItem}%') and `b_webdebug_image_profiles`.`{$Val}` is not null";
				} else {
					$arWhere[] = "`b_webdebug_image_profiles`.`{$Key}` = '{$arFilterItem}'";
				}
			}
			if (count($arWhere)>0) {
				$SQL .= " WHERE ".implode(" AND ", $arWhere);
			}
		}
		// Sort
		if (is_array($arSort) && !empty($arSort)) {
			$SQL .= " ORDER BY ";
			$arSortBy = array();
			foreach ($arSort as $arSortKey => $arSortItem) {
				$arSortKey = $DB->ForSQL($arSortKey);
				$arSortItem = $DB->ForSQL($arSortItem);
				if (trim($arSortKey)!="") {
					$SortBy = "`{$arSortKey}`";
					if (trim($arSortItem)!="") {
						$SortBy .= " {$arSortItem}";
					}
					$arSortBy[] = $SortBy;
				}
			}
			$SQL .= implode(", ", $arSortBy);
		}
		return $DB->Query($SQL, false, __LINE__);
	}
	
	// Get by ID
	function GetByID($ID) {
		global $DB;
		if (trim($ID)=="") {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_GET_NOID");
			return false;
		} elseif (IntVal($ID)==0) {
			return self::GetList(false, array("CODE"=>htmlspecialchars($ID)));
		} else {
			return self::GetList(false, array("ID"=>$ID));
		}
	}
	
	// Add profile
	function Add($arFields) {
		global $DB;
		if (!is_array($arFields) || empty($arFields)) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_EMPTY_FIELDS");
			return false;
		}
		if (trim($arFields["NAME"])=="") {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_NO_NAME");
			return false;
		}
		$SQL_Keys = array();
		$SQL_Vals = array();
		foreach ($arFields as $Key => $Field) {
			$Key = $DB->ForSQL($Key);
			$Field = $DB->ForSQL($Field);
			$SQL_Keys[] = "`{$Key}`";
			$SQL_Vals[] = "'{$Field}'";
		}
		$SQL_Keys = implode(",",$SQL_Keys);
		$SQL_Vals = implode(",",$SQL_Vals);
		$SQL = "INSERT INTO `b_webdebug_image_profiles` ({$SQL_Keys}) VALUES ({$SQL_Vals})";
		$Res = $DB->Query($SQL, false, __LINE__);
		if ($Res === false) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_ADD_ERROR").$DB->db_Error;
			return false;
		}
		$LastID = $DB->LastID();
		if (is_numeric($LastID))
			return $LastID;
		else
			return false;
	}
	
	// Update profile
	function Update($ID, $arFields) {
		global $DB;
		$ID = IntVal($ID);
		if ($ID==0) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_UPDATE_NOID");
			return false;
		}
		if (!is_array($arFields) || empty($arFields)) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_EMPTY_FIELDS");
			return false;
		}
		if (isset($arFields["NAME"]) && trim($arFields["NAME"])=="") {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_NO_NAME");
			return false;
		}
		$SQL_SET = array();
		foreach ($arFields as $Key => $Field) {
			$Key = $DB->ForSQL($Key);
			$Field = $DB->ForSQL($Field);
			$SQL_SET[] = "`{$Key}`='{$Field}'";
		}
		$SQL_SET = implode(",",$SQL_SET);
		$SQL = "UPDATE `b_webdebug_image_profiles` SET {$SQL_SET} WHERE `ID`='{$ID}' LIMIT 1";
		$Res = $DB->Query($SQL, true, __LINE__);
		if ($Res === false) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_UPDATE_ERROR").$DB->db_Error;
			return false;
		}
		return $Res->AffectedRowsCount();
	}
	
	// DeleteProfile
	function Delete($ID) {
		global $DB;
		$ID = IntVal($ID);
		if ($ID==0) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_DELETE_NOID");
			return false;
		}
		if ($ID==1) {
			$this->LAST_ERROR = GetMessage("WEBDEBUG_IMAGE_ERROR_DELETE_DEFAULT");
			return false;
		}
		$SQL = "DELETE FROM `b_webdebug_image_profiles` WHERE `ID`='{$ID}' LIMIT 1";
		return $DB->Query($SQL, true, __LINE__);
	}
	
	/**
	 * Resize image
	 */
	function DoResize($arProfile, $ImageSrc) {
		if (is_file($_SERVER["DOCUMENT_ROOT"].$ImageSrc)) {
			$ImageProcessor = new CWebdebugImageProcessor($_SERVER["DOCUMENT_ROOT"].$ImageSrc);
			
			/* Convert settings */
			if (!isset($arProfile["CONVERT_MODE"]) || in_array($arProfile["CONVERT_MODE"],array("none","png","jpg","gif","bmp"))) $arProfile["CONVERT_MODE"] = "jpg";
			if ($arProfile["CONVERT_MODE"]!="none")
				$ImageProcessor->image_convert = $arProfile["CONVERT_MODE"];
			if ($arProfile["CONVERT_MODE_JPEG_TYPE"]=="quality" && IntVal($arProfile["CONVERT_MODE_JPEG_QUALITY_VALUE"])>0)
				$ImageProcessor->jpeg_quality = IntVal($arProfile["CONVERT_MODE_JPEG_QUALITY_VALUE"]);
			if ($arProfile["CONVERT_MODE_JPEG_TYPE"]=="size" && IntVal($arProfile["CONVERT_MODE_JPEG_SIZE_VALUE"])>0)
				$ImageProcessor->jpeg_size = IntVal($arProfile["CONVERT_MODE_JPEG_SIZE_VALUE"]);

			/* Resize settings */
			if ($arProfile["RESIZE_FLAG"]=="Y")
				$ImageProcessor->image_resize = true;
			if (IntVal($arProfile["WIDTH"])>0)
				$ImageProcessor->image_x = IntVal($arProfile["WIDTH"]);
			if (IntVal($arProfile["HEIGHT"])>0)
				$ImageProcessor->image_y = IntVal($arProfile["HEIGHT"]);
			if ($arProfile["RATIO_FLAG"]=="Y")
				$ImageProcessor->image_ratio = true;
			if ($arProfile["RATIOCROP_FLAG"]=="Y")
				$ImageProcessor->image_ratio_crop = true;
			if ($arProfile["FILL_FLAG"]=="Y") {
				$ImageProcessor->image_ratio_fill = true;
				$ImageProcessor->image_background_color = "#".$arProfile["BACKGROUND_COLOR"];
			}
			if ($arProfile["NOZOOMIN_FLAG"]=="Y")
				$ImageProcessor->image_ratio_no_zoom_in = true;
			if ($arProfile["NOZOOMOUT_FLAG"]=="Y")
				$ImageProcessor->image_ratio_no_zoom_out = true;
			if ($arProfile["RATIO_X_FLAG"]=="Y")
				$ImageProcessor->image_ratio_x = true;
			if ($arProfile["RATIO_Y_FLAG"]=="Y")
				$ImageProcessor->image_ratio_y = true;
			if (IntVal($arProfile["PIXELS"])>0)
				$ImageProcessor->image_ratio_pixels = IntVal($arProfile["PIXELS"]);
			
			/* Adjustments */
			if ($arProfile["BRIGHTNESS_FLAG"]=="Y")
				$ImageProcessor->image_brightness = $arProfile["BRIGHTNESS_VALUE"];
			if ($arProfile["CONTRAST_FLAG"]=="Y")
				$ImageProcessor->image_contrast = $arProfile["CONTRAST_VALUE"];
			if ($arProfile["OPACITY_FLAG"]=="Y")
				$ImageProcessor->image_opacity = $arProfile["OPACITY_VALUE"];
			if ($arProfile["TINT_FLAG"]=="Y")
				$ImageProcessor->image_tint_color = '#'.$arProfile["TINT_VALUE"];
			if ($arProfile["NEGATIVE_FLAG"]=="Y")
				$ImageProcessor->image_negative = true;
			if ($arProfile["GRAYSCALE_FLAG"]=="Y")
				$ImageProcessor->image_greyscale = true;
			if ($arProfile["SHARPEN_FLAG"]=="Y") {
				$ImageProcessor->image_unsharp = true;
				if ($arProfile["SHARPEN_AMOUNT_VALUE"]=="Y")
					$ImageProcessor->image_unsharp_amount = $arProfile["SHARPEN_AMOUNT_VALUE"];
				//if ($arProfile["SHARPEN_RADIUS_FLAG"]=="Y")
				//	$ImageProcessor->image_unsharp_radius = $arProfile["SHARPEN_RADIUS_VALUE"];
			}
			
			/* Text */
			if ($arProfile["TEXT_FLAG"]=="Y") {
				$ImageProcessor->image_text = $arProfile["TEXT_VALUE"];
				$ImageProcessor->image_text_direction = $arProfile["TEXT_DIRECTION_VALUE"];
				$ImageProcessor->image_text_color = "#".$arProfile["TEXT_COLOR"];
				$ImageProcessor->image_text_opacity = $arProfile["TEXT_OPACITY_VALUE"];
				$ImageProcessor->image_text_font = $arProfile["TEXT_SIZE_VALUE"];
				if ($arProfile["TEXT_BACKGROUND_FLAG"]=="Y") {
					$ImageProcessor->image_text_background = "#".$arProfile["TEXT_BACKGROUND_COLOR"];
					$ImageProcessor->image_text_background_opacity = $arProfile["TEXT_BACKGROUND_OPACITY_VALUE"];
				}
				if ($arProfile["TEXT_POSITION_TYPE"]=="place") {
					$ImageProcessor->image_text_position = $arProfile["TEXT_POSITION_VALUE"];
				} elseif ($arProfile["TEXT_POSITION_TYPE"]=="margins") {
					$ImageProcessor->image_text_x = $arProfile["TEXT_SPACE_H_VALUE"];
					$ImageProcessor->image_text_y = $arProfile["TEXT_SPACE_V_VALUE"];
				}
				$ImageProcessor->image_text_padding = $arProfile["TEXT_PADDING_VALUE"];
				$ImageProcessor->image_text_padding_x = $arProfile["TEXT_PADDING_H_VALUE"];
				$ImageProcessor->image_text_padding_y = $arProfile["TEXT_PADDING_V_VALUE"];
			}
			
			if ($arProfile["CORNERS_FLAG"]=="Y") {
				$ImageProcessor->image_corners = $_SERVER["DOCUMENT_ROOT"].$arProfile["CORNERS_FILE"];
			}
			
			if ($arProfile["WATERMARK_FLAG"]=="Y") {
				$ImageProcessor->image_watermark = $_SERVER["DOCUMENT_ROOT"].$arProfile["WATERMARK_FILE"];
				if ($arProfile["WATERMARK_POSITION_TYPE"]=="place") {
					$ImageProcessor->image_watermark_position = $arProfile["WATERMARK_POSITION_VALUE"];
				} elseif ($arProfile["WATERMARK_POSITION_TYPE"]=="margins") {
					$ImageProcessor->image_watermark_x = $arProfile["WATERMARK_SPACE_H_VALUE"];
					$ImageProcessor->image_watermark_y = $arProfile["WATERMARK_SPACE_V_VALUE"];
				}
			}

			if ($arProfile["REFLECTION_FLAG"]=="Y") {
				$ImageProcessor->image_reflection_height = $arProfile["REFLECTION_HEIGHT_VALUE"];
				$ImageProcessor->image_reflection_space = $arProfile["REFLECTION_SPACE_VALUE"];
				if ($arProfile["REFLECTION_COLOR"]!="")
					$ImageProcessor->image_default_color = "#".$arProfile["REFLECTION_COLOR"];
				if ($arProfile["REFLECTION_OPACITY_FLAG"]=="Y") {
					$ImageProcessor->image_reflection_opacity = $arProfile["REFLECTION_OPACITY_VALUE"];
				} elseif ($arProfile["REFLECTION_OPACITY_FLAG"]=="N") {
					$ImageProcessor->image_reflection_opacity = "100";
				}
			}
			
			// "Borders"
			if ($arProfile["BORDER_FLAG"]=="Y") {
				$ImageProcessor->image_border = $arProfile["BORDER_VALUE"];
				if (trim($arProfile["BORDER_COLOR"])!="") {
					$ImageProcessor->image_border_color = "#".$arProfile["BORDER_COLOR"];
				}
				if ($arProfile["BORDER_OPACITY_FLAG"]=="Y") {
					$ImageProcessor->image_border_opacity = $arProfile["BORDER_OPACITY_VALUE"];
				}
				if ($arProfile["BORDER_TRANSPARENT_FLAG"]=="Y") {
					$ImageProcessor->image_border_transparent = $arProfile["BORDER_TRANSPARENT_VALUE"];
				}
			}
			if ($arProfile["FRAME_FLAG"]=="Y") {
				if (in_array(IntVal($arProfile["FRAME_VALUE"]),array("1","2"))) {
					$ImageProcessor->image_frame = IntVal($arProfile["FRAME_VALUE"]);
				}
				if ($arProfile["FRAME_OPACITY_FLAG"]=="Y" && IntVal($arProfile["FRAME_VALUE"])>0) {
					$ImageProcessor->image_frame_opacity = IntVal($arProfile["FRAME_OPACITY_VALUE"]);
				}
				$arFrameColors = explode(",", $arProfile["FRAME_COLOR"]);
				foreach ($arFrameColors as $Key => $Value) $arFrameColors[$Key] = "#".$Value;
				$ImageProcessor->image_frame_colors = $arFrameColors;
			}
			if ($arProfile["BEVEL_FLAG"]=="Y") {
				$ImageProcessor->image_bevel = $arProfile["BEVEL_VALUE"];
				if (trim($arProfile["BEVEL_COLOR_1"])!="") {
					$ImageProcessor->image_bevel_color1 = "#".$arProfile["BEVEL_COLOR_1"];
				}
				if (trim($arProfile["BEVEL_COLOR_2"])!="") {
					$ImageProcessor->image_bevel_color2 = "#".$arProfile["BEVEL_COLOR_2"];
				}
			}
			
			// "Additional"
			if ($arProfile["FLIP_FLAG"]=="Y" && in_array($arProfile["FLIP_VALUE"],array("h","v"))) {
				$ImageProcessor->image_flip = $arProfile["FLIP_VALUE"];
			}
			if ($arProfile["ROTATE_FLAG"]=="Y" && in_array($arProfile["ROTATE_VALUE"],array("90","180","270"))) {
				$ImageProcessor->image_rotate = $arProfile["ROTATE_VALUE"];
			}
			if ($arProfile["CROP_FLAG"]=="Y" && trim($arProfile["CROP_VALUE"])!="") {
				$ImageProcessor->image_crop = $arProfile["CROP_VALUE"];
			}
			if ($arProfile["PRECROP_FLAG"]=="Y" && trim($arProfile["PRECROP_VALUE"])!="") {
				$ImageProcessor->image_precrop = $arProfile["PRECROP_VALUE"];
			}
			return $ImageProcessor->Process();
		}
		return false;
	}
	
	/**
	 * Get relative save path to images
	 */
	function Resize($arProfile, $ImageSrc, $Cache=false) {
		$ImageSrc = urldecode($ImageSrc);
		$SaveFileName = self::GetSaveFileName($arProfile, $ImageSrc);
		$CacheExists = false;
		if (is_file($_SERVER["DOCUMENT_ROOT"].$SaveFileName) && $Cache) {
			$CacheExists = true;
			return $SaveFileName;
		} else {
			@unlink($_SERVER["DOCUMENT_ROOT"].$SaveFileName);
			file_put_contents($_SERVER["DOCUMENT_ROOT"].$SaveFileName, self::DoResize($arProfile, $ImageSrc));
			return $SaveFileName;
		}
	}
	
	/**
	 * Get relative save path to images
	 */
	function GetSaveFileName($arProfile, $ImageSrc) {
		$FileSize = 0;
		if (is_file($_SERVER["DOCUMENT_ROOT"].$ImageSrc)) {
			$FileSize = filesize($_SERVER["DOCUMENT_ROOT"].$ImageSrc);
		}
		foreach ($arProfile as $Key => $Value) {
			if (in_array($Key,array("ID","ACTIVE","NAME","CODE","DESCRIPTION","SORT")) || substr($Key,0,1)=="~") unset($arProfile[$Key]);
		}
		$CacheUniqStrFull = $arParams["IMAGE"].$FileSize.implode("", $arProfile);
		if ($arProfile["CORNERS_FLAG"]=="Y" && trim($arProfile["CORNERS_FILE"])!="") {
			if (substr($arProfile["CORNERS_FILE"],0,1)!="/") $arProfile["CORNERS_FILE"] = "/".$arProfile["CORNERS_FILE"];
			$arProfile["CORNERS_FILE"] = $_SERVER["DOCUMENT_ROOT"].$arProfile["CORNERS_FILE"];
			$arFileCorners = getimagesize($arProfile["CORNERS_FILE"]);
			$CacheUniqStrFull .= implode(",", $arFileCorners);
		}
		if ($arProfile["WATERMARK_FLAG"]=="Y" && trim($arProfile["WATERMARK_FILE"])!="") {
			if (substr($arProfile["WATERMARK_FILE"],0,1)!="/") $arProfile["WATERMARK_FILE"] = "/".$arProfile["WATERMARK_FILE"];
			$arProfile["WATERMARK_FILE"] = $_SERVER["DOCUMENT_ROOT"].$arProfile["WATERMARK_FILE"];
			$arFileWatermark = getimagesize($arProfile["WATERMARK_FILE"]);
			$CacheUniqStrFull .= implode(",", $arFileWatermark);
		}
		$CacheUniqStr = MD5($CacheUniqStrFull);
		$arProfile["SAVE_MODE_FILE_LENGTH"] = IntVal($arProfile["SAVE_MODE_FILE_LENGTH"]);
		if ($arProfile["SAVE_MODE_FILE_LENGTH"]>0 && $arProfile["SAVE_MODE_FILE_LENGTH"]<=32) {
			$CacheUniqStr = substr($CacheUniqStr, 0, IntVal($arProfile["SAVE_MODE_FILE_LENGTH"]));
		}
		$SaveFolder = "/upload/images/";
		if (!is_dir($_SERVER["DOCUMENT_ROOT"].$SaveFolder)) mkdir($_SERVER["DOCUMENT_ROOT"].$SaveFolder, BX_DIR_PERMISSIONS, true);
		if ($arProfile["SAVE_FOLDER"]!="default") {
			$SaveFolder = $arProfile["SAVE_FOLDER_PATH"];
			if (substr($SaveFolder,-1)!="/") $SaveFolder .= "/";
		}
		switch ($arProfile["CONVERT_MODE"]) {
			case "png":
				$Ext = ".png";
				break;
			case "gif":
				$Ext = ".gif";
				break;
			case "bmp":
				$Ext = ".bmp";
				break;
			case "jpg":
			case "jpeg":
				$Ext = ".jpg";
				break;
			default:
				$Ext = ".".end(explode(".", $ImageSrc));
				break;
		}
		if ($arProfile["SAVE_MODE"]=="files") { // files
			$SaveFileName = $SaveFolder.$CacheUniqStr.$Ext;
		} else { // folders
			$OriginalFileName = end(explode("/",$ImageSrc));
			$OriginalFileName = substr($OriginalFileName, 0, -1*strlen($Ext));
			#$OriginalFileName = urldecode($OriginalFileName);
			if (!is_dir($_SERVER["DOCUMENT_ROOT"].$SaveFolder.$CacheUniqStr."/")) mkdir($_SERVER["DOCUMENT_ROOT"].$SaveFolder.$CacheUniqStr."/", BX_DIR_PERMISSIONS, true);
			$SaveFileName = $SaveFolder.$CacheUniqStr."/".$OriginalFileName.$Ext;
		}
		return $SaveFileName;
	}
}

?>