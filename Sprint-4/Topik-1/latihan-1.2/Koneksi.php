<?php

class Koneksi {
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost; dbname=latihan2", 'user', 'password');
    }

    public function read(){
        $query = $this->db->prepare("SELECT * FROM latihan");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create($nama_barang, $stok, $harga) {
        $query = $this->db->prepare("INSERT INTO latihan (nama_barang, stok, harga) VALUE (?, ?, ?)");
        $query->execute([$nama_barang, $stok, $harga]);
        header('location:index.php');
        
    }

    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM latihan WHERE id=?");
        $query->execute([$id]);
        header('location:index.php');
    }

    public function getid($id) {
        $query = $this->db->prepare("SELECT * FROM latihan WHERE id=?");
        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $nama_barang, $stok, $harga) {
        $query = $this->db->prepare("UPDATE latihan SET nama_barang = ?, stok = ?, harga = ? WHERE id = $id");
        $query->execute([$nama_barang, $stok, $harga]);
        header('location:index.php');
        
    }
}