<?php
namespace myApp\Database;

use myApp\ShipeiqiDb;

class Mysqli implements ShipeiqiDb {
	protected $conn;
	public function connect($host, $user, $pwd, $dbname) {
		/*$connection = new mysqli($host, $user, $pwd, $dbname);*/
		$connection = mysqli_connect($host, $user, $pwd, $dbname);
		$this->conn = $connection;
		return $this->conn;
	}

	public function query($sql) {
		return $this->conn->query($sql);
	}

	public function close() {
		$this->conn->close();
	}
}
