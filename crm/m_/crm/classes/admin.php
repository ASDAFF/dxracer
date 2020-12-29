<?php

/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 22.02.2015
 * Time: 19:26
 */
require_once("config.php");
require_once("DBConn.php");
require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("longpolling.php");

class ADMIN
{
	private $db;
	public $valueInsert;
	public $idUpdate;

	public function __construct()
	{
		$this->db = new simpleMysqli(DBSettings::$settings);
	}


	public function getServicesDelivery($id = '')
	{
		$adSql = "";
		if ($id == '0')
			return false;
		if ($id > 0) {
			$adSql = " WHERE id='{$id}'";
		}
		$sql = "SELECT * FROM  `servive_dlvr` {$adSql}";
		$arrValues = $this->db->select($sql);
		return $arrValues;
	}

	public function insertUpdateServicesDelivery()
	{
		$sql = "INSERT INTO `servive_dlvr` (`id`, `name`) VALUES ('" . $this->idUpdate . "', '" . $this->valueInsert . "')
					ON DUPLICATE KEY UPDATE id='" . $this->idUpdate . "',name='" . $this->valueInsert . "'";
		$this->db->insert($sql);
	}

	public function delServicesDelivery()
	{
		$sql = "DELETE FROM `servive_dlvr` WHERE id='" . $this->idUpdate . "'";
		$this->db->delete($sql);
	}


	/**Получить пользователей
	 * @param string $user
	 * @param string $password
	 * @return array|false
	 */
	public function getUsers($user = '', $password = '')
	{
		if (!empty($user) && !empty($password)) {
			$adSql = "WHERE name='{$user}' AND password='{$password}'";
		}
		$sql = "SELECT * FROM  `users` {$adSql}";
		$arrValues = $this->db->select($sql);
		return $arrValues;
	}

	public static function getUsersByID($id)
	{

		$db = DBSettings::DB();
		$sql = "SELECT * FROM  `users`  WHERE id='{$id}'";
		$arrValues = $db->select($sql);
		return $arrValues;
	}


	/**Добавление обновление пользователя
	 * @param $id
	 * @param $name
	 * @param $password
	 */
	public function insertUpdateUsers($id, $name, $password)
	{
		$sql = "
				INSERT INTO `users` (`id`, `name`, `password`)
                VALUES ('{$id}', '{$name}', '{$password}')
                ON DUPLICATE KEY UPDATE id = '{$id}', name = '{$name}', password = '{$password}'";

		$this->db->insert($sql);
	}

	/**Удаление пользователя
	 * @param $id
	 */
	public function delUsers($id)
	{
		$sql = "DELETE FROM `users` WHERE id='{$id}'";
		$this->db->delete($sql);
	}


	/**авторизуемся
	 * @param $user
	 * @param $password
	 */
	public function auth($user, $password)
	{
		$arrUsers = $this->getUsers($user, $password);

		if (count($arrUsers) == 1) {

			$ids = longPolling::getOnlineIds();

			foreach ($ids as $value) {
				if (intval($value) == intval($arrUsers[0]['id'])) {

					session_destroy();
					unset($_SESSION);
					echo '<a href="/m/crm/lib/auth">Авторизоваться</a></br>';
					die('Пользователь уже авторизован');
				}

			}
			session_start();
//			$command_for_client = array('command'=>'UPD_ACTIVE_LIST_USERS');
//			longPolling::push('admin',$command_for_client);
			$_SESSION['uid'] = $arrUsers[0]['id'];
			$_SESSION['username'] = $arrUsers[0]['name'];
		}
	}

	public static function isAuth()
	{
		session_start();
		$urlPath = pathinfo($_SERVER["REQUEST_URI"]);
		$sessUid = intval($_SESSION['uid']);
		if ($sessUid == 0 && $urlPath["basename"] != 'auth') { //редиректимся на auth если пользователь не залогинен
			header('Location: ' . CONFIG::$conf['servername'] . CONFIG::$conf['path'] . 'lib/auth');
			die();
		} else {
			return true;
		}
	}

	public static function isAdmin()
	{
		session_start();
		if (intval($_SESSION['uid']) == 1) {
			return true;
		} else {
			return false;
		}
	}

	public static function logout()
	{
		session_start();
		unset($_SESSION['uid']); //Удаляем из сессии ID пользователя
		session_destroy();
//		$command_for_client = array('command'=>'UPD_ACTIVE_LIST_USERS');
//		longPolling::push('admin',$command_for_client);
		die(header('Location: ' . CONFIG::$conf['servername'] . CONFIG::$conf['path'] . 'lib/auth'));
	}
//
//	public static function genOnlineUsersList(){
//	$out_put = '<div id="usersOnline" class="left" style="margin-left: 25px">
//		<span class="red">Пользователи онлайн</span>
//		<br>';
//		 $id_users_online = longPolling::getOnlineIds();
//		foreach($id_users_online as $value){
//			$out_put .= ADMIN::getVarArr(ADMIN::getUsersByID($value),'name').'<br>';
//		}
//		$out_put .= '</div>';
//		echo $out_put;
//	}

	public static function getCurrentUser()
	{
		$db = DBSettings::DB();
		$sessUid = intval($_SESSION['uid']);
		if ($sessUid != 0) {
			$sql = "SELECT `id`,`name` FROM  `users` WHERE `id`= {$sessUid}";
			$res = $db->select($sql);

			return array(
				"id" => $res[0]["id"],
				"name" => $res[0]["name"],
			);
		}
	}

	public static function getVarArr($arr, $key)
	{
		return $arr[0][$key];
	}
}