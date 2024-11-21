<?php

$names = ["hendro", "siti", "haryanto"];

$persons = [
    "fn" => "eko",
    "mn" => "kurniawan",
    "ln" => "khanedy"
];

// tanpa for each
for ($i = 0; $i < count($names); $i++) {
    echo "data ke $i = $names[$i] \n";
} 

// for each

foreach ($names as $name) {
    echo "data = $name \n";
}

foreach ($persons as $person) {
    echo "data = $person \n";
}

// for each dengan key

foreach ($names as $index => $value) {
    echo "$index : $value \n";
}

foreach ($persons as $key => $value) {
    echo "$key : $value \n";
}

