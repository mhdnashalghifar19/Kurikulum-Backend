<?php
echo "=========================\n";
echo " Panjang Persegi Panjang \n";
echo "=========================\n\n";

function luas($p,$l){
    return ($p*$l);
}
$funtion_luas=function($p,$l){
    return ($p*$l);
};
echo "panjang = ";
$panjang = trim(fgets(STDIN));
echo "lebar = ";
$lebar = trim(fgets(STDIN));
echo "luas = ".$funtion_luas($panjang,$lebar);
echo "\n";
?>