<?php
use classes\DB;

include('config.php');

header('Content-Type: application/json');
$action = $_GET['action'] ?? 'get_records';
switch ($action) {
  default:
  case 'get_records':
    $records = getRecords();
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
function getRecords() : array
{
  $retArr = [];
  $link = DB::getInstance();
  $result = $link->query("SELECT * FROM `coffer`");
  while ($data = $result->fetch_object()) {
    $retArr[] = $data;
  }
  return $retArr;
}
