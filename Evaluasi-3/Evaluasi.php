<?php

class KoneksiPdo {
    protected $server = "localhost",
    $username         = "user",
    $password         = "password";

    public function __construct()
    {
        $this->connect = new PDO("mysql:host=$this->server; dbname=PONDOKIT", $this->username,
        $this->password);
    }

    public function select()
    {
        $query = "SELECT * FROM DATA_SANTRI";
        $show  = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }

    public function input()
    {
        echo "Input Nama = ";
        $nama = trim(fgets(STDIN));
        echo "Input Nilai = ";
        $nilai = trim(fgets(STDIN));
        $arr = [$nama, $nilai];
        $query = "INSERT INTO DATA_SANTRI (Nama, Nilai) VALUE (?,?)";
        $show  = $this->connect->prepare($query);
        $show->execute($arr);
        print_r($this->select());
    }

    public function update()
    {
        echo "Input Nama = ";
        $nama = trim(fgets(STDIN));
        echo "Input Nilai = ";
        $nilai = trim(fgets(STDIN));
        echo "Input Id = ";
        $id = trim(fgets(STDIN));
        $query = "UPDATE DATA_SANTRI SET Nama = '$nama', Nilai = '$nilai' WHERE Id = $id";
        $show  = $this->connect->prepare($query);
        $show->execute();
        print_r($this->select());
    }

    public function delete()
    {
        echo "Input Id = ";
        $id = trim(fgets(STDIN));

        $query = "DELETE FROM DATA_SANTRI WHERE Id = '$id'";
        $show  = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($this->select());
        
    }

    
}

$konek = new KoneksiPdo();

$kondisi = true;
while ($kondisi){
    echo "===================\n";
    echo "  Sistem CRUD Data \n";
    echo "===================\n";
   
    echo "MENU\n";
    echo "1.select data\n";
    echo "2.insert data\n";
    echo "3.update data\n";
    echo "4.delete data\n";
    echo "Pilih Menu\n";
    $menu = (int) trim(fgets(STDIN));
    

switch ($menu) {
    case 1:
        print_r($konek->select());
        break;
    
    case 2:
        $konek->input();
        break;

    case 3:
        $konek->update();
        break;  
    case 4:
        $konek->delete();
        break;

    default:
        echo "MENU YANG ANDA INPUT TIDAK TERSEDIA\n";
        break;
}

echo "\nApakah Anda masih ingin menjalankan program ? (y/n)";
$pilih = trim(fgets(STDIN));
if($pilih == 'n'){
    $kondisi = false;
}
}
