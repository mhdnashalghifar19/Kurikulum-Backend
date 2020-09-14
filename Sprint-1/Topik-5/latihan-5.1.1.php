<?php
echo '==============================='."\n";
echo '| Penghitungan Persegi Panjang|'."\n";
echo '==============================='."\n";
echo "1. Luas\n";
echo "2. Keliling\n";
echo "Mau Menghitung Apa ? ";

$pilihan = (int)trim(fgets(STDIN));


function luas($p, $l){
    return ($p*$l);
}
function keliling($p, $l){
    return ($p+$l)*2;
}

if ($pilihan == 1) {
    echo "panjang : ";
    $panjang =(int)trim(fgets(STDIN));
    echo "lebar : ";
    $lebar = (int)trim(fgets(STDIN));
    echo "luas : ".luas($panjang, $lebar)."\n";
}   elseif ($pilihan == 2) {
    echo "panjang : ";
    $panjang =(int)trim(fgets(STDIN));
    echo "lebar : ";
    $lebar = (int)trim(fgets(STDIN));
    echo "keliling : ".keliling($panjang, $lebar)."\n";
}   else {
    echo "pilihan tidak ditemukan !";
}
?>