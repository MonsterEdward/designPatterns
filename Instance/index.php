<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/2
 * Time: 16:53
 */
define('BASEDIR', __DIR__);
include('AAA/autoloader.php');
spl_autoload_register('\\AAA\\myLoader::register');
/*
spl_autoload_register()结合namespace使用时,需符合psr4规范,class名与文件名一致
*/

$instance = AAA\DB::getInstance();

$magic = new AAA\Magic();
$magic->test = 'What a fuck!!!';
var_dump($magic->test());
var_dump($magic->test1);



