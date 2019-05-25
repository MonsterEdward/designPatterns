<?php
// 从setter注入
class Book2 {
  private $db;
  private $file;

  public function setDb($db) {
    $this->db = $db;
  }
  public function setFile($file) {
    $this->file = $file;
  }
}

//
class Db{
  // ...
}
class File{
  // ...
}

class Test {
  $book2 = new Book2();
  $book2->setDb(new DB());
  $book2->setFile(new File());
}
