<?php
namespace myApp\Database;

use myApp\ShipeiqiDb;

class Pdo implements ShipeiqiDb {
	protected $conn;
	public function connect($host, $user, $pwd, $dbname)  {
		$connection = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
		$this->conn = $connection;
	}

	public function query($sql) {
		return $this->conn->query($sql);
	}

	public function close() {
		unset($this->conn);
	}
}