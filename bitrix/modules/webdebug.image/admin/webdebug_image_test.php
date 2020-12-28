<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule("webdebug.image")) {
	ob_clean();

	$ImageProcessor = new CWebdebugImageProcessor($_SERVER["DOCUMENT_ROOT"]."/bitrix/images/webdebug.image/photo.jpg");
	
	/* Convert settings */
	if (isset($_REQUEST["convert_mode"]) && $_REQUEST["convert_mode"]=="jpeg")
		$_REQUEST["convert_mode"] = "jpg";
	if (in_array($_REQUEST["convert_mode"], array("jpg","png","gif","bmp")))
		$ImageProcessor->image_convert = $_REQUEST["convert_mode"];
	if ($_REQUEST["jpeg_quality_type"]=="quality" && IntVal($_REQUEST["jpeg_quality_value"])>0)
		$ImageProcessor->jpeg_quality = IntVal($_REQUEST["jpeg_quality_value"]);
	if ($_REQUEST["jpeg_quality_type"]=="size" && IntVal($_REQUEST["jpeg_quality_size"])>0)
		$ImageProcessor->jpeg_size = IntVal($_REQUEST["jpeg_quality_size"]);

	/* Resize settings */
	if ($_REQUEST["resize_flag"]=="Y")
		$ImageProcessor->image_resize = true;
	if (IntVal($_REQUEST["width"])>0)
		$ImageProcessor->image_x = IntVal($_REQUEST["width"]);
	if (IntVal($_REQUEST["height"])>0)
		$ImageProcessor->image_y = IntVal($_REQUEST["height"]);
	if ($_REQUEST["ratio_flag"]=="Y")
		$ImageProcessor->image_ratio = true;
	if ($_REQUEST["ratiocrop_flag"]=="Y")
		$ImageProcessor->image_ratio_crop = true;
	if ($_REQUEST["fill_flag"]=="Y") {
		$ImageProcessor->image_ratio_fill = true;
		$ImageProcessor->image_background_color = "#".$_REQUEST["background_color"];
	}
	if ($_REQUEST["nozoomin_flag"]=="Y")
		$ImageProcessor->image_ratio_no_zoom_in = true;
	if ($_REQUEST["nozoomout_flag"]=="Y")
		$ImageProcessor->image_ratio_no_zoom_out = true;
	if ($_REQUEST["ratio_x"]=="Y")
		$ImageProcessor->image_ratio_x = true;
	if ($_REQUEST["ratio_y"]=="Y")
		$ImageProcessor->image_ratio_y = true;
	if (IntVal($_REQUEST["pixels"])>0)
		$ImageProcessor->image_ratio_pixels = $_REQUEST["pixels"];
	
	/* Adjustments */
	if ($_REQUEST["brightness_flag"]=="Y")
		$ImageProcessor->image_brightness = $_REQUEST["brightness_value"];
	if ($_REQUEST["contrast_flag"]=="Y")
		$ImageProcessor->image_contrast = $_REQUEST["contrast_value"];
	if ($_REQUEST["opacity_flag"]=="Y")
		$ImageProcessor->image_opacity = $_REQUEST["opacity_value"];
	if ($_REQUEST["tint_flag"]=="Y")
		$ImageProcessor->image_tint_color = '#'.$_REQUEST["tint_value"];
	if ($_REQUEST["negative_flag"]=="Y")
		$ImageProcessor->image_negative = true;
	if ($_REQUEST["grayscale_flag"]=="Y")
		$ImageProcessor->image_greyscale = true;
	if ($_REQUEST["sharpen_flag"]=="Y") {
		$ImageProcessor->image_unsharp = true;
		if ($_REQUEST["sharpen_amount_flag"]=="Y")
			$ImageProcessor->image_unsharp_amount = $_REQUEST["sharpen_amount_value"];
		//if ($_REQUEST["sharpen_radius_flag"]=="Y")
		//	$ImageProcessor->image_unsharp_radius = $_REQUEST["sharpen_radius_value"];
	}
	
	/* Text */
	if ($_REQUEST["text_flag"]=="Y") {
		$ImageProcessor->image_text = $_REQUEST["text_value"];
		$ImageProcessor->image_text_direction = $_REQUEST["text_direction"];
		$ImageProcessor->image_text_color = "#".$_REQUEST["text_color"];
		$ImageProcessor->image_text_opacity = $_REQUEST["text_opacity"];
		$ImageProcessor->image_text_font = $_REQUEST["text_size"];
		$ImageProcessor->image_text_font = "tahoma.gdf";
		if ($_REQUEST["text_background_flag"]=="Y") {
			$ImageProcessor->image_text_background = "#".$_REQUEST["text_background_color"];
			$ImageProcessor->image_text_background_opacity = $_REQUEST["text_background_opacity"];
		}
		if ($_REQUEST["text_position_type"]=="place") {
			$ImageProcessor->image_text_position = $_REQUEST["text_position_place"];
		} elseif ($_REQUEST["text_position_type"]=="margins") {
			$ImageProcessor->image_text_x = $_REQUEST["text_space_h"];
			$ImageProcessor->image_text_y = $_REQUEST["text_space_v"];
		}
		$ImageProcessor->image_text_padding = $_REQUEST["text_padding"];
		$ImageProcessor->image_text_padding_x = $_REQUEST["text_padding_h"];
		$ImageProcessor->image_text_padding_y = $_REQUEST["text_padding_v"];
	}
	
	if ($_REQUEST["corners"]=="Y") {
		if (substr($_REQUEST["cornersfile"],0,1)!="/") $_REQUEST["cornersfile"] = "/".$_REQUEST["cornersfile"];
		$ImageProcessor->image_corners = $_SERVER["DOCUMENT_ROOT"].$_REQUEST["cornersfile"];
	}
	
	if ($_REQUEST["watermark"]=="Y") {
		if (substr($_REQUEST["watermarkfile"],0,1)!="/") $_REQUEST["watermarkfile"] = "/".$_REQUEST["watermarkfile"];
		$ImageProcessor->image_watermark = $_SERVER["DOCUMENT_ROOT"].$_REQUEST["watermarkfile"];
		if ($_REQUEST["watermarkpostype"]=="place") {
			$ImageProcessor->image_watermark_position = $_REQUEST["watermarkposition"];
		} elseif ($_REQUEST["watermarkpostype"]=="margins") {
			$ImageProcessor->image_watermark_x = $_REQUEST["watermarkspaceh"];
			$ImageProcessor->image_watermark_y = $_REQUEST["watermarkspacev"];
		}
	}

	if ($_REQUEST["reflection"]=="Y") {
		$ImageProcessor->image_reflection_height = $_REQUEST["reflectionh"];
		$ImageProcessor->image_reflection_space = $_REQUEST["reflectionsp"];
		$ImageProcessor->image_default_color = "#".(trim($_REQUEST["reflectionc"])!="" ? $_REQUEST["reflectionc"] : "FFFFFF");
		if ($_REQUEST["reflectionop"]=="Y") {
			$ImageProcessor->image_reflection_opacity = $_REQUEST["reflectionop_val"];
		} elseif ($_REQUEST["reflectionop"]=="N") {
			$ImageProcessor->image_reflection_opacity = "100";
		}
	}
	
	// "Borders"
	if ($_REQUEST["border_flag"]=="Y") {
		$ImageProcessor->image_border = $_REQUEST["border_value"];
		if (trim($_REQUEST["border_color"])!="") {
			$ImageProcessor->image_border_color = "#".($_REQUEST["border_color"]!="" ? $_REQUEST["border_color"] : "000000");
		}
		if ($_REQUEST["border_opacity_flag"]=="Y") {
			$ImageProcessor->image_border_opacity = $_REQUEST["border_opacity_value"];
		}
		if ($_REQUEST["border_transparent_flag"]=="Y") {
			$ImageProcessor->image_border_transparent = $_REQUEST["border_transparent_value"];
		}
	}
	if ($_REQUEST["frame_flag"]=="Y") {
		if (in_array(IntVal($_REQUEST["frame_type"]),array("1","2"))) {
			$ImageProcessor->image_frame = IntVal($_REQUEST["frame_type"]);
		}
		if ($_REQUEST["frame_opacity_flag"]=="Y" && IntVal($_REQUEST["frame_type"])>0) {
			$ImageProcessor->image_frame_opacity = IntVal($_REQUEST["frame_opacity_value"]);
		}
		//$ImageProcessor->image_frame_colors = explode(",", $_REQUEST["frame_color"]);
		$arFrameColors = explode(",", $_REQUEST["frame_color"]);
		foreach ($arFrameColors as $Key => $Value) $arFrameColors[$Key] = "#".$Value;
		$ImageProcessor->image_frame_colors = $arFrameColors;
	}
	if ($_REQUEST["bevel_flag"]=="Y") {
		$ImageProcessor->image_bevel = $_REQUEST["bevel_value"];
		if (trim($_REQUEST["bevel_color_1"])!="") {
			$ImageProcessor->image_bevel_color1 = "#".$_REQUEST["bevel_color_1"];
		}
		if (trim($_REQUEST["bevel_color_2"])!="") {
			$ImageProcessor->image_bevel_color2 = "#".$_REQUEST["bevel_color_2"];
		}
	}
	
	// "Additional"
	if ($_REQUEST["flip_flag"]=="Y" && in_array($_REQUEST["flip_value"],array("h","v"))) {
		$ImageProcessor->image_flip = $_REQUEST["flip_value"];
	}
	if ($_REQUEST["rotate_flag"]=="Y" && in_array($_REQUEST["rotate_value"],array("90","180","270"))) {
		$ImageProcessor->image_rotate = $_REQUEST["rotate_value"];
	}
	if ($_REQUEST["crop_flag"]=="Y" && trim($_REQUEST["crop_value"])!="") {
		$ImageProcessor->image_crop = $_REQUEST["crop_value"];
	}
	if ($_REQUEST["precrop_flag"]=="Y" && trim($_REQUEST["precrop_value"])!="") {
		$ImageProcessor->image_precrop = $_REQUEST["precrop_value"];
	}

	header('Content-type: ' . $ImageProcessor->file_src_mime);
	print $ImageProcessor->Process();
}

die();
?>