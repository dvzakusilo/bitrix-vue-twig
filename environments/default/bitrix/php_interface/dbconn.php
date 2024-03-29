<?php
if (!file_exists($autoloadPathDbconn= realpath(__DIR__).'/../../vendor/autoload.php')) {

    $autoloadPathDbconn= realpath(__DIR__).'/../../../current/vendor/autoload.php';
}

require_once($autoloadPathDbconn) ;

$dotenv = new Dotenv\Dotenv(realpath(__DIR__.'/../../'));
$dotenv->load();



define("BX_USE_MYSQLI", true);
$DBDebug = false;
$DBDebugToFile = false;
define("MYSQL_TABLE_TYPE", "INNODB");

define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~(BX_FILE_PERMISSIONS | BX_DIR_PERMISSIONS) & 0777);

define("BX_DISABLE_INDEX_PAGE", true);

define("BX_UTF", true);
mb_internal_encoding("UTF-8");
