<?php

namespace App\Database;

use PDO;

class QueryBuilder
{

    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table) : array
    {
        $statement = $this->pdo->prepare("SELECT * FROM ${table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
