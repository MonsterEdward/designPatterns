<?php
namespace myApp;

class Autoloader {
	static public function myLoader($class) {
		require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
	}
}