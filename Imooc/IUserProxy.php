<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/12
 * Time: 23:57
 */

namespace Imooc;


interface IUserProxy {
    public function getUserName($id);
    public function setUserName($id, $name);
}