<?php
$Usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$AnakAnak = 0;
$Dewasa = 0;

    // Proses
    foreach ($Usia as $umur) {
        if ($umur < 17) {
            $AnakAnak++;
        } else {
            $Dewasa++;
        }
    }

    // hasil
    echo "List usia : " . implode(", ", $Usia) . "<br>";
    echo "Jumlah kategori dewasa : " . $Dewasa . "<br>";
    echo "Jumlah kategori anak-anak : " . $AnakAnak . "<br>";


?>
