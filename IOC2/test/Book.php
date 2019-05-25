<?php
// 从__construct()注入
class Book {
  private $dbConn;

  public function __construct($conn) {
    $this->dbConn = $conn;
  }
}
