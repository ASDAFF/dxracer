<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
if($_SERVER['HTTP_HOST']!="timeavenue.su:443"){
$domein = 0;
}else{
$domein = 1;
}
?>
<div class='feedbacks-title'>
    <div class='container'>
		 <div class='col-xs-12'>
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<h1 class='text-center'>Отзывы</h1><br>
</div>
    </div>
</div>
<div class='feedbacks-main-block'>
    <div class='container'>
		<?//if($domein!=1):?>
        <?//$GLOBALS["VIDEO_F"] = array('IBLOCK_ID'=>10,'!PROPERTY_VIDEO' => false);?>
		<?
// 		$APPLICATION->IncludeComponent(
// 	"bitrix:news.list", 
// 	"flat_feed", 
// 	array(
// 		"DISPLAY_DATE" => "Y",
// 		"DISPLAY_NAME" => "N",
// 		"DISPLAY_PICTURE" => "N",
// 		"DISPLAY_PREVIEW_TEXT" => "N",
// 		"AJAX_MODE" => "N",
// 		"IBLOCK_TYPE" => "content",
// 		"IBLOCK_ID" => "10",
// 		"NEWS_COUNT" => "100",
// 		"SORT_BY1" => "ACTIVE_FROM",
// 		"SORT_ORDER1" => "DESC",
// 		"SORT_BY2" => "SORT",
// 		"SORT_ORDER2" => "ASC",
// 		"FILTER_NAME" => "VIDEO_F",
// 		"FIELD_CODE" => array(
// 			0 => "ID",
// 			1 => "",
// 		),
// 		"PROPERTY_CODE" => array(
// 			0 => "VIDEO",
// 			1 => "",
// 		),
// 		"CHECK_DATES" => "Y",
// 		"DETAIL_URL" => "",
// 		"PREVIEW_TRUNCATE_LEN" => "",
// 		"ACTIVE_DATE_FORMAT" => "d.m.Y",
// 		"SET_TITLE" => "N",
// 		"SET_BROWSER_TITLE" => "N",
// 		"SET_META_KEYWORDS" => "N",
// 		"SET_META_DESCRIPTION" => "N",
// 		"SET_LAST_MODIFIED" => "Y",
// 		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
// 		"ADD_SECTIONS_CHAIN" => "N",
// 		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
// 		"PARENT_SECTION" => "",
// 		"PARENT_SECTION_CODE" => "",
// 		"INCLUDE_SUBSECTIONS" => "N",
// 		"CACHE_TYPE" => "A",
// 		"CACHE_TIME" => "3600",
// 		"CACHE_FILTER" => "Y",
// 		"CACHE_GROUPS" => "N",
// 		"DISPLAY_TOP_PAGER" => "Y",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"PAGER_TITLE" => "Новости",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_TEMPLATE" => "",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "N",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"SET_STATUS_404" => "Y",
// 		"SHOW_404" => "Y",
// 		"MESSAGE_404" => "",
// 		"PAGER_BASE_LINK" => "",
// 		"PAGER_PARAMS_NAME" => "arrPager",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"COMPONENT_TEMPLATE" => "flat_feed",
// 		"TEMPLATE_THEME" => "blue",
// 		"STRICT_SECTION_CHECK" => "N",
// 		"MEDIA_PROPERTY" => "",
// 		"SLIDER_PROPERTY" => "",
// 		"SEARCH_PAGE" => "/search/",
// 		"USE_RATING" => "Y",
// 		"USE_SHARE" => "N",
// 		"FILE_404" => "",
// 		"DISPLAY_AS_RATING" => "rating",
// 		"MAX_VOTE" => "5",
// 		"VOTE_NAMES" => array(
// 			0 => "1",
// 			1 => "2",
// 			2 => "3",
// 			3 => "4",
// 			4 => "5",
// 			5 => "",
// 		)
// 	),
// 	false
// );
?>
<?//endif;?>
<?$GLOBALS["TEXT_F"] = array('IBLOCK_ID'=>10,'PROPERTY_VIDEO' => false);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"flat_feed", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "10",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "TEXT_F",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "VIDEO",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "flat_feed",
		"TEMPLATE_THEME" => "blue",
		"STRICT_SECTION_CHECK" => "N",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "Y",
		"USE_SHARE" => "N",
		"FILE_404" => "",
		"DISPLAY_AS_RATING" => "rating",
		"MAX_VOTE" => "5",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		)
	),
	false
);?>
    </div>
</div><br>
<div class="feed-form-box">
    <div class="container">
        <h2 class="text-center">Оставить отзыв</h2><br>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <div class="mfeedback">

<form action="javascript:void(0);" method="POST" id="feedbackForm">
	<div class='form-group'>
		<div class='col-xs-6 text-right'>ОЦЕНКА:</div>
		<div class='col-xs-6'>
			<label for='radio_8'><i class="fa fa-star-o"></i></label>
			<label for='radio_9'><i class="fa fa-star-o"></i></label>
			<label for='radio_10'><i class="fa fa-star-o"></i></label>
			<label for='radio_11'><i class="fa fa-star-o"></i></label>
			<label for='radio_12'><i class="fa fa-star-o"></i></label>
			<input type="radio" id="radio_8" name="RAITING_FEEDS" value="1" class="star">
            <input type="radio" id="radio_9" name="RAITING_FEEDS" value="2" class="star">
            <input type="radio" id="radio_10" name="RAITING_FEEDS" value="3" class="star">
            <input type="radio" id="radio_11" name="RAITING_FEEDS" value="4" class="star">
            <input type="radio" id="radio_12" name="RAITING_FEEDS" value="5"class="star">
		</div>
		<div class='clearfix'></div>
	</div>
<div class="form-group">
		<input type="text" class="form-control" name="user_name" placeholder="ФИО *" required="" value="">
	</div>
	<div class="form-group">
		
		<input type="text" class="form-control" name="user_email" placeholder="E-MAIL *" required="" value="">
	</div>

	<div class="form-group">
		<textarea name="MESSAGE" class="form-control" rows="5" placeholder="ОТЗЫВ *" required="" cols="40"></textarea>
	</div>
	<button type="submit" class="btn footer-mail" style="border-radius:0px!important;" name="submit"> Отправить<span><img src="/local/templates/main/img/arWhite.png"></span></button>
	<br>
	<div class='ressult'></div>
</form>
</div></div><div class="col-xs-4"></div><div class="clearfix"></div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>