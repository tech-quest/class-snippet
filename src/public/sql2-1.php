<?php
require_once __DIR__ . '../../app/incomes.php';

$incomes = new Imcomes();
$totalAmounts = $incomes->findTotalAmounts();
echo 'incomesテーブルのamountカラムの合計: ' . $totalAmounts;

?>
