<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tambah Data</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <h1>Tambah Data</h1>
            <form action="proses_create.php" method="post">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang">
                    <label for="stok">Stock</label>
                    <input type="number" name="stok">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga">

                    <button type="submit" name="kirim" value="kirim" class="btn btn-primary">Kirim</button>
                </div>
        </form>
    </body>
</html>