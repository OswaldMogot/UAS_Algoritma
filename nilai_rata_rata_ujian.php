<?php
// 1. Variable dengan nama "nilai" dengan value berupa array asosiatif
$nilai = array(
    'bahasa_indonesia' => 85,
    'matematika' => 90,
    'biologi' => 78,
    'kimia' => 88
);

// 2. Menggunakan fungsi bawaan PHP count() dan array_sum() untuk mendapatkan nilai rata-rata
$jumlahNilai = count($nilai); // Menghitung jumlah nilai
$totalNilai = array_sum($nilai); // Menghitung total nilai
$rataRata = $totalNilai / $jumlahNilai; // Menghitung nilai rata-rata

// 3. Menyimpan hasil rata-rata nilai ke dalam variabel "ratarata"
$ratarata = $rataRata;

// 4. Menampilkan hasil
echo "Rata-rata nilai ujian saya adalah $ratarata";
?>
