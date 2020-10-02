
<?php

class Koneksi {

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost; dbname=latihan1", 'user', 'password');
    }

    public function show() {
        $query = $this->db->prepare("SELECT * FROM Barang");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create($nama_barang, $harga, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang) {
        $query = $this->db->prepare("INSERT INTO Barang (nama_barang, harga, nama_kurir, nama_pengirim, asal_barang, tujuan_barang) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$nama_barang, $harga, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang]);

        return $this;
    }

}

$con = new Koneksi();

if (isset($_GET['submit'])) {
        $nama_barang = $_GET['nama_barang'];
        $harga = $_GET['harga'];
        $nama_kurir = $_GET['nama_kurir'];
        $nama_pengirim = $_GET['nama_pengirim'];
        $asal_barang = $_GET['asal_barang'];
        $tujuan_barang = $_GET['tujuan_barang'];

    $con->create($nama_barang, $harga, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <a href="latihan-1.php"><button>Kembali</button></a>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Nama Kurir</th>
                    <th>Nama Pengirim</th>
                    <th>Asal Barang</th>
                    <th>Tujuan Barang</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($con->show() as $data) :
            ?>
                <tr>
                    <td> <?= $data['nama_barang'] ?> </td>
                    <td>Rp. <?= number_format($data['harga']) ?> </td>
                    <td> <?= $data['nama_kurir'] ?> </td>
                    <td> <?= $data['nama_pengirim'] ?> </td>
                    <td> <?= $data['asal_barang'] ?> </td>
                    <td> <?= $data['tujuan_barang'] ?> </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>