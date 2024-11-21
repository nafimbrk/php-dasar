<?php

$data = [3, 5, 6, 2, 1, 7, 9];

sort($data);
var_dump($data);

rsort($data);
var_dump($data);

$person = [
    "fn" => "eko",
    "ln" => "khannedy"
];

var_dump(array_keys($person));
var_dump(array_values($person));

shuffle($data);
print_r($data);