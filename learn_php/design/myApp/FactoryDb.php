<?php
namespace myApp;

class FactoryDb {
	//原始工厂
	/*private $conn;

	public function __construct($host, $user, $pwd, $dbname) {
		$this->conn = mysqli_connect($host, $user, $pwd, $dbname);
		return $this->conn;
	}

	static public function createDb($host, $user, $pwd, $dbname) {
		return new self($host, $user, $pwd, $dbname);
	}*/

	//结合注册器的工厂并使用单例
	static public function createDb() {
		$db = InstanceDb::getInstance('localhost', 'root', '', 'test');
		Register::set('defaultDb', $db);
		return $db;
	}

	
}