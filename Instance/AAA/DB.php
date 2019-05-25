<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/2
 * Time: 17:00
 */
namespace AAA;

class DB {//single instance
    //单例,class只实例化一次,避免要使用class时每次实例化的麻烦,避免浪费资源
    static private $db;

    private function __construct() {}

    static public function getInstance() {
        if(empty(self::$db)) {
            //$x = self::$db;
            //return $x;
            self::$db = new self;
            return self::$db;
        }else{
            return self::$db;
        }
    }

    public function where($where) {
        return $this;
    }

    public function order($order) {
        return $this;
    }

    public function limit($limit) {
        return $this;
    }
}