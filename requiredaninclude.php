<?php

// require, jika file yg kita ambil tidak ada maka akan terjadi eror dan program terhenti
// include, jika file yg kita ambil tidak ada maka hanya akan memberi peringatan namun program akan tetap dilanjutkan
// require_once dan include_once, jika kita sebelumnya pernah mengambil file yg sama, maka tidak akan diambil lagi
// harus di bagian atas

// include "lib/myfunction.php";
// include "lib/myfunction.php";
// maka akan error, ibarat kita membuat 2 function yg sama

include_once "lib/myfunction.php";
include_once "lib/myfunction.php";

echo sayhello("eko", "kurniawan");
