<!-- diberikan 2 kondisi saat pukul 07.00 sampai 11.30 merupakan waktu kerja dan saat pukul 11.30 sampai 12.15 
merupakan waktu istirahat dan sejak pukul 12.15 sampai 16.00 merupakan waktu kerja, sementara saat pukul 16.00 
sampai 07.00 merupakan bukan waktu kerja. apabila sekarang pukul 16.00, maka sekarang merupakan waktu?
note: variabel, jam, dan menit dipisahkan. diketahui variabel jam=16 dan menit=0 atau diketahui jam=15, menit=40 
(hasilnya: waktu kerja)  -->

<?php

    $jam = 11;
    $menit = 40;

    if ($jam >= 7 && $jam < 11) {
        echo "saat ini adalah waktu kerja";
    } elseif ($jam == 11 && $menit <= 30) {
        echo "saat ini adalah waktu kerja";
    } elseif ($jam == 11 && $menit >= 30 && $jam <= 12) {
        echo "saat ini adalah waktu istirahat";
    } elseif ($jam >= 12 && $jam <= 16) {
        echo "saat ini adalah waktu kerja";
    } else {
        echo "saat ini adalah bukan waktu kerja";    }

?>


