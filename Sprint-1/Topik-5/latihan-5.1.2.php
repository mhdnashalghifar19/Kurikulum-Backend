<?php
echo '========================'."\n";
echo '| Penghitungan Segitiga|'."\n";
echo '========================'."\n";
echo "1. Luas\n";
echo "2. Keliling\n";
echo "Mau Menghitung Apa ? ";

$pilihan =trim(fgets(STDIN));

function luas ($a, $t) {
    return ($a*$t)/2;
}
function keliling ($s,$s2,$s3) {
    return ($s+$s2+$s3);
}

if ($pilihan == 1) {
    echo "Alas : ";
    $alas= trim(fgets(STDIN));
    echo "Tinggi : ";
    $tinggi=trim(fgets(STDIN));
    echo "luasnya : ".luas ($alas, $tinggi)."\n";
}elseif ($pilihan ==2) {
    echo "Sisi : ";
    $sisi = trim(fgets(STDIN));
    echo "Sisi 2 : ";
    $sisi2 = trim(fgets(STDIN));
    echo "Sisi 3 : ";
    $sisi3 = trim(fgets(STDIN));
    echo "kelilingnya : ".keliling ($sisi,$sisi2,$sisi3)."\n";
}
?>