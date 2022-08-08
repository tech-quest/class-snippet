<?php
require_once __DIR__ . '../../app/incomes.php';

$incomesTable = new Imcomes();
$incomes = $incomesTable->fetchAll();

echo '<pre>';
var_dump($incomes);
echo '<pre>';
