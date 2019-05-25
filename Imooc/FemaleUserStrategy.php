<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/8
 * Time: 22:27
 */

namespace Imooc;


class FemaleUserStrategy implements UserStrategy {
    public function showAd() {
        echo "2018 新款女装";
    }

    public function showCategory() {
        echo "女装";
    }
}