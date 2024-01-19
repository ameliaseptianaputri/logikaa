<!-- tampilkanlah data dibawah ini yang hanya memiliki diskon -->

<?php
  $barang = [
    ['nama' => 'ban',
    'diskon' => 10,
    ],

    ['nama' => 'oli mesin',
    ],

    ['nama' => 'kampas rem',
    ],

    ['nama' => 'busi',
    'diskon' => 9,
    ],

    ['nama' => 'akumulator',
    'diskon' => 7,
    ],
    
    ];
echo "nama barang yang memiliki diskon:\n";

foreach ($barang as $barang) {
    if (isset($barang['diskon'])) {
        echo "Nama: {$barang['nama']}, Diskon: {$barang['diskon']}%\n";
    }
}
?>


	