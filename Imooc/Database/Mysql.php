<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 22:13
 */
namespace Imooc\Database;

use Imooc\MyDatabase;

class Mysql implements MyDatabase {
    protected $connection;
    public function connect($host, $uname, $pwd, $dbname) {
        $conn = mysql_connect($host, $uname, $pwd);
        mysqsl_select_db($dbname, $conn);
        $this->connection = $conn;
    }

    public function query($sql) {
        $res = mysql_query($sql, $this->connection);
        return $res;
    }

    public function close() {
        mysql_close($this->connection);
    }
}