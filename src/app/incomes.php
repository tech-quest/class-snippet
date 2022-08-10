<?php

class Imcomes
{
    private $pdo;

    public function __construct()
    {
        $dbUserName = 'root';
        $dbPassword = 'password';
        $pdo = new PDO(
            'mysql:host=mysql; dbname=tq_quest; charset=utf8',
            $dbUserName,
            $dbPassword
        );
        $this->pdo = $pdo;
    }

    public function fetchAll()
    {
        $sql = 'SELECT * FROM incomes';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $incomesTable = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $incomesTable;
    }

    public function findTotalAmounts()
    {
        $incomesTable = $this->fetchAll();
        $totalAmounts = 0;
        foreach ($incomesTable as $income) {
            $totalAmounts += $income['amount'];
        }
        return $totalAmounts;
    }
}
