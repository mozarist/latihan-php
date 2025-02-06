<?php

$gaji = 12000000;
$status = "Tetap";


if ($gaji >= 15000000) {
    $pajak = 0.20;
    $persen = 20;
} elseif ($gaji >= 10000000 && $gaji <= 14999999) {
    $pajak = 0.15;
    $persen = 15;   
} elseif ($gaji >= 5000000 && $gaji <= 9999999) {
    $pajak = 0.10;
    $persen = 10;   
} elseif ($gaji >= 0 && $gaji <= 4999999) {
    $pajak = 0.5;
    $persen = 5;    
} else {
    $pajak = "";
    $persen = 0;
}

if ($status == "Tetap") {
    $pajak = $pajak + 0.05;
    $persen = $persen + 5;
}

$potongan = $gaji * $pajak;
$bersih = $gaji - $potongan;

echo "====== Rincian Pajak ====== <br>";
echo "Gaji Bulanan : " . $gaji . "<br>";
echo "Status Pegawai : " . $status . "<br>";
echo "Pajak : " . $persen . "%" . "<br>";
echo "Potongan Pajak : " . $potongan . "<br>";
echo "Gaji Bersih : " . $bersih;