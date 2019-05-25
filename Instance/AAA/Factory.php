<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/6
 * Time: 17:32
 */
namespace AAA;

class Factory {
    static function createDb() {
        /*$db = Single::getInstance();//经典factory模式
        return $db;*/
        $db = DB::getInstance();
        Register::set('dbTest', $db);
        return $db;
    }
}