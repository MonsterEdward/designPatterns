<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/7
 * Time: 14:38
 */
namespace DB;

class Autoloader {
    static function myLoader($class) {
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}