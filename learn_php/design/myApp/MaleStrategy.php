<?php
namespace myApp;

class MaleStrategy implements Strategy {
	public function showAd() {
		echo "飞科剃须刀";
	}

	public function showCategory() {
		echo "男生护理用品";
	}
}