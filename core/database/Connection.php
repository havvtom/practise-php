<?php

class Connection
{
	public static function make($config)
	{
		try {
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
			// 'mysql:host=127.0.0.1; dbname=Todos', 'root', ''
		} catch (PDOException $e) {
			die('Could not connect');
		}
	}
}