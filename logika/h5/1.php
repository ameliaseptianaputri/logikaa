<!-- gunakan fungsi untuk menghitung agka 1000. apakah bisa dibagi dengan angka 3,5,7 dan 10. Kemudian print "angka 1000 bisa dibagi dengan 
angka 5 saja" atau "angka 1000 bisa dibagi dengan angka 5 dan 10" sesuaikan dengan hasilnya.(gunakan 2 fungsi, untuk menghitung pembagian dan 
cetak hasil, pastikan hasil dari parameter dibuat array, misal [3,7] yaitu angka yangbisa dibagi dengan 1000 -->

<!-- in array untuk memeriksa apakah suatu nilai ada dalam sebuah array. -->

<?php

    function pembagian($angka, $pembagi) {
        if ($angka % $pembagi == 0) {
            return true;
        } else {
            return false;
        }
    }

    $pembagi = [3, 5, 7, 10];
    $hasil = [];

    foreach ($pembagi as $p) {
        if (pembagian(1000, $p)) {
            $hasil[] = $p;
        }
    }

    if (count($hasil) == 1 && $hasil[0] == 5) {
        echo "Angka 1000 bisa dibagi dengan angka 5 saja.";
    } elseif (count($hasil) == 2 && in_array(5, $hasil) && in_array(10, $hasil)) {
        echo "Angka 1000 bisa dibagi dengan angka 5 dan 10.";
    } else {
        echo "Angka 1000 tidak bisa dibagi dengan angka 3, 5, 7, dan 10.";
    }


?>