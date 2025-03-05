<?php


$jabatan = "manager";
$jam_kerja = 500; //200
//jam lembur total - 200 = 300


if ($jabatan == "manager") {
    $gaji = 7000000;
} elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
} elseif ($jabatan == "staff") {
    $gaji = 3000000;
}


// jam kerja = 500
if ($jam_kerja > 300) {
    $bonus = ($jam_kerja - 200) * 20000;
} else {
    $bonus = 0;
}


echo $jabatan . "<br>" . $gaji . "<br>" . $bonus;


