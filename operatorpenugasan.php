<?php

// = += -= *= /= %=
// $a += $b    sama     $a = $a + b

$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangejuice = 1000;

$total += $fruit;
$total += $chicken;
$total += $orangejuice;

var_dump($total);