<?php

namespace Com\Pulunomoe\Model;

use PDO;

abstract class Model
{
	protected PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	protected function prepare(string $stmt): PDOStatement
	{
		return $this->pdo->prepare($stmt);
	}

	protected function lastInsertId(): int
	{
		return $this->pdo->lastInsertId();
	}

	protected function beginTransaction(): void
	{
		$this->pdo->beginTransaction();
	}

	protected function commit(): void
	{
		$this->pdo->commit();
	}
}
