<?php

// switch
$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D":
        echo "Anda tidak lulus";
        break;    // mirip seperti penutup kurung kurawal di if else
    default:
        echo "Mungkin anda salah jurusan";
}