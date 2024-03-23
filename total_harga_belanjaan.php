<?php
// 1. Variable "belanjaan" dengan isi berupa array asosiatif
$belanjaan = array(
    'baju' => 150000,   // Harga baju
    'sepeda' => 1200000, // Harga sepeda
    'laptop' => 7500000, // Harga laptop
    'mouse' => 250000   // Harga mouse
);

// 2. Menghitung total pengeluaran
$totalBelanjaan = array_sum($belanjaan);

// 3. Menampilkan hasil
echo "Total pengeluaran saya hari ini sebesar Rp. $totalBelanjaan";
?>
