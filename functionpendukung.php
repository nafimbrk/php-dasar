<?php

// tanpa variable length argument list
function sumall(array $values) {  // tanpa kata kunci array juga gpp
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "total " . implode(" + ", $values) . " = $total";
}
echo sumall([12, 35, 58, 65, 78]);

// variable length argument list
function sumalll(...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "total " . implode(" + ", $values) . " = $total";
}

// misal kalo sudah punya array nya
$values = [27, 47, 36, 68, 49];

sumalll(12, 35, 58, 65, 78);
sumalll(...$values);

echo "\n";

// tanpa factorial recursive
function factorialloop(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
echo factorialloop(5);

// factorial recursive
function factorialrecursive(int $value): int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialrecursive($value - 1);
    }
}

echo factorialrecursive(5);