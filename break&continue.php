<?php

// break
$counter = 1;

while (true) {
    echo "break ke-$counter \n";
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// continue
// kalo mau muncul angka ganjil $var % 2 == 0, genap $var % 2 == 1
for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "continue ganjil ke-$counter \n";
}