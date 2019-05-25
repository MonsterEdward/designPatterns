<?php
namespace myApp;
//psr-4

interface ShipeiqiDb {
	public function connect($host, $user, $pwd, $dbname);

	public function query($sql);

	public function close();
}