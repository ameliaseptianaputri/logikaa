<!-- gunakan fungsi untuk menghitung suku pertama sampai 12 dari rumus a*4+n*3 dengan a=9 -->

<?php

function hitung_suku($a, $n) {
    return $a * 4 + $n * 3;
}

$a = 9;

echo "Rumus: a * 4 + n * 3\n";
echo "a = $a\n\n";

for ($n = 1; $n <= 12; $n++) {
    $hasil = hitung_suku($a, $n);
    echo "Suku ke-$n: $hasil\n";
}

?>
