<?php
// https://segmentfault.com/a/1190000015449325
// https://segmentfault.com/a/1190000010143847
// 当A类需要依赖于B类，也就是说需要在A类中实例化B类的对象来使用时候，如果B类中的功能发生改变，也会导致A类中使用B类的地方也要跟着修改，导致A类与B类高耦合。这个时候解决方式是，A类应该去依赖B类的接口，把具体的类的实例化交给外部。
class Message
{
    public function seed() {
        return 'seed email';
    }
}
class Order
{
    protected $msg = '';

    public function __construct() {
        $this->msg = new Message();
    }

    public function seedMsg() {
        return $this->msg->seed();
    }
}
$order = new Order();
$order->seedMsg();

// -----
interface Message
{
    public function seed();
}
class SeedEmail implements Message
{
    public function seed() {
        return 'seed email';
        // TODO:
    }
}
class SeedSms implements Message
{
    public function seed() {
        return 'seed sms';
        // TODO:
    }
}
class Order
{
    protected $msg = '';

    public function __construct(Message $msg) {
        $this->msg = $msg;
    }

    public function seedMsg() {
        return $this->msg->seed();
    }
}
$msg1 = new SeedEmail();
$order = new Order($msg1);
$order->seedMsg();

$msg2 = new SeedSms();
$order1 = new Order($msg2);
$order1->seedMsg($msg2);

