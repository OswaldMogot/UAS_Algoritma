<?php
// 1. Variable dengan nama "tahunLahir" berisi tahun lahir Anda.
$tahunLahir = 1990; // Misalnya, ganti dengan tahun lahir Anda sendiri

// 2. Menghitung umur dalam abad
$tahunSekarang = date("Y"); // Mendapatkan tahun sekarang
$umur = ($tahunSekarang - $tahunLahir) / 100; // Menghitung umur dalam abad

// 3. Menampilkan hasil
echo "Umur saya tahun ini adalah $umur abad.";
?>
