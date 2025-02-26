<!-- Luas persegi panjang
Keliling persegi panjang

panjang
lebar

luas : p x 1
keliliing :2(p+l)

output nilai panjang = 5
nilai lebar = 3

luas = panjang x lebar
     = 5 x 3
     = 15 cm

keliling = 2(panjang + lebar)
         = 2(5+3)
         = 16 cm -->

<?php

$panjang = "5";
$lebar = "3";

$luas = $panjang * $lebar;
$keliling = 2*($panjang+$lebar);

echo "luas persegi panjang $panjang x $lebar = " . $luas . "cm <br>";
echo "keliling persegi panjang $panjang x $lebar = " . $keliling . "cm";