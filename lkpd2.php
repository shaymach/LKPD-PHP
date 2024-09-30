<?php
function hitungKompensasi($jamMulai, $jamPulang) {
    // Menghitung total jam kerja
    $totalJamKerja = $jamPulang - $jamMulai;

    // Jumlah jam lembur
    $jamLembur = $totalJamKerja - 8;

    // Inisialisasi kompensasi
    $kompensasi = 0;

    // Menghitung kompensasi
    if ($jamLembur > 0) {
        // Kompensasi untuk 1 jam pertama
        $kompensasi += 50000; // Rp. 50.000 untuk jam pertama
        $jamLembur -= 1;

        // Kompensasi untuk jam lembur berikutnya
        if ($jamLembur > 0) {
            $kompensasi += $jamLembur * 25000; // Rp. 25.000 per jam berikutnya
        }
    }

    return [$totalJamKerja, max($totalJamKerja - 8, 0), $kompensasi];
}

// Contoh penggunaan
$jamMulai = 8; // Jam mulai kerja (8 pagi)
$jamPulang = 22; // Jam pulang kerja (10 malam)

list($lamaKerja, $jamLembur, $kompensasi) = hitungKompensasi($jamMulai, $jamPulang);

// Tampilkan hasil
echo "Lama kerja: " . $lamaKerja . " jam<br>";
echo "Jam lebih : " . $jamLembur . " jam<br>";
echo "Kompensasi yang diterima: Rp. " . number_format($kompensasi, 0, ',', '.') . ",-";
?>
