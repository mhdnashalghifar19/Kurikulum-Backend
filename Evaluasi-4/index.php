<?php
require 'Koneksi.php';

$konek = new Koneksi();

?>

<html>
    <head>
        <title>Data Santri</title>
    </head>
    <body>
        <table border = "1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Asal</th>
                <th>Divisi</th>
                <th>Aksi</th>
            </tr>
            <?php
                $i=1;
                foreach ($konek->read() as $data) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['asal'] ?></td>
                <td><?= $data['divisi'] ?></td>
                <td>
                    <a href="view_update.php?id=<?= $data['id']?>">Edit</a>
                    <a href="delete.php?id=<?= $data['id']?>">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="view_create.php">Tambah</a>
    </body>
</html>