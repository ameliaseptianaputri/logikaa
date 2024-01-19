<!-- bilangan =[75,77,87,70,90,81,69,87,66];
dari bilangan diatas kelompokan lah menjadi 2 kelompok yaitu kelompok 1 untuk nilai kompeten yang lebih dari dan sama dengan 75 dan 
kelompok 2 belum kompeten kurang dari 75 -->

<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kelompok1 = []; 
$kelompok2 = []; 

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kelompok1[] = $nilai;
    } else {
        $kelompok2[] = $nilai;
    }
}

echo "Kelompok 1 (Nilai Kompeten): " . implode(", ", $kelompok1) . "\n";
echo "Kelompok 2 (Nilai Belum Kompeten): " . implode(", ", $kelompok2) . "\n";


?>
