<?php
require_once('admin.php');
require_once('edit.php');
require_once('utils.php');

class LockRecords extends EDIT
{
	public $id;

	/**Получаем статус заявки используется или нет
	 * если заявка блокирована текущим пользователем то разрешаем ему с ней работать
	 * @return bool
	 */
	public function isLock()
	{
		$sql = "SELECT `lock` FROM `crm` WHERE `id`='{$this->id}' AND `lock`>'0'";
		$found_lock_rec = $this->db->select($sql);


		if (count($found_lock_rec) == 0) //если не кем не занято
			return false;

		$id = ADMIN::getCurrentUser();
		if ($id["id"] == $found_lock_rec[0]['lock'])
			return false;
		else
			return true;
	}

	public function allLockRecords()
	{
		$sql = "SELECT `id` FROM `crm` WHERE `lock` > '0'";
		return $this->db->select($sql);
	}

	/**Блокируем заявку текущим пользователем
	 *
	 */
	public function Lock()
	{
		$id = ADMIN::getCurrentUser();
		$sql = "UPDATE `crm` SET `lock`= '{$id['id']}' WHERE `id` = " . $this->id;
		$this->db->update($sql);
	}

	/**Разблокируем заявку
	 *
	 */
	public function unLock()
	{
		$sql = "UPDATE `crm` SET `lock`= '0' WHERE `id` = " . $this->id;
		$this->db->update($sql);

	}
}