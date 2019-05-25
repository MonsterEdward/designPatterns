<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/11
 * Time: 22:59
 */
namespace Imooc;

class SizeDrawDecorator implements DrawDecorator {
    protected $size;
    public function __construct($size = "14px") {
        $this->size = $size;
    }

    public function beforeDraw() {
        echo "<div style='font-size: {$this->size}'>";
    }

    public function afterDraw() {
        echo "</div>";
    }
}