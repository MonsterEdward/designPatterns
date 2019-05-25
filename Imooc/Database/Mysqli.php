<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 22:13
 */
namespace Imooc\Database;

use Imooc\MyDatabase;

class Mysqli implements MyDatabase {
    protected $connection;
    public function connect($host, $uname, $pwd,$dbname) {
        $conn = mysqli_connect($host, $uname, $pwd, $dbname);
        $this->connection = $conn;
    }

    public function query($sql) {
        return mysqli_query($this->connection, $sql);
    }

    public function close() {
        mysqli_close($this->connection);
    }
}