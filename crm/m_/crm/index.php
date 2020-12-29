<?
require_once('classes/edit.php');
if ($_REQUEST['type'] == 'logout') {
	ADMIN::logout();
} else {
	ADMIN::isAuth();
}
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<link rel="stylesheet" href="css/normalize.css?<?= md5_file('css/normalize.css'); ?>" type="text/css"/>
	<link rel="stylesheet" href="css/jquery.fancybox.css?<?= md5_file('css/jquery.fancybox.css'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/jquery.formstyler.css?<?= md5_file('css/jquery.formstyler.css'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/style.css?<?= md5_file('css/style.css'); ?>" type="text/css"/>


	<script type="text/javascript" src="js/jquery-1.11.1.min.js?<?= md5_file('js/jquery-1.11.1.min.js'); ?>"></script>
	<script type="text/javascript" src="js/jquery.formstyler.min.js?<?= md5_file('js/jquery.formstyler.min.js'); ?>"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js?<?= md5_file('js/jquery.fancybox.pack.js'); ?>"></script>
	<script type="text/javascript" src="js/all.js?<?= md5_file('js/all.js'); ?>"></script>
	<script type="text/javascript" src="js/longpolling.js?<?= md5_file('js/longpolling.js'); ?>"></script>

</head>
<script>
	(function ($) {
		$(function () {
			$('input, select').styler({});
		});
	})(jQuery);
</script>
<script>
	$(function () {
		<?$user = ADMIN::getCurrentUser();?>
		LongPolling.init(<?=$user["id"]?>);
	})
</script>
<body>
<?

if (empty($_REQUEST['type']) OR $_REQUEST["type"] == 'search') {
	include_once('lib/allrecords.php');
}
?>
</body>
</html>
