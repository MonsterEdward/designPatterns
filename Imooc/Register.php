<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 21:34
 */
namespace Imooc;

class Register {//注册器模式,将对象注册到全局的树上,方便其被任何地方直接访问
    static protected $objects;
    static function set($alias, $object) {
        self::$objects[$alias] = $object;
    }

    static function get($name) {
        return self::$objects[$name];
    }

    public function _unset($alias) {//因unset是php中关键字,所以用_unset
        unset(self::$objects[$alias]);
    }
}