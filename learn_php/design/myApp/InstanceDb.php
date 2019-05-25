<?php
namespace myApp;

class InstanceDb {
	private $conn;
	static private $_instance;
	public $result;

	private function __construct($host, $user, $pwd, $dbname) {
		$this->conn = mysqli_connect($host, $user, $pwd, $dbname);
		return $this->conn;
	}

	private function __clone() {}

	static public function getInstance($host, $user, $pwd, $dbname) {
		if(FALSE == (self::$_instance instanceof self)) {
			self::$_instance = new self($host, $user, $pwd, $dbname);
		}
		return self::$_instance;
	}

	public function query($query) {
		return $this->result = mysqli_query($query);
	}

	public function close() {
		return mysqli_close($this->conn);
	}
}