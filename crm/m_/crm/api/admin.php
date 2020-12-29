<?php

/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 22.02.2015
 * Time: 19:26
 */
require_once("class.simpleDB.php");
require_once("class.simpleMysqli.php");
require_once("DBConn.php");

class ADMIN
{
	private $db;
	public $valueInsert;
	public $idUpdate;

	public function __construct()
	{

		$this->db = new simpleMysqli(DBSettings::$settings);
	}

	public function getServicesDelivery()
	{
		$sql = "SELECT * FROM  `servive_dlvr`";
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

	public function genServicesDeliveryForm($id, $arr)
	{

	}
}