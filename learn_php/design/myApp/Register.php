<?php
namespace myApp;

class Register {
	static protected $objects;

	static public function set($alias, $obj) {
		self::$objects[$alias] = $obj;//class内部访问静态属性,class内部访问静态方法self::myFunction()
	}

	static public function get($name) {
		return self::$objects[$name];
	}

	public function uunset($alias) {
		unset(self::$objects[$alias]);
	}
}