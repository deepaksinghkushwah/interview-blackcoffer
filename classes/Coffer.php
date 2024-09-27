<?php

namespace classes;

class Coffer
{
  /**
   * Get records from DB
   * @return array 
   */
  public static function getRecords(): array
  {
    $retArr = [];
    $link = DB::getInstance();
    $result = $link->query("SELECT * FROM `coffer`");
    while ($data = $result->fetch_object()) {
      $retArr[] = $data;
    }
    return $retArr;
  }
}
