<?php

require 'Koneksi.php';

$konek = new Koneksi();

if(isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $divisi = $_POST['divisi'];

    $konek->create($nama, $asal, $divisi);
}