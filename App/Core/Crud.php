<?php

namespace Unopar\Core;

class Crud extends Database
{
	public static function salvar($query)
	{
		try {
			return Crud::conexao()->query($query);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	public static function consultar($query)
	{
		try {
			return Crud::conexao()->query($query)->fetchAll(\PDO::FETCH_ASSOC);
		
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function debug()
	{
		echo 'Este é o debug';
	}
}