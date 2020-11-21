<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $model)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, $model);
    }

    public function insert($table, $parameters)
    {

        $bindParameters = array_map(function ($parameter) {
            return ":${parameter}";
        }, array_keys($parameters));

        $bindParameters = implode(', ', $bindParameters);

        $columns = implode(', ', array_keys($parameters));

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            $columns,
            $bindParameters
        );

        try {

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
