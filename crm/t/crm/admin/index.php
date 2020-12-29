<?
require_once('../classes/admin.php');
require_once('../classes/longpolling.php');

$CAdmin = new ADMIN();
session_start();
if (!ADMIN::isAdmin())
	header('Location: ' . CONFIG::$conf['servername'] . CONFIG::$conf['path']);

if ($_REQUEST['type'] == 'logout') {
	ADMIN::logout();
} else {
	ADMIN::isAuth();
}

if ($_REQUEST["type"] == 'insert') {
	if (!empty($_REQUEST["name_dlvr"])) {
		$arrValues = $_REQUEST["name_dlvr"];
		foreach ($arrValues as $key => $value) {
			$CAdmin->valueInsert = $value;
			$CAdmin->idUpdate = $key;
			if (empty($CAdmin->valueInsert)) {
				$CAdmin->delServicesDelivery();
				continue;
			}
			$CAdmin->insertUpdateServicesDelivery();
		}
	} elseif (!empty($_REQUEST["name_users"])) {
		$arrValues = $_REQUEST["name_users"];
		foreach ($arrValues as $id => $value) {
			if (empty($value)) {
				$CAdmin->delUsers($id);
				continue;
			}
			$CAdmin->insertUpdateUsers($id, $_REQUEST["name_users"][$id], $_REQUEST["password_user"][$id]);
		}
	}
}
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="../css/normalize.css?<?= md5_file('css/normalize.css'); ?>" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="../css/jquery.fancybox.css?<?= md5_file('../css/jquery.fancybox.css'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" href="../css/jquery.formstyler.css?<?= md5_file('../css/jquery.formstyler.css'); ?>" type="text/css" media="screen"/>
	<link href="../css/admin.css?<?= md5_file('../css/admin.css'); ?>" type="text/css" rel="stylesheet"/>
	<link href="../css/style.css?<?= md5_file('../css/style.css'); ?>" type="text/css" rel="stylesheet"/>

	<script type="text/javascript" src="../js/jquery-1.11.1.min.js?<?= md5_file('../js/jquery-1.11.1.min.js'); ?>"></script>
	<script type="text/javascript" src="../js/jquery.formstyler.min.js?<?= md5_file('../js/jquery.formstyler.min.js'); ?>"></script>
	<script type="text/javascript" src="../js/jquery.fancybox.pack.js?<?= md5_file('../js/jquery.fancybox.pack.js'); ?>"></script>
	<script type="text/javascript" src="../js/admin.js?<?= md5_file('../js/admin.js'); ?>"></script>
	<script type="text/javascript" src="../js/longpolling.js?<?= md5_file('../js/admin.js'); ?>"></script>

</head>
<script>
	$(function () {
		<?$user = ADMIN::getCurrentUser();?>
		LongPolling.init(<?=$user["id"]?>);
	})
</script>
<body>
<header>
	<span>Панель администрирования</span>
	<a href="/t/crm/">Вернутся</a>
	<a href="?type=logout">Выйти</a>
</header>

<wrapper>
	<button id="service_dlvr" class="styler left">Службы доставки</button>
	<button id="usersFormCall" class="styler left">Пользователи</button>
	<button id="export" class="styler left">Экспорт</button>
</wrapper>
<footer>
	<form id="insertServDlvr" action="" method="post" style="display: none;">
		<input type="hidden" name="type" value="insert">
		<? $arrDlvr = $CAdmin->getServicesDelivery();
		foreach ($arrDlvr as $value) { ?>
			<input type="text" class="styler" name="name_dlvr[<?= $value["id"] ?>]" id="name_dlvr" value="<?= $value["name"] ?>"><br>
		<? } ?>
		<input type="text" class="styler" name="name_dlvr[]" id="name_dlvr" value=""><br>
		<input type="submit" class="styler" value="Сохранить">
	</form>

	<form id="exportForm" action="export.php" method="post" style="display: none;">
		<input type="hidden" name="type" value="export">
		<span>По дате окончания сделок</span>
		<br>
		<input type="date" name="from" class="styler left">
		<input type="date" name="to" class="styler left">

		<div class="clear"></div>
		<input type="submit" class="styler" value="Экспортировать">
	</form>

	<form id="usersForm" action="" method="post" style="display: none;">
		<input type="hidden" name="type" value="insert">
		<? $arrUsers = $CAdmin->getUsers();
		foreach ($arrUsers as $value) { ?>
			<div class="left">
				<label for="name_users">Имя пользователя</label><br>
				<input type="text" class="styler" name="name_users[<?= $value["id"] ?>]" id="name_users" value="<?= $value["name"] ?>">
			</div>
			<div class="left">
				<label for="name_users">Пароль</label><br>
				<input type="text" class="styler" name="password_user[<?= $value["id"] ?>]" id="password_user" value="<?= $value["password"] ?>">
			</div>
			<div class="clear"></div>
		<? } ?>
		<div class="left">
			<label for="name_users">Имя пользователя</label><br>
			<input type="text" class="styler" name="name_users[]" id="name_users" value="">
		</div>
		<div class="left">
			<label for="password_user">Пароль</label><br>
			<input type="text" class="styler" name="password_user[]" id="password_user" value="">
		</div>
		<div class="clear"></div>
		<input type="submit" class="styler" value="Сохранить">
		<br>
		<span class="red">Для удаления пользователя <br>достаточно стереть его имя и сохранить</span>
	</form>
	<br>
</footer>
</body>
</html>