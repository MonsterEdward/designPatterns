<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/11
 * Time: 22:51
 */
namespace Imooc;

class ColorDrawDecorator implements DrawDecorator {
    protected $color;
    public function __construct($color = "red") {
        $this->color = $color;
    }

    public function beforeDraw() {
        echo "<div style='color: {$this->color};'>";
    }

    public function afterDraw() {
        echo "</div>";
    }
}