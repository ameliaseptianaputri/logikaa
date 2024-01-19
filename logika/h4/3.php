<!-- buatlah kelompok dari bilangan dibawah ini
kelompok 1 berisikan bilangan yang terdapat di kedua variabel. dan kelompok 2 bilangan hanya terdapat di salah satu variabel saja
$bil 1= [80,77,65,89,55,12,90,86];
$bil 2= [77,99,55,81,45,90,91,98]; -->

<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = array_intersect($bil1, $bil2);

$kelompok2 = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok 1: " . implode(", ", $kelompok1) . "\n";
echo "Kelompok 2: " . implode(", ", $kelompok2) . "\n";

?>
