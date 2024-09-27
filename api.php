<?php

use classes\Coffer;
use classes\DB;

include('config.php');

header('Content-Type: application/json');
$action = $_GET['action'] ?? 'get_records';
switch ($action) {
  default:
  case 'get_records':
    $records = Coffer::getRecords();
    break;
}
$data = [
  'status' => 200,
  'records' => $records
];

echo json_encode($data);

/**
 * Get records from database
 * @return array 
 */

