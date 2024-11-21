<?php

// global scope

$name = "eko";  // global scope
function sayname(){
    // echo $name;  // eror
}
sayname();


// local scope

function createname(){
    $name1 = "eko";  // local scope    
}
createname();
// echo $name1;  // eror


// global keyword

$name2 = "eko";  // global scope
function saynamee(){
    global $name2;  // global keyword
    echo "hello $name2";

    echo "hello {$GLOBALS['name2']}";  // global variable
}
saynamee();

// static scope
function increment()
{
   static $counter = 1; // static scope
   echo "counter : $counter \n";
   $counter++;
}

increment();
increment();

