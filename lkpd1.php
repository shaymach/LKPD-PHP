<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lkpd1</title>
</head>
<body>
    
<?php
function mencariAngka($teks) {
    // Mencari semua angka dalam string
    if (preg_match_all('/\d/', $teks, $matches)) {
        // Jika ditemukan angka, tampilkan angka-angka tersebut
        echo "teks mengandung angka : " . implode(", ", $matches[0]);
    } else {
        // Jika tidak ditemukan angka
        echo "teks tidak mengandung angka.";
    }
}

// Contoh penggunaan
$teks1 = "Selamat ulang tahun";

echo "<p>teks : $teks1 </p>";

mencariAngka($teks1);

?>
</body>
</html>