<?php
echo "=========================\n";
echo "    Panjang trapesium    \n";
echo "=========================\n\n";

function luas($a,$a2,$t){
    return($a+$a2)*$t/2;
}
$funtion_luas=function($a,$a2,$t){
    return($a+$a2)*$t/2;
};
echo "alas atas = ";
$alas_atas=trim(fgets(STDIN));
echo "alas bawah = ";
$alas_bawah=trim(fgets(STDIN));
echo "tinggi = ";
$tinggi=trim(fgets(STDIN));
echo "luas = ".$funtion_luas($alas_atas,$alas_bawah,$tinggi);
?>