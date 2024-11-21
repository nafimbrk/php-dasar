<?php

// function return value
// hanya bisa menghasilkan satu jenis data di sebuah function, gk bisa lebih dari satu
function sum(int $first, int $second) {

    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

// contoh kedua
function getfinalvalue(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    // setelah menggunakan kata return maka kode yg dibawahnya itu gk akan pernah di eksekusi lagi
    echo "ups"; // gk akan pernah di eksekusi
}

$score = getfinalvalue(50);
var_dump($score);

$score = getfinalvalue(90);
var_dump($score);


// return type declaration
// sama seperti di argument, di return value pun juga bisa mendeklarasikan type data nya
function sum2(int $first, int $second): int
{
    return $first + $second;
    // return []; error
}

$result = sum2(10, 10);
var_dump($result);

function getfinalvalue2(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
        // return []; error
        // return 1; bisa
    }
}

$score = getfinalvalue2(20);
var_dump($score);