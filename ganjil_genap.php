<?php
// 1. Variable dengan nama angka diisi dengan angka yang Anda inginkan
$angka = 12; // Anda bisa mengganti nilai angka sesuai kebutuhan

// 2. Function dengan nama getJenisAngka untuk menentukan jenis angka (genap atau ganjil)
function getJenisAngka($angka) {
    if ($angka % 2 == 0) {
        return "genap";
    } else {
        return "ganjil";
    }
}

// 3. Menampilkan hasil
echo "Angka $angka merupakan sebuah angka " . getJenisAngka($angka);
?>
