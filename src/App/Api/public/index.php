<?php
date_default_timezone_set('Asia/Chongqing');
$charset = 'UTF-8';
ini_set('display_errors', 1);
ini_set('default_charset', $charset);

define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(__DIR__));
define('SRC_PATH', dirname(dirname(APP_PATH)));
define('ROOT', dirname(SRC_PATH));
define('VENDOR_PATH', ROOT . DS . 'vendor');
define('APP_NAMESPACE', '\\Work\\App\\' . 'Api');

require VENDOR_PATH . DS . "autoload.php";

$app = \Fd\App::getInstance();
$app->run(ROOT, 'Api', \Fd\App::APP_MODE_WEB);

