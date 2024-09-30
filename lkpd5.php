<?php
// Definisikan dua variabel array
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 98];

// Kelompok pertama: bilangan yang sama di kedua array
$kelompok1 = array_intersect($bill1, $bill2);

// Kelompok kedua: bilangan yang hanya terdapat di salah satu array
$kelompok2 = array_merge(array_diff($bill1, $bill2), array_diff($bill2, $bill1));

// Tampilkan hasil
echo "Bilangan yang ada di kedua variabel : " . implode(", ", $kelompok1) . "<br>";
echo "Bilangan yang tidak ada di kedua variabel : " . implode(", ", $kelompok2) . "<br>";
?>