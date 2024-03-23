<?php
// 1. Fungsi konversiKeKelvin untuk mengkonversi suhu dari Celcius ke Kelvin
function konversiKeKelvin($suhuCelcius) {
    // Rumus konversi suhu dari Celcius ke Kelvin
    $suhuKelvin = $suhuCelcius + 273.15;
    return $suhuKelvin;
}

// Contoh pemanggilan fungsi dan menampilkan hasil konversi
$suhuCelcius = 25; // Contoh suhu dalam Celcius
$suhuKelvin = konversiKeKelvin($suhuCelcius); // Panggil fungsi konversiKeKelvin
echo "Suhu $suhuCelcius Celcius sama dengan $suhuKelvin Kelvin.";
?>
