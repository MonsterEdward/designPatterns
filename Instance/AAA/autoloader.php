<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/2
 * Time: 16:56
 */
namespace AAA;

class myLoader {
    static public function register($class) {
        include BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}
