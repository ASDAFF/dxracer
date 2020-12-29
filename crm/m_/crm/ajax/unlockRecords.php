<?
require_once('../classes/LockRecords.php');
require_once('../classes/longpolling.php');
require_once('../classes/utils.php');

if ($_REQUEST['type'] = 'unlockRec') {
	$LC = new LockRecords();
	$LC->id = intval($_REQUEST['id']);
	$LC->unLock();
	$command_for_client = array('command' => 'UPD_APPLICATION', 'id' => $LC->id);
	$ids = longPolling::getOnlineIds();
	longPolling::push($ids, $command_for_client);
}

