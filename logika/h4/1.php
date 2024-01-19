<!-- ubah pukul 19.00 menjadi pukul 07.00 pm dan ubah pukul 23.45 menjadi pukul 11.45pm, pukul 08.55 menjadi 08.55am 
dengan sebuah fungsi yang dibuat sendiri, bukan fungsi date yang sudah ada dari php, hint: substr(),] atau explode -->

<?php

function ubahFormatWaktu($waktu) {
    $jam = substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);
    $format = "am";

    if ($jam >= 12) {
        $format = "pm";
        if ($jam > 12) {
            $jam -= 12;
        }
    }
    $hasil = $jam . ':' . $menit . ' ' . $format;

    return $hasil;
}

$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Hasil 1: $hasil1\n";
echo "Hasil 2: $hasil2\n";
echo "Hasil 3: $hasil3\n";

?>
