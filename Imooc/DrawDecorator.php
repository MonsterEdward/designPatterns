<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/11
 * Time: 22:32
 */

namespace Imooc;


interface DrawDecorator {
    public function beforeDraw();
    public function afterDraw();
}