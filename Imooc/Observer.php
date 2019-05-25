<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/10
 * Time: 23:33
 */
namespace Imooc;

interface Observer {
    public function update($eventInfo = null);
}