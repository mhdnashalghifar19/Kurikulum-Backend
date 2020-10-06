<?php

require 'Koneksi.php';

$konek = new Koneksi();

if(isset($_POST['kirim'])) {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $id = $_POST['id'];
    
    $konek->update($id, $nama_barang, $stok, $harga);
}