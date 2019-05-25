<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/11
 * Time: 21:13
 */

namespace Imooc;


class Canvas {
    public $data;
    protected $decorators = [];
    public function init($width = 20, $height = 10) {
        $data = [];
        for($i=0;$i<$height;$i++) {
            for($j=0;$j<$width;$j++) {
                $data[$i][$j] = "*";
            }
        }
        $this->data = $data;
    }

    public function addDecorator(DrawDecorator $decorator) {
        $this->decorators[] = $decorator;
    }

    public function beforeDraw() {//before时按顺序,先进先出
        foreach($this->decorators as $decorator) {
            $decorator->beforeDraw();
        }
    }

    public function afterDraw() {//after,需反转,后进先出
        $decorators = array_reverse($this->decorators);
        foreach($decorators as $decorator) {
            $decorator->afterDraw();
        }
    }

    public function draw() {
        $this->beforeDraw();
        foreach($this->data as $line) {
            foreach($line as $char) {
                echo $char;
            }
            echo "<br />\n";
        }
        $this->afterDraw();
    }

    public function rect($a1, $a2, $b1, $b2) {
        foreach($this->data as $k1 => $line) {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach($line as $k2 => $char) {
                if ($k2 < $b1 or $k2 > $b2) continue;
                $this->data[$k1][$k2] = '&nbsp;';
            }
        }
    }
}