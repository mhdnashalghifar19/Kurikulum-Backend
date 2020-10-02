<?php

require 'Koneksi.php';

$konek = new Koneksi();

?>

<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <h1>Update</h1>
        <?php
            foreach ($konek->getid() as $data) {
        ?>
        <form action="" method="post">
            <label for=""></label>
            <input type="text">
            <label for=""></label>
            <input type="text">
            <label for=""></label>
            <input type="text">
            <label for=""></label>
            <input type="text">

            <input type="submit" name="update" value="update">
        </form>
        <?php 
            }
        ?>
    </body>
</html>