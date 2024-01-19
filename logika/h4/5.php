<!-- buatlah urutan perkalian 1x1 =1 sampai dengan 3x10=30 -->

<?php
echo "Urutan Perkalian 1x1 sampai 3x10:\n";

for ($i = 1; $i <= 3; $i++) {
    for ($a = 1; $a <= 10; $j++) {
        $hasil = $i * $a;
        echo "$i x $a = $hasil\n";
    }
}
?>
