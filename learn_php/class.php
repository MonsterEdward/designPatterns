<?php
class Test {
	private $foo = 'test1';

	public function __construct($foo) {
		$this->foo = $foo;
	}

	private function bar() {
		echo 'Access the private method.';
	}

	public function baz(Test $other) {
		$other->foo = 'Hello';
		var_dump($other->foo);

		$other->bar();
	}
}
$test = new Test;
$test->baz(new Test('another'));
