<?php

// alternatif anonymous function yg lebih sederhana pembuatannya
// anonymous function dan arrow function adl dua hal yg sama
// yg membedakan secara ototmatis variable diluar function bisa digunakan
// dan tanpa menggunakan kata kunci return karena secara otomatis mengembalikan data

$fn = "eko";
$ln = "khanedy";

// anonymous function
$sayhello = function () use ($fn, $ln) : string {
    return "hello $fn $ln";
};

echo $sayhello();

// arrow function
$saygoodbye = fn() => "goodbye $fn $ln";

echo $saygoodbye();