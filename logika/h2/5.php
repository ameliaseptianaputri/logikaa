<!-- ditoko b sedang mengadakan promo pembelian minimal belanja rp100.000 akan mendapatkan diskon sebesar 7%. 
jika andi berbelanja sebesar rp154.000, berapakah harga yang harus dibayar oleh andi -->

<?php

    $harga= 154000;
    $diskon= 0.07;

    if ($harga > 100000) {
       $harga= $harga - ($harga*$diskon);
        echo "harga yang harus dibayar oleh andi adalah $harga ";
    } 

?>