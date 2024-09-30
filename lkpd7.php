<?php
function bandingkanNama($nama1, $nama2) {
    // Hitung jumlah karakter pada masing-masing nama (tanpa spasi)
    $panjangNama1 = strlen(str_replace(' ', '', $nama1));
    $panjangNama2 = strlen(str_replace(' ', '', $nama2));

    // Bandingkan panjang karakter
    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih karakter";
    } elseif ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : selisih $selisih karakter";
    } else {
        echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama.";
    }
}

// Contoh penggunaan
$nama1 = "Shayma Choula Febryna";
$nama2 = "Shapira Bunga";


echo "nama pertama : " . $nama1 ;
echo "<br>";
echo "nama kedua : " . $nama2 ;
echo "<br>";
bandingkanNama($nama1, $nama2);
?>
