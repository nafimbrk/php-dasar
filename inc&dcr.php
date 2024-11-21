<?php

// $a++;  // post increment  // kembalikan $a lalu naikkan 1 angka
// ++$a;  // pre increment  // naikkan $a 1 angka, lalu kembalikan $a

// $a--;  // post decrement  // kembalikan $a lalu turunkan 1 angka
// --$a;  // pre decrement  // turunkan $a 1 angka, lalu kembalikan $a


$i = 10;

$i++;  // $i = $i + 1;
$i++;

var_dump($i);

// misal $a pgn simpan data nya di $b
$a = 10;

// $b = $a++;  // $a nya dimasukkan ke $b baru $a nya di naikkan 1
// $b = ++$a  // akan di naikkan dulu baru nanti $a nya di kasih ke $b


$b = $a++;  // $b = $a;
            // $a = $a + 1;


// $b = ++$a;  // $a = $a + 1;
               // $b = $a;


var_dump($a);
var_dump($b);

// tapi kalo gk butuh menyimpan datanya di variable lain ya tinggal pake $j++ atau ++$j bebas sama aja

$j = 10;

$j++;
++$j;

var_dump($j);



