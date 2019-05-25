<?php
namespace myApp\Database;

use myApp\ShipeiqiDb;

class Mysql implements ShipeiqiDb {
	public function connect($host, $user, $pwd) {}

	public function query($sql) {}

	public function close() {}
}