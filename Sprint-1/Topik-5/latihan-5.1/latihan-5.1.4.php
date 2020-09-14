<?php
echo '========================'."\n";
echo '| Penghitungan trapesium|'."\n";
echo '========================'."\n";
echo "1. Luas\n";
echo "2. Keliling\n";
echo "Mau Menghitung Apa ? ";

$pilihan =trim(fgets(STDIN));

function luas ($a,$b,$t) {
    return ($a+$b)*$t/2;
}
function keliling ($s,$s2,$s3,$s4) {
    return ($s+$s2+$s3+$s4);
}

if ($pilihan == 1) {
    echo "Sisi Atas : ";
    $sisi_atas= trim(fgets(STDIN));
    echo "Sisi Bawah";
    $sisi_bawah=trim(fgets(STDIN));
    echo "Tinggi : ";
    $tinggi=trim(fgets(STDIN));
    echo "luasnya : ".luas ($sisi_atas,$sisi_bawah,$tinggi)."\n";
}elseif ($pilihan ==2) {
    echo "Sisi : ";
    $sisi = trim(fgets(STDIN));
    echo "Sisi 2 : ";
    $sisi2 = trim(fgets(STDIN));
    echo "Sisi 3 : ";
    $sisi3 = trim(fgets(STDIN));
    echo "Sisi 4 : ";
    $sisi4 = trim(fgets(STDIN));
    echo "kelilingnya : ".keliling ($sisi,$sisi2,$sisi3,$sisi4)."\n";
}else {
    echo "Pilihan Anda Tidak DItemukan";
}
?>