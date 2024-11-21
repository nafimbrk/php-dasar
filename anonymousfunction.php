<?php

// merupakan function tanpa nama
// biasanya digunakan sebagai argument atau sebagai value divariable
// membuat kita bisa mengirim function sebagai argument difunction lainnya
// secara default gk bisa mengakses variable yg terdapat diluar function
// kalo mau harus menggunakan kata kunci use

// anonymous function
$sayhello = function (string $name) {
    echo "hello $name \n";
};

$sayhello("eko");
$sayhello("budi");

// anonymous function sebagai argument
function saygoodbye(string $name, $filter) {
    $finalname = $filter($name);
    echo "good bye $finalname";
}

saygoodbye("eko", function (string $name): string {
    return strtoupper($name);
});

// bisa juga simpan anonymous function dalam sebuah variable function

$filterfunction = function (string $name): string {
    return strtoupper($name);
};

saygoodbye("eko", $filterfunction);

// mengakses variable diluar anonymous function
$fn = "eko";
$ln = "khanedy";

$sayhelloeko = function () use ($fn, $ln) {
    echo "hello $fn $ln";
};

$sayhelloeko();

// saat sudah use itu value variable yg di atas akan otomatis di copy ke dalam anonymous functionnya, jadi kalo value variable nya di ganti itu gk berubah yg di dlm anonymous function nya
$fn = "hendro"; // gk akan berubah
$ln = "sudrajat"; // gk akan berubah

$sayhelloeko();
