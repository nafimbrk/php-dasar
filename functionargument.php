<?php

//function argument
function hello($name, $time) {
    echo "hello $name, selamat $time";
}

hello("eko", "siang");
hello("budi", "malam");

// function default argument value
// untuk membuatnya disarankan diparameter yg belakang jgn didepan 
function say($fn, $ln = "") {
    echo "hello $fn $ln";
}

say("eko");
say("budi");
say("eko", "kurniawan");

// di php bisa menambahkan type data di argument sehingga php akan melakukan oengecekan saat kita mengirim value ke function tersebut
// kalo type data value nya gk sesuai maka akan error
// secara default php akan melakukan konversi secara otomatis misal jika menggunakan type int tapi yg di masukkan string maka string tersebut akan otomatis di konversi menjadi int

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "total $first + $last = $total \n";
}

sum("100", "100"); // bisa
sum(100, 100);
sum(true, false); // bisa
// sum([], []); error
// sum("benar", "salah"); error