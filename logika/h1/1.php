<?php
$a = -9;
            
if ($a > 0) {
    echo "$a angka tersebut adalah bilangan bulat positif";
} elseif ($a < 0) {
    echo "$a angka tersebut adalah bilangan bulat negatif";
} else {
    echo "$a angka tersebut adalah bilangan cacah";
}

echo "\n";  

if ($a % 3 == 0) {
    echo "$a angka tersebut adalah kelipatan 3";
} else {
    echo "$a angka tersebut bukan kelipatan 3";
}

