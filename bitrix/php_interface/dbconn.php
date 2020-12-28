<?define("BX_CRONTAB_SUPPORT", true);?><?define("BX_CRONTAB_SUPPORT", true);?><?define("BX_CRONTAB_SUPPORT", false);?>
<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "root";
$DBPassword = "";
$DBName = "rtxshop";
$DBDebug = false;
$DBDebugToFile = false;
$_SERVER["SERVER_PORT"] = "443";
define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
define("BX_DISABLE_INDEX_PAGE", true);
define("BX_TEMPORARY_FILES_DIRECTORY", "/tmp");
/*define('BX_CRONTAB_SUPPORT', true);*/
/*define("BX_CACHE_TYPE", "memcache");
define("BX_CACHE_SID", $_SERVER["DOCUMENT_ROOT"]."#01");
define("BX_MEMCACHE_HOST", "unix:///tmp/memcached.sock");
define("BX_MEMCACHE_PORT", "0");*/
?>
