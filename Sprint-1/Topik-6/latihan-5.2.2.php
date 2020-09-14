<?php
echo "=========================\n";
echo "     Panjang Segitiga    \n";
echo "=========================\n\n";

function luas($a,$t){
    return ($a*$t)/2;
}
$funtion_luas=function($a,$t){
    return ($a*$t)/2;
};
echo "alas = ";
$alas = trim(fgets(STDIN));
echo "tinggi = ";
$tinggi = trim(fgets(STDIN));
echo "luas = ".$funtion_luas($alas,$tinggi);
echo "\n";
?>