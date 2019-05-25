<?php
define('BASEDIR', __DIR__);
include 'myApp/Autoloader.php';

spl_autoload_register('\\myApp\\Autoloader::myLoader');

//单例
/*$db = \myApp\InstanceDb::getInstance('localhost', 'root', '', 'test');
echo '<pre>';
var_dump($db);
echo '</pre>';
*/

//工厂
/*$factory = \myApp\FactoryDb::createDb('localhost', 'root', '', 'test');
echo '<pre>';
var_dump($factory);
echo '</pre>';
*/

//注册
/*$registerObj = \myApp\FactoryDb::createDb();
$db1 = \myApp\Register::get('defaultDb');
echo '<pre>';
var_dump($db1);
echo '</pre>';
*/

//适配器
/*$mysql = new \myApp\Database\Mysqli;
$a = $mysql->connect('localhost', 'root', '', 'test');
$a->query('select * from `migrations;`');
echo '<pre>';
var_dump($mysql);
echo '</pre>';
*/

//策略(IoC/DI/依赖注入)
echo '<mata http-equiv="content-type" content="text/html;charset=utf-8;">';
class Page {
	protected $strategy;

	public function index() {
		echo 'AD: ';
		$this->strategy->showAd();
		echo '<br>';
		echo 'Category: ';
		$this->strategy->showCategory();
	}

	public function setStrategy(\myApp\Strategy $strategy) {
		$this->strategy = $strategy;
	}
}

$page = new Page;
if(isset($_GET['female'])) {
	$strategy = new \myApp\FemaleStrategy;
}else{
	$strategy = new \myApp\MaleStrategy;
}

$page->setStrategy($strategy);
$page->index();
