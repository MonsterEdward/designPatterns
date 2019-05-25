<?php
namespace DI;

class MaleUserStrategy implements UserStrategy {
	public function showAd() {
		echo '吉列剃须刀';
	}

	public function showCategory() {
		echo '男士护理用品';
	}
}