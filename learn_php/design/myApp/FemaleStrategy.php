<?php
namespace myApp;

class FemaleStrategy implements Strategy {
	public function showAd() {
		echo "YSL口红";
	}

	public function showCategory() {
		echo "女生化妆品";
	}
}