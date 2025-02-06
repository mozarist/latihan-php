<?php
$total_belanja = 500;

echo "Total belanja anda $total_belanja.Rp <br>";

if ($total_belanja >= 1000) {
    echo "Selamat anda mendapatkan diskon 500 untuk pembelanjaan diatas 1000";
} else {
    echo "Tidak ada diskon yang sesuai dengan total belanja anda <br><br><br>";
}

///////////////////////////////////////////////////////////////////////////////

$hari = "Minggu";

echo "Sekarang hari $hari, maka ";
if ($hari == "Senin") {
    echo "mengenakan seragam putih abu";
}
elseif ($hari == "Selasa") {
    echo "mengenakan seragam pramuka";
}
elseif ($hari == "Rabu") {
    echo "mengenakan seragam produktif";
}
elseif ($hari == "Kamis") {
    echo "mengenakan seragam batik";
}
elseif ($hari == "Jumat") {
    echo "mengenakan seragam gamis dan peci";
}
else {
    echo "hari ini gak sekolah woi";
}