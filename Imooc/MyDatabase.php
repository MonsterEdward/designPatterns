<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/3
 * Time: 23:34
 */
namespace Imooc;

interface MyDatabase {//interface约定适配器的行为
    function connect($host, $uname, $pwd, $dbname);
    function query($sql);
    function close();
}
