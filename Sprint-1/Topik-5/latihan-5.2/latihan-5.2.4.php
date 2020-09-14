<?php
echo "=========================\n";
echo "     Luas Lingkaran      \n";
echo "=========================\n\n";

function luas($r){
    return($r*$r)*3.14;
}
$funtion_luas=function($r){
    return($r*$r)*3.14;
};
echo "Jari-Jari = ";
$Jari_Jari=trim(fgets(STDIN));

echo "luas = ".$funtion_luas($Jari_Jari);
?>