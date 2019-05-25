<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 20:31
 */
namespace Imooc;

class Factory {
    static public function getDatabase() {
        $db = new Database\MySQLi();
        $db->connect('127.0.0.1', 'root', 'root', 'test');
        return $db;
    }

    static public function createDb() {
        //$db = new Database;
        $db = Database::getInstance();
        Register::set("db11", $db);//注册模式,工厂构造时只需构造一次,其他任何地方调用都可以从注册器取
        return $db;
    }

    //结合工厂模式实现数据对象映射模式(ORM)
    static public function getUser($id) {
        //结合注册模式,免去在同一个类中new多次来获得同一对象以及在同一个类中不同方法中传同一个参数[该参数为new后的对象]
        $key = "user_" . $id;
        $user = Register::get($key);//不明白,所以才get($id)
        if(!$user) {
            $user = new User($id);
            Register::set($key, $user);//根本不懂,为什么错把注册进去的对象又赋到$user上?!
        }
        //$user = new User($id);
        return $user;
    }
}
