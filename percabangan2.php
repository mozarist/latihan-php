<?php

$uts = 75;
$uas = 80;
$tugas = 70;

$status = ""; //lulus atau perbaikan
$grade = ""; //a, b, c

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "Perbaikan";
    $grade = "C";
} elseif ($rata >= 80 && $rata <= 89) {
    $status = "Lulus";
    $grade = "B";
} elseif ($rata >= 90 && $rata <= 100) {
    $status = "Lulus";
    $grade = "A";
} else {
    $status = "-";
    $grade = "-";
}

// menampilkan hasil
echo "Nilai UTS = " . $uts . "<br>";
echo "Nilai UAS = " . $uas . "<br>";
echo "Nilai Tugas = " . $tugas . "<br>";
echo "Rata-rata = " . $rata . "<br>";
echo "Grade = " . $grade . "<br>";
echo "Status = " . $status . "<br>";