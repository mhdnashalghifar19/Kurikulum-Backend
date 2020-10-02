<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <form action="" method="post" id="form">
        <h2>Barang</h2>
        <table border ="1" cellpadding="10" cellspacing="0">
            <tr>
                <td><label for="nama_barang">Nama barang</label></td>
                <td><input type="nama_barang" name="nama_barang" id="nama_barang"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td><input type="number" name="harga" id="harga"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="simpan" value="Simpan" <?php echo isset($_POST["submit"]) ? "disabled" : "";?>></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        echo "<script>document.getElementById('form').style.display = 'none';</script>";
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        echo "<p>Tersimpan</p>";
    ?>
    <form action="action.php" method="get">
        <input type="hidden" name="nama_barang" value="<?php echo $nama_barang ?>">
        <input type="hidden" name="harga" value="<?php echo $harga ?>">
        <h2>Pengiriman</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>
                    <label for="nama_kurir">Nama Kurir</label>
                </td>
                <td>
                    <input type="text" name="nama_kurir" id="nama_kurir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_pengirim">Nama Pengirim</label>
                </td>
                <td>
                    <input type="text" name="nama_pengirim" id="nama_pengirim">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="asal_barang">Asal Barang</label>
                </td>
                <td>
                    <input type="text" name="asal_barang" id="asal_barang">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tujuan_barang">Tujuan Barang</label>
                </td>
                <td>
                    <input type="text" name="tujuan_barang" id="tujuan_barang">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" name="submit" id="submit" value="Kirim">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>