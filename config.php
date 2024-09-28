<?php
set_time_limit(0);
error_reporting(1);
$path = realpath(__DIR__);
define('ROOT_PATH', $path);
define('SITE_URL','http://'.$_SERVER['HTTP_HOST']);
include_once ROOT_PATH.'/vendor/autoload.php';
