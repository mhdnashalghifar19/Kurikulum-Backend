<?php

class OperasiHitung{
    public static function luas_persegi($p, $l){
        if ($p==0||$l==0) {
            throw new Exception("Error Processing Request !"); 
        }    
        
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
        try {
            $hasil= OperasiHitung::luas_persegi($panjang, $lebar);
            echo "luas = ".$hasil;
        } catch (Exception $ex) {
            echo "Erorr pada " . $ex->getFile() . " baris ke : " . $ex->getLine() . "\n";
            echo $ex->getMessage();
        }
        break;
    
    default:
        echo "Pilihan Tidak Tersedia !";
        break;
}