<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 22:13
 */
namespace Imooc\Database;

use Imooc\MyDatabase;

class Pdo implements MyDatabase {
    protected $connection;
    public function connect($host, $uname, $pwd, $dbname) {
        $conn = new \PDO("msyql:host=$host;dbname=$dbname", $uname, $pwd);
        $this->connection = $conn;
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function close() {
        unset($this->connection);
    }
}