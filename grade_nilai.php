<?php
// 1. Variable dengan nama "nilai" yang berisi nilai Anda.
$nilai = 75; // Anda bisa mengganti nilai sesuai kebutuhan

// 2. Penggunaan if untuk menentukan grade nilai
if ($nilai >= 0 && $nilai <= 50) {
    $grade = "E";
} elseif ($nilai >= 51 && $nilai <= 60) {
    $grade = "D";
} elseif ($nilai >= 61 && $nilai <= 70) {
    $grade = "C";
} elseif ($nilai >= 71 && $nilai <= 85) {
    $grade = "B";
} elseif ($nilai >= 86 && $nilai <= 100) {
    $grade = "A";
} else {
    $grade = "tidak valid"; // Menampilkan pesan jika nilai tidak valid (di luar rentang 0-100)
}

// 3. Menampilkan hasil
echo "Grade nilai dari $nilai adalah $grade.";
?>
