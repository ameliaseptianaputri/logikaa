<!-- nilai variabel a bisa dibagi dengan 4 dan bisa dibagi dengan 5, berapakah nilai variabel tersebut dari rentang 1-25 -->
<!-- &&: untuk menggabungkan dua kondisi. -->: 
<!-- ==: untuk memeriksa kesetaraan nilai antara dua ekspresi atau variabel.. Jika sama, dianggap benar dan jika tidak di anggap salah-->


<?php
for ($i = 1; $i <= 25; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "Nilai variabel a yang memenuhi kondisi: $i";
    }
}
?>
