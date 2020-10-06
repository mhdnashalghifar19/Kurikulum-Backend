<?php
require 'Koneksi.php';

$konek = new Koneksi();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Latihan CRUD</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary d-flex justify-content-center mb-4">
            <h2 class="text-center text-white">Data Barang</h2>
        </nav>
            <div class="container mb-5">
                <div class="">
                    <table border = "1" cellpadding="10" cellspacing="0" class="table">
                        <thead class="thead-navbar navbar-dark bg-primary">  
                            <tr>
                                <th class="text-center text-white" scope="col">ID</th>
                                <th class="text-center text-white" scope="col">Nama Barang</th>
                                <th class="text-center text-white" scope="col">Stok</th>
                                <th class="text-center text-white" scope="col">Harga</th>
                                <th class="text-center text-white" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php foreach($konek->read() as $key => $data) : ?>
                        <thead class="thead-light">
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td><?= $data['stok'] ?></td>
                                <td>Rp.<?= number_format ($data['harga']) ?></td>
                                <td>
                                    <a href="view_update.php?id=<?= $data['id']?>" class="btn btn-secondary">Edit</a>
                                    <a href="delete.php?id=<?= $data['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </thead>
                        <?php endforeach;?>
                    </table>
                </div>

                <br>
                <a href="view_create.php" class="btn btn-primary">Tambah</a>
                <br>
                <br>

                <nav class="navbar navbar-dark bg-primary d-flex justify-content-center p-4">
                    <p class="text-center text-white">&copy; 2020, Mr.Balck</p>
                </nav>

        </body>
</html>

