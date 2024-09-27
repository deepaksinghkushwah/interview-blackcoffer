<?php

namespace classes;

use Exception;
use mysqli;
use PDO;
use PDOException;

class DB
{
  private static $instance = null;
  private $link;
  private function __construct()
  {
    $host = '127.0.0.1'; // or your host
    $db = 'blackcoffer';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    try {
      $this->link = new mysqli( $host, $user, $pass, $db );

    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new DB();
    }
    return self::$instance->link;
  }
}
