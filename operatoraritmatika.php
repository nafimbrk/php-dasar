<?php

// + - * / % **
// kalo mau angka negatif tinggal kasih tanda - di depan angkanya atau variablenya
$a = 10;
$b = 10;
$result = $a + $b;
var_dump($result);

// misal kalo mau konversi
$resultnegative = -$result;
var_dump($resultnegative);

$resultpositive = +$result;
var_dump($resultpositive);