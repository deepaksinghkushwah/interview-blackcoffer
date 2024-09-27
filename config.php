<?php
set_time_limit(0);
error_reporting(1);
$path = realpath(__DIR__);
define('ROOT_PATH', $path);
include_once ROOT_PATH.'/vendor/autoload.php';