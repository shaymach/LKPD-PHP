<?php
function hitungKemunculan($data, $cari) {
    // Hitung jumlah kemunculan angka yang dicari
    $jumlah = array_count_values($data);

    // Tampilkan hasil
    if (array_key_exists($cari, $jumlah)) {
        echo "Jumlah angka $cari = " . $jumlah[$cari];
    } else {
        echo "Angka $cari tidak ditemukan dalam array.";
    }
}

// Contoh data dan angka yang dicari
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

hitungKemunculan($data, $cari);
?>
