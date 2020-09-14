<?php
echo "mau input berapa kali ?  ";
$input=trim(fgets(STDIN));
for ($i=0; $i < $input; $i++) { 
    echo "input ke-$i : ";
    $input_data[]=trim(fgets(STDIN));
}
rsort($input_data);

echo "\n";

for ($b=0; $b <3 ; $b++) { 
    $max[]=$input_data[$b];
}
echo "highest : ";
print_r($max);

sort($input_data);

echo "\n";

for ($b=0; $b <3 ; $b++) { 
    $low[]=$input_data[$b];
}
echo "Lowest : ";
print_r($low);

?>