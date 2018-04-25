<?php

namespace Unopar\Core;

class Crud extends Database
{
	public static function setParam($statement, $key, $value)
	{
		$statement->bindParam($key, $value);
	}

	public static function setParams($statement, $parameters = [])
	{
		foreach ($parameters as $key => $value) {
			Crud::setParam($statement, $key, $value);
		}
	}

	public static function insert($query, $params = [])
	{
		$stmt = Crud::conexao()->prepare($query);
		Crud::setParams($stmt, $params);

		try {
			return $stmt->execute();

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function select($query, $params = []):array
	{
		$stmt = Crud::conexao()->prepare($query);
		setParams($stmt, $params);

		try {
			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function update($query, $params = [])
	{
		$stmt = Crud::conexao()->prepare($query);
		setParams($stmt, $params);

		try {
			return $stmt->execute();

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function delete($query, $params = [])
	{
		$stmt = Crud::conexao()->prepare($query);
		setParams($stmt, $params);

		try {
			return $stmt->execute();

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
