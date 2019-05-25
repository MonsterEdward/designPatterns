<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/6
 * Time: 9:42
 */
namespace AAA;

class Magic {
    //public $arr = [];
    protected $arr = [];

    //变量未设置时调用
    public function __set($key, $val) {
        //var_dump(__METHOD__);
        $this->arr[$key] = $val;
    }

    //获取不存在的变量时调用
    public function __get($key) {
        return $this->arr[$key];
    }

    //调用一个不存在的function
    public function __call($func, $param) {
        return "magic function\n";
    }

    //调用一个不存在的static function
    static public function __callStatic($func, $param) {
        return "magic static function\n";
    }

    public function __toString() {
        return "当试图echo一个object时会调用__toString()";
    }

    public function __invoke($prarm) {
        return "把object当作一个function执行";
    }

}
