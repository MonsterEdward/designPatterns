<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 20:32
 */
namespace Imooc;

class Database {
    static protected $db; //单例模式第3步: 设置一个protected/private方法

    private function __construct() {
        //单例模式第1步: 把__construct设为private,屏蔽了其他地方实例化此对象(避免外层new)
    }

    static function getInstance() {
        //单例模式第2步: 添加getInstance()
        //$db = new self();//以获取实例 (private允许在类的内部调用private方法)
        if(!empty(self::$db)) {//如果此对象的$db属性存在,直接return
            return self::$db;
        }else{//如果不存在,则创建
            self::$db = new self;//构造对象并赋值到$db属性上
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