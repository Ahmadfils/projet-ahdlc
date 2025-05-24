<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ahdlc');

define('BASE_URL', '/projet-ahdlc');
define("ADMIN_URL", BASE_URL . "admin" . "/");

date_default_timezone_set('Africa/Bujumbura');
// Pour le développement
error_reporting(E_ALL);
ini_set('display_errors', 1);

function url($path = ''){
	return rtrim(BASE_URL, '/').'/'.ltrim($path);
}
