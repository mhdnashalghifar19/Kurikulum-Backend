<?php

class OperasiHitung{
    public static function luas_persegi($p, $l){
        return ($p*$l);
    }
}
$operasi= new OperasiHitung;

echo "1. luas_persegi panjang \n";
echo "Silahkan Pilih ? ";
$pilih=trim(fgets(STDIN));

switch ($pilih) {
    case '1':
        echo "panjang = ";
        $panjang=trim(fgets(STDIN));
        echo "lebar = ";
        $lebar=trim(fgets(STDIN));
        echo "luas = ".OperasiHitung::luas_persegi($panjang, $lebar);
        break;
    
    default:
        echo "Pilihan Tidak Tersedia !";
        break;
}