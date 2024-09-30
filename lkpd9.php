<?php
function hitungPecahanUang($jumlah) {
    // Daftar pecahan uang Rupiah
    $pecahan = [
        1000000 => "Rp. 1,000,000",
        500000 => "Rp. 500,000",
        200000 => "Rp. 200,000",
        100000 => "Rp. 100,000",
        50000 => "Rp. 50,000",
        20000 => "Rp. 20,000",
        10000 => "Rp. 10,000",
        5000 => "Rp. 5,000",
        2000 => "Rp. 2,000",
        1000 => "Rp. 1,000",
        500 => "Rp. 500"
    ];

    // Inisialisasi hasil
    $hasil = [];

    // Hitung jumlah pecahan untuk setiap uang
    foreach ($pecahan as $nilai => $deskripsi) {
        if ($jumlah >= $nilai) {
            $jumlah_lembar = floor($jumlah / $nilai);
            $hasil[$deskripsi] = $jumlah_lembar;
            $jumlah -= $jumlah_lembar * $nilai;
        }
    }

    return $hasil;
}

// Contoh penggunaan
$jumlah = 140500; // Tidak menggunakan tanda titik di tengah angka
$pecahan = hitungPecahanUang($jumlah);

// Menampilkan hasil
echo "Uang: Rp. " . number_format($jumlah, 0, ',', '.') . "\n";
echo "Lembaran Rupiah:\n";
foreach ($pecahan as $deskripsi => $jumlah_lembar) {
    echo "$deskripsi : $jumlah_lembar\n";
}
?>