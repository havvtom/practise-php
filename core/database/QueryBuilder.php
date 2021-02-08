<?php

class QueryBuilder
{
	public $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function fetchAll($table, $intoClass)
	{

		$statement = $this->pdo->prepare( "select *from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}
}