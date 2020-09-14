<?php
echo "berapa data yang ingin di imput : ";
$nilai=(int) trim(fgets(STDIN));
for ($i=1; $i <= $nilai ; $i++) { 
echo "imput ke-$i: ";
$imput_data[]=(int) trim(fgets(STDIN));
}
$sum=0;
for($i=0; $i<count($imput_data); $i++){
    $sum += $imput_data[$i];
}

sort ($imput_data);
print_r($imput_data);
$median=count($imput_data)/2;
if ($median) {
    $hasil=round($median);
    $hasil2=$imput_data[$hasil-1];
}
$modus=array_count_values($imput_data);
foreach ($modus as $key => $value) {
    if ($value == max ($modus)) {
        echo "modusnya adalah:[$key] jumlahnya $value\n";
    }
}
$mean = $sum/count($imput_data);
echo "Meannya adalah : ".$mean. "\n";
echo "madiannya adalah : ".$hasil2;
echo "\n";
?>
