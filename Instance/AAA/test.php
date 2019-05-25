<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/8/6
 * Time: 14:20
 */
class Test {
    public $str;

    /*public function __construct($s) {
        $this->str = $s;
    }*/

    public function __toString() {
        return $this->str;
    }

    public function __invoke($x) {
        echo '<pre>';
        print_r($x);
        echo '</pre>';
    }

    public function a($c) {
        return $this->str . " fuck your mother! " . $c;
    }
}
/*$b = new Test('Hello World');
var_dump($b);
echo "\n", $b, "\n";
print_r($b->a('Son of bitch.'));
echo "\n";*/
$p = new Test();
$p("WWWWWWW");
var_dump(is_callable($p));