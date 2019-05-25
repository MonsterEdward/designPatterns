<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/7
 * Time: 14:47
 */
namespace DB;
/*
同一个类的对象即使不是同一个实例也可以互相访问对方的私有与受保护成员
::可以访问静态成员,类常量,在class内部访问静态属性时用self::$xx，在class内部访问非静态属性时用$this->xx。静态属性对于这个class而言是唯一的，静态属性是只会被初始化一次，之后的每次调用都会使用原来的值。
声明类属性或方法为静态，就可以不实例化类而直接访问。静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）
*/
class Mysql {
    private $link;
    static private $_instance;
    public $result;

    //具有__construct的class在每次创建obj时会先调用此方法,适合使用obj前做初始化工作,php5.3
    private function __construct($host, $uname, $pwd, $dbname) {
        $this->link = mysqli_connect($host, $uname, $pwd, $dbname);
        return $this->link;
    }
    /*
    //析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行
    function __destruct() {}
    */

    private function __clone() {}

    static public function getConn($host, $uname, $pwd, $dbname) {
        //if(empty(self::$_instance)) {
        if(FALSE == (self::$_instance instanceof self)) {
            self::$_instance = new self($host, $uname, $pwd, $dbname);
        }
        return self::$_instance;
    }

    public function query($query) {
        return $this->result = mysqli_query($query);
    }

    public function fetch_array($fetch_array) {
        //
    }

    public function close() {
        return mysqli_close($this->link);
    }
}

$conn = Mysql::getConn($host, $uname, $pwd, $dbname);
