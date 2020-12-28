$(document).ready(function(){
	$(".webdebug-photogallery-simplest-thumbnails a").click(function(){
		WD_PhotoGalleryID  = $(this).attr("rel");
		$("#webdebug-photogallery-simplest-photo-"+WD_PhotoGalleryID+" img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
		$("#webdebug-photogallery-simplest-photo-"+WD_PhotoGalleryID+" h2").html($("> img", this).attr("title"));
		return false;
	});
	$(".webdebug-photogallery-simplest > img").load(function(){$(".webdebug-photogallery-simplest > img:hidden").fadeIn("slow")});
});