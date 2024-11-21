<?php

$name = "nafi";
$name = null;

$age = null;

echo $name;
echo $age;

// mengecek apakah data null
var_dump(is_null($age));

// menghapus variable
$contoh = "eko";
unset($contoh);

// mengecek apakah sebuah variable ada dan nilainya tidak null
var_dump(isset($contoh));