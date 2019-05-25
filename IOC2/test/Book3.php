<?php
// 创建一个依赖关系的container
class Book3 {
  protected $dbConn;

  public static function makeBook() {
    $newBook = new Book2();
    $newBook->setDb(slef::$dbConn);
    // ...
    // ...
    // 其他依赖注入
    return $newBook;
  }
}
