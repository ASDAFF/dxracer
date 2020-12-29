<?
session_start();
require_once('../classes/admin.php');
if (intval($_REQUEST['auth']) == 1) {
	$CAdmin = new ADMIN();
	$CAdmin->auth($_REQUEST['name'], $_REQUEST['password']);

	if (ADMIN::isAuth()) {

		if (ADMIN::isAdmin()) //если это админ то редиректим на админку если нет то на пользователя
			header('Location: ' . CONFIG::$conf['servername'] . CONFIG::$conf['path'] . 'admin');
		else
			header('Location: ' . CONFIG::$conf['servername'] . CONFIG::$conf['path']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="../css/auth/css/reset.css?<?= md5_file('../css/auth/css/reset.css'); ?>">
	<link rel="stylesheet" href="../css/auth/css/animate.css?<?= md5_file('../css/auth/css/animate.css'); ?>">
	<link rel="stylesheet" href="../css/auth/css/styles.css?<?= md5_file('../css/auth/css/styles.css'); ?>">
</head>
<body>
<div id="container">
	<form method="post" action="">
		<label for="name">Логин:</label>
		<input type="name" name="name">
		<label for="username">Пароль:</label>
		<input type="password" name="password">

		<div id="lower">
			<input type="submit" value="Войти">
		</div>
		<input type="hidden" name="auth" value="1">
	</form>
</div>
</body>
</html>

