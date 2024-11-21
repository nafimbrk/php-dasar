<?php

// if elseif else
$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai anda A";
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai anda B";
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai anda C";
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai anda D";
} else {
    echo "Nilai anda E";
}