<?php
define('BASEDIR', __DIR__);
include 'Imooc/Loader.php';
spl_autoload_register('\\Imooc\\Loader::autoload');

/*
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');*/
//require 'Imooc/First.php';
//require 'Imooc/Second.php'; 

//Imooc\First::test();
//Imooc\Second::test();
//Imooc\Loader::autoload();

/*链式操作的实现
$db = new Imooc\Database;
$db->where("xx")->order("yy")->limit("zz");
*/

/*
$obj = new Imooc\Object;
$obj->title = "Hello world.";
//echo $obj->title;//__set及__get
$r = $obj->test("hello", 123);
//echo $r;//__call
$c = Imooc\Object::test1("hello1", 1234);
//echo $c;//__callStatic
//echo $obj;//__toString
//把$obj对象(php对象不需加小括号)当作函数来用,php不允许把对象当函数调用,即把一个对象当成一个函数去执行
//echo $obj("test3");//__invoke
*/

//工厂模式

$db1 = Imooc\Factory::createDb();
var_dump($db1);


//单例模式
//无论创建多少次单例的对象,都只实例化一次

/*
$db2 = Imooc\Database::getInstance();
$db2_ = Imooc\Database::getInstance();
$db2_1 = Imooc\Database::getInstance();
var_dump($db2);
*/

//注册模式
/*
$db21 = Imooc\Factory::createDb();//其实可以在环境初始化时set及unset
$db11 = Imooc\Register::get("db11");//业务逻辑中只需get
var_dump($db11);
*/

//适配器模式
/*
$mysql = new Imooc\Database\Mysqli();
$mysql->connect("127.0.0.1", "root", "", "test");
$mysql->query("SHOW TABLES");
$mysql->close();
*/
/*
$mysqli = new Imooc\Database\Mysqli();
$mysqli->connect("127.0.0.1", "root", "root", "test");
$mysqli->query("SELECT * FROM `test_`");
$mysqli->close();
*/
/*
$pdo = new Imooc\Database\Pdo();
$pdo->connect("127.0.0.1", "root", "root", "test");
$pdo->query("SELECT * FROM `test_`");
$pdo->close();
*/

//echo '<meta http-equiv="content-type" content="text/html;charset=utf-8;">';

/*class Page {//依赖反转,1. page类不需要去定义其所依赖的UserStrategy类
    protected $strategy;

    public function index() {
        echo "AD: ";
        $this->strategy->showAd();
        echo "<br>";
        echo "category: ";
        $this->strategy->showCategory();
    }

    //便于外部调用,去设置进去一个策略
    public function setStrategy(\Imooc\UserStrategy $strategy) {//约定接口类型
        $this->strategy = $strategy;
    }
}
$page = new Page;
//根据上下文传策略对象
if(null !== $_GET['female']) {//2. 执行时,再实现关系绑定
    $strategy = new \Imooc\FemaleUserStrategy;
}else{
    $strategy = new \Imooc\MaleUserStrategy;
}
//新增一种策略时,只要新增一个类然后再setStrategy前进行实例化
$page->setStrategy($strategy);//传入策略对象
$page->index();
*/

/*
//数据对象映射模式
$user = new Imooc\User(2);//其实是select操作,在User类中的__construct()中有定义

//而update操作写在User类中的__destruct()中是因为,当$user对象被修改(即赋值)后,请求结束后,$user对象会被销毁,当它销毁时会自动调用__destruct(),所以可在析构方法中将所有的属性再存入DB
$user->name = "Maria";
$user->sex = 1;
$user->age = 29;
$user->created_at = date("Y-m-d H:i:s", time());
*/

/*
//数据对象映射模式+工厂模式+注册模式
class Page {
    public function index() {
        //使用工厂模式代替在代码中new来生成对象
        $user = Imooc\Factory::getUser(2);//使用注册器模式,获取对象
        var_dump($user);
        $user->name = "Davaid";
        $user->sex = 0;
        $this->test();
        echo "OK";
    }

    public function test() {
        $user = Imooc\Factory::getUser(2);
        var_dump($user);
        $user->age = 31;
        $user->created_at = date("Y-m-d H:i:s", time());
    }
}
$page = new Page();
$page->index();
*/

//观察者模式observer
/*class Event extends Imooc\EventGenerator {
    public function trigger() {
        echo "Event start<br>\n";
        $this->notify();
        //update
//        echo "逻辑1\n";
//        echo "逻辑2\n";
//        echo "逻辑3\n";
    }
}
class Observer1 implements Imooc\Observer {
    public function update($eventInfo = null) {
        echo "逻辑1<br>\n";
    }
}
class Observer2 implements Imooc\Observer {
    public function update($eventInfo = null) {
        echo "逻辑2<br>\n";
    }
}
$event = new Event();
//$event->addObserber(new Observer1);//将Observer1加入更新列表中
$event->addObserber(new Observer2);
$event->trigger();
*/

//原型模式
/*$prototype = new Imooc\Canvas();//创建原型
$prototype->init();
//$prototype->setColor();//如果new之后的对象除了初始化操作还有很多其他设置/操作,使用工厂模式/直接new 产生对象就会有很多冗余/重复代码
//$prototype->setFont();

$canvas1 = clone $prototype;//其他对象clone时,prototype对象需初始化/执行完所有其他操作
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

echo "----------------<br>\n";

$canvas2 = clone $prototype;
$canvas2->rect(1, 3, 5, 7);
$canvas2->draw();
*/


/*class Canvas2 extends Imooc\Canvas {//传统模式
    public function draw() {//传统编程模式不能解决此类问题,需装饰器模式
        echo "<div style='color:red;'>";
        parent::draw();//子类重写父类方法时用::的含义?即使父类中该方法不是static的也可用::
        echo "</div>";
    }
}
$canvas2 = new Canvas2();
$canvas2->init();
$canvas2->rect(2, 6, 10, 20);
$canvas2->draw();*/
//装饰器模式decorator
/*$canvas1 = new Imooc\Canvas();
$canvas1->init();
$canvas1->addDecorator(new Imooc\ColorDrawDecorator("blue"));
$canvas1->addDecorator(new Imooc\SizeDrawDecorator("10px"));
$canvas1->rect(3, 8, 10, 17);
$canvas1->draw();
*/

//迭代器模式
/*$users = new Imooc\AllUser();
foreach($users as $user) {
    var_dump($user->name);
    $user->sex = 1;//修改数据,所有的数据都被修改
}*/

