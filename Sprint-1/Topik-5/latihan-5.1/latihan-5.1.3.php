<?php
echo '========================='."\n";
echo '| Penghitungan Lingkaran|'."\n";
echo '========================='."\n";
echo "1. Luas Lingkaran Diketahui R\n";
echo "2. Luas Lingkaran Diketahui D\n";
echo "3. Keliling Lingkaran\n";
echo "Mau Menghitung Apa ? ";

$pilihan=trim(fgets(STDIN));

function luasR ($r){
    return 3.14*($r*$r);
}
function luasD ($d){
    return (1/4)*3.14*($d*$d);
}
function keliling ($k){
    return 2*3.14*($k);
}

if ($pilihan == 1) {
    echo "r : ";
    $jari=trim(fgets(STDIN));
    echo "luasnya : ".luasR($jari);
}elseif ($pilihan == 2) {
    echo "d : ";
    $diameter=trim(fgets(STDIN));
    echo "luasnya : ".luasD($diameter);
}elseif ($pilihan == 3) {
    echo "r : ";
    $keliling=trim(fgets(STDIN));
    echo "kelilingnya : ".keliling($keliling);
}
?>