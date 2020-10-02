<?php

class Koneksi {
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost; dbname=latihan", 'user', 'password');
    }

    public function read(){
        $query = $this->db->prepare("SELECT * FROM santri");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create($nama, $asal, $divisi) {
        $query = $this->db->prepare("INSERT INTO santri (nama, asal, divisi) VALUE (?, ?, ?)");
        $query->execute([$nama, $asal, $divisi]);
        header('location:index.php');
        
    }

    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM santri WHERE id=?");
        $query->execute([$id]);
        header('location:index.php');
    }

}