<?php
define('BASEDIR', __DIR__);
include 'DI/Autoloader.php';
spl_autoload_register("\\DI\\Loader::register");

echo '<meta http-equiv="content-type" content="text/html;charset="utf-8;">';

$page = new DI\Page;

if(isset($_GET['female'])) {//2.执行时,再实现关系绑定
	$strategy = new \DI\FemaleUserStrategy;
}else{
	$strategy = new \DI\MaleUserStrategy;
}

$page->setStrategy($strategy);
$page->index();