<?php
namespace DI;

class Page {//1.page类不设置其依赖的UserStrategy类
	protected $strategy;

	public function index() {
		echo 'Ad: ';
		$this->strategy->showAd();
		echo "<br>";
		echo 'Category: ';
		$this->strategy->showCategory();
	}

	//设置进去一个策略,便于外部调用
	public function setStrategy(\DI\UserStrategy $strategy) {//约定接口类型
		$this->strategy = $strategy;
	}
}