<?php

// kemampuan memanggil function dari value yg terdapat di variable

// variable function
function foo() {
    echo "foooooo \n";
}

$functionname = "foo";
$functionname();

// penggunaan variable function
function sayhello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "hello $finalname \n";
}

function samplefunction(string $name): string
{
    return "sample $name";
}
sayhello("eko", "samplefunction");
sayhello("eko", "strtoupper");
sayhello("EKO", "strtolower");