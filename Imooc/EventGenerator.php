<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/10
 * Time: 23:29
 */

namespace Imooc;


abstract class EventGenerator {
    private $observers = [];//观察者对于事件发生者来说是不可见的,观察者并不知道有哪些人关注了这个事件,它只知道它的事件发生
    public function addObserber(Observer $observer) {
        $this->observers[] = $observer;
    }
    public function notify() {
        foreach($this->observers as $observer) {
            $observer->update();
        }
    }
}