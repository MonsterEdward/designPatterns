<?php
namespace DI;

class Loader {
	static public function register($class) {
		require BASEDIR . "/" . str_replace("\\", "/", $class) . '.php';
	}
}