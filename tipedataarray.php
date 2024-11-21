<?php

// array
$value = array("heru", "deni", 9, true);
var_dump($value);

// array juga
$values = ["eko", "kurniawan", "khannedy", 100, false];
var_dump($values);

// operasi array
/*
$array[index]          mengakses
$array[index] = value  mengubah
$array[] = value       menambah
unset($array[index])   menghapus (index ototmatis hilang dari array)
count($array)          mengambil total
*/

$names = [];
$names[] = "eko";
$names[] = "kurniawan";
$names[] = "khannedy";
var_dump($names);
var_dump($names[1]);
$names[2] = "galih";
var_dump($names);
unset($names[1]);
var_dump($names);
var_dump(count($names));



// associative array
$budi = [
    "id" => "budi",
    "name" => "budi nugroho",
    "age" => 30
];
var_dump($budi);
var_dump($budi["age"]);



// array didalam array
$eko = [
    "id" => "eko",
    "name" => "eko khanedy",
    "age" => 40,
    "addreas" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
];
var_dump($eko);
var_dump($eko["addreas"]["country"]);