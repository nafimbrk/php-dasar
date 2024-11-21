<?php

// bukan ternary operator
$gender = "PRIA";

$hi = null;
if ($gender == "PRIA") {
    $hi = "Hi bro";
} else {
    $hi = "Hi nona";
}

echo $hi;

// ternary operator
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";
echo $hi;