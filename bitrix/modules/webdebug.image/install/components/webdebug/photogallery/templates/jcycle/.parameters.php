<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arTemplateParameters = array(
	"INCLUDE_JQUERY_EASING" => array(
		"PARENT" => "JQUERY_SETTINGS",
		"NAME" => GetMessage("WEBDEBUG_IMAGE_INCLUDE_JQUERY_EASING"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"JQUERY_CYCLE_EFFECT" => Array(
		"NAME" => GetMessage("WEBDEBUG_IMAGE_JQUERY_CYCLE_EFFECT"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"none" => GetMessage("WEBDEBUG_IMAGE_JQUERY_CYCLE_EFFECT_NONE"),
			"all" => "all",
			"blindX" => "blindX",
			"blindY" => "blindY",
			"blindZ" => "blindZ",
			"cover" => "cover",
			"curtainX" => "curtainX",
			"curtainY" => "curtainY",
			"fade" => "fade",
			"fadeZoom" => "fadeZoom",
			"growX" => "growX",
			"growY" => "growY",
			"scrollUp" => "scrollUp",
			"scrollDown" => "scrollDown",
			"scrollLeft" => "scrollLeft",
			"scrollRight" => "scrollRight",
			"scrollHorz" => "scrollHorz",
			"scrollVert" => "scrollVert",
			"shuffle" => "shuffle",
			"slideX" => "slideX",
			"slideY" => "slideY",
			"toss" => "toss",
			"turnUp" => "turnUp",
			"turnDown" => "turnDown",
			"turnLeft" => "turnLeft",
			"turnRight" => "turnRight",
			"uncover" => "uncover",
			"wipe" => "wipe",
			"zoom" => "zoom"
		),
		"MULTIPLE" => "Y",
		"SIZE" => "10",
		"DEFAULT" => "fade",
	),
	"JQUERY_CYCLE_TIMEOUT" => Array(
		"NAME" => GetMessage("WEBDEBUG_IMAGE_JQUERY_CYCLE_INTERVAL"),
		"TYPE" => "TEXT",
		"DEFAULT" => "4000"
	),
	"JQUERY_CYCLE_PAUSE" => Array(
		"NAME" => GetMessage("WEBDEBUG_IMAGE_JQUERY_CYCLE_PAUSE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y"
	),
	"JQUERY_CYCLE_SPEED" => Array(
		"NAME" => GetMessage("WEBDEBUG_IMAGE_JQUERY_CYCLE_SPEED"),
		"TYPE" => "TEXT",
		"DEFAULT" => "600"
	)
);

?>

<div style="color:green; font-weight:bold;">
	<?=GetMessage("WEBDEBUG_IMAGE_SIZE_NOTICE")?>
</div><br/>