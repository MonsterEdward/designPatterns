<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/6
 * Time: 17:36
 */
namespace AAA;

class Register {
    static protected $objects;

    static function set($alias, $val) {
        self::$objects[$alias] = $val;
    }

    static function get($name) {
        return self::$objects[$name];
    }

    public function _unset($alias) {
        unset(self::$objects[$alias]);
    }
}