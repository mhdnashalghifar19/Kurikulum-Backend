<?php
echo "input data : ";
$input=trim(fgets(STDIN));
for ($i=1; $i <= $input; $i++) { 
    echo "Input Ke-$i : ";
    $arr[]=trim(fgets(STDIN));
}

function kali3($data){
    foreach ($data as $key => $value) {
        $data[$key]*=3;
    }
    return $data;
}
print_r($arr);
$hasil =kali3($arr);
print_r($hasil);
?>