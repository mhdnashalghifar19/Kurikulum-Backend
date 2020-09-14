<?php
$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

function sort_id($arr){
    asort($arr);
    print_r($arr);
}
function sort_name($arr){
    foreach ($arr as $key => $value) {
        $name[]=$value['name'];
        
    }
    array_multisort($name, SORT_ASC, $arr);
    print_r($arr);
}
function sort_division($arr){
    foreach ($arr as $key => $value) {
        if ($arr[$key]['division']=='PHP Backend' ) {
            print_r($arr);
        }
    }
}
function umur($arr){
    foreach ($arr as $key => $value) {
        if ($arr[$key]['age']<25) {
            print_r($arr[$key]);
        }
    }
}
function rata_umur($arr){
    $sum=0;
    foreach ($arr as $key => $value) {
        $sum += $arr[$key]['age'];
    }
    $hasil=$sum/count($arr);
    echo $hasil;
}
function sort_umur($arr){
    foreach ($arr as $key => $value) {
        $age[]=$value['age'];
    }
    array_multisort($age, SORT_ASC, $arr);
    print_r($arr);
}
print_r($students);

echo "\n1. Urutkan Berdasarkan ID\n";
echo "2. Urutkan Berdasarkan Nama\n";
echo "3. Santri Yang Minat Dengan PHP-Backend\n";
echo "4. Santri Berusia Kurang Dari 25\n";
echo "5. Rata-Rata Usia Santri\n";
echo "6. Urutkan Berdasarkan Usia";
echo "Pilih Sesuai Nomer : ";
$pilih=trim(fgets(STDIN));
switch ($pilih) {
    case 1:
        sort_id($students);
        break;
    case 2:
        sort_name($students);
        break;
    case 3:
        sort_division($students);
        break;
    case 4:
        umur($students);
        break;
    case 5:
        rata_umur($students);
        break;
    case 6:
        sort_umur($students);
        break;
    default:
        echo "\nPilihan Tidak Tersedia\n.";
        break;
}