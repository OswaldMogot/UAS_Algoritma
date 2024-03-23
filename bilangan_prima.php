<?php
// 1. Fungsi isPrime untuk menentukan apakah sebuah angka merupakan bilangan prima
function isPrime($angka) {
    if ($angka <= 1) {
        return "Tidak, $angka bukan merupakan bilangan prima";
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return "Tidak, $angka bukan merupakan bilangan prima";
        }
    }
    return "Ya, $angka merupakan bilangan prima";
}

// Contoh pemanggilan fungsi
$angka = 17; // Ganti dengan angka yang ingin Anda cek

// Menampilkan hasil
echo isPrime($angka);
?>
