<?php
date_default_timezone_set('Asia/Chongqing');
$charset = 'UTF-8';
ini_set('display_errors', 1);
ini_set('default_charset', $charset);

define('ROOT', dirname(dirname(dirname(dirname(dirname(__FILE__))))));
define('APP_NAMESPACE', '\\Work\\App\\' . 'Api');

require ROOT . '/vendor/autoload.php';

$app = \Fd\App::getInstance();
$app->run(ROOT, 'Api', \Fd\App::APP_MODE_WEB);

