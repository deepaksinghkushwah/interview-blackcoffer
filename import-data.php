<?php

use classes\DB;

include_once 'config.php';
$link = DB::getInstance();
$csvFile = ROOT_PATH . '/Data.csv';
$data = [];
$handle = fopen($csvFile, "r");
if ($handle) {
  $c = 0;
  while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $c++;
    if ($c == 1) {
      continue;
    }
    for ($i = 0; $i < count($row); $i++) {
      $row[$i] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $link->real_escape_string($row[$i]));
    }
    try {
      $sql = "INSERT INTO `coffer` SET 
      `end_year` = '" . $row[0] . "',
      `citylng` = '" . $row[1] . "',
      `citylat` = '" . $row[2] . "',
      `intensity` = '" . $row[3] . "',
      `sector` = '" . $row[4] . "',
      `topic` = '" . $row[5] . "',
      `insight` = '" . $row[6] . "',
      `swot` = '" . $row[7] . "',
      `url` = '" . $row[8] . "',
      `region` = '" . $row[9] . "',
      `start_year` = '" . $row[10] . "',
      `impact` = '" . (int)$row[11] . "',
      `added` = '" . date('Y-m-d H:i:s', strtotime($row[12])) . "',
      `published` = '" . date('Y-m-d H:i:s', strtotime($row[13])) . "',
      `city` = '" . $row[14] . "',
      `country` = '" . $row[15] . "',
      `relevance` = '" . $row[16] . "',
      `pestle` = '" . $row[17] . "',
      `source` = '" . $row[18] . "',
      `title` = '" . $row[19] . "',
      `likelihood` = '" . $row[20] . "'";
      $link->query($sql);
    } catch (Exception $e) {
      echo $sql . "<br>";
      echo $e->getMessage() . "<hr>";
    }
  }
}
echo "Data Imported";
