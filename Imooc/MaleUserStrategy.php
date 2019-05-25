<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/8
 * Time: 22:29
 */

namespace Imooc;


class MaleUserStrategy implements UserStrategy {
    public function showAd() {
        echo "iPhone X";
    }

    public function showCategory() {
        echo "Apple商城";
    }
}