<?php

// function
function sayhello() {
    echo "hello world";
}

sayhello();
sayhello();

// lokasi function
// function bisa di dalam if dan function bisa di dlm function

$buat = true;

if ($buat) {
    function hi() {
        echo "hi";
    }
}

hi();