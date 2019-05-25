<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/7
 * Time: 14:36
 */
define('BASEDIR', __DIR__);
include 'Single/Autoloader.php';
spl_autoload_register('\\DB\\Autoloader::myLoader');

