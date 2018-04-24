<?php

namespace Unopar\Core;

class Database
{
	protected static $db;

	private function __construct()
	{
		$host = 'localhost';
		$base = 'fisioterapia';
		$user = 'root';
		$pass = '';
		$driver = 'mysql';

		try {
			self::$db = new \PDO("$driver:host=$host; dbname=$base", $user, $pass);

		} catch (\PDOException $e) {
			echo 'Errooouu' . $e->getMessage();
		}
	}

	protected static function conexao()
	{
		if (!self::$db) {
			new Database();
		}

		return self::$db;
	}
}