<?php

class OperasiHitung{
    public function __construct(){
        echo "1. luas_lingkaran \n";
        echo "2. keliling_lingkaran \n";
        echo "3. luas_trapesium \n";
        echo "4. keliling_lingkaran \n";
        echo "Silahkan Pilih ?";
        $pilih=trim(fgets(STDIN));
    switch ($pilih) {
        case '1':
            echo "=================================== \n";
            echo "|          Luas Lingkaran         | \n";
            echo "=================================== \n";
            echo "jari-jari = ";
            $jari_jari=trim(fgets(STDIN));
            echo "luasnya = ".$this->luas_lingkaran($jari_jari);
            break;
        case '2':
            echo "=================================== \n";
            echo "|        Keliling Lingkaran       | \n";
            echo "=================================== \n";
            echo "jari-jari = ";
            $jari_jari=trim(fgets(STDIN));
            echo "kelilingnya = ".$this->keliling_lingkaran($jari_jari);
            break;
        case '3':
            echo "=================================== \n";
            echo "|          Luas Trapesium         | \n";
            echo "=================================== \n";
            echo "alas atas = ";
            $alasatas=trim(fgets(STDIN));
            echo "alas bawah = ";
            $alasbawah=trim(fgets(STDIN));
            echo "tinggi = ";
            $tinggi=trim(fgets(STDIN));
            echo "luasnya = ".$this->luas_trapesium($alasatas, $alasbawah, $tinggi);
            break;
        case '4':
            echo "===================================== \n";
            echo "|         Keliling Trapesium        | \n";
            echo "===================================== \n";
            echo "sisi1 = ";
            $sisi1=trim(fgets(STDIN));
            echo "sisi2 = ";
            $sisi2=trim(fgets(STDIN));
            echo "sisi3 = ";
            $sisi3=trim(fgets(STDIN));
            echo "sisi4 = ";
            $sisi4=trim(fgets(STDIN));
            echo "kelilingnya = ".$this->keliling_trapesium($sisi1, $sisi2, $sisi3, $sisi4);
            break;    
        
        default:
            echo "Pilihan Tidak Tersedia !";
            break;
    }

    }
    public function luas_lingkaran($r){
        return (3.14*$r*$r);
    }
    public function keliling_lingkaran($r){
        return (2*3.14*$r);
    }
    public function luas_trapesium($a, $b, $t){
        return (($a+$b)*$t/2);
    }
    public function keliling_trapesium($s1, $s2, $s3, $s4){
        return ($s1+$s2+$s3+$s4);
    }
}

$hitung = new OperasiHitung;

