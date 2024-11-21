<?php

// dot operator
$name = "nafi' mubarok";

echo "Name : " . $name;

// konversi string ke number dan sebaliknya
$valuestring = (string) 100;
var_dump($valuestring);

$valueint = (int) "100";
var_dump($valueint);

$valuefloat = (float) "100.11";
var_dump($valuefloat);

// jika data nya gk valid/gk bisa di konversi maka akan di konversi jadi 0
$valuesalah = (float) "salah";
var_dump($valuesalah);

// mengakses karakter
$name = "eko";
echo $name[0];
echo $name[1];
echo $name[2];

// variable parsing (khusus double quote)
$name = "eko";
echo "hello $name, selamat belajar PHP";
