<?php

/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 23.02.2015
 * Time: 1:19
 */
class apiBaseClass
{
	public $mySQLWorker = null;//Одиночка для работы с базой

	//Конструктор с возможными параметрами
	function __construct()
	{
		require_once("dbconn.php");
		$this->db = new simpleMysqli($settings);
	}
}

//	function __destruct() {
//		if (isset($this->mySQLWorker)){             //Если было установленно соединение с базой,
//			$this->mySQLWorker->closeConnection();  //то закрываем его когда наш класс больше не нужен
//		}
//	}

//Создаем дефолтный JSON для ответов
function createDefaultJson()
{
	$retObject = json_decode('{}');
	return $retObject;
}

//Заполняем JSON объект по ответу из MySQLiWorker
function fillJSON(&$jsonObject, &$stmt, &$mySQLWorker)
{
//		$row = array();
//		$mySQLWorker->stmt_bind_assoc($stmt, $row);
//		while ($stmt->fetch()) {
//			foreach ($row as $key => $value) {
//				$key = strtolower($key);
//				$jsonObject->$key = $value;
//			}
//			break;
//		}
//		return $jsonObject;

}