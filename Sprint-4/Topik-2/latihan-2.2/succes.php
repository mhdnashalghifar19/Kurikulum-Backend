<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('location:session.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil</title>
</head>
<body>
    <p>Berhasil Login, <strong><?= $_SESSION['username'] ?></strong></p>
    <form action="" method="get">
        <button class="login_button" type="submit" name="logout">Logout</button>
    </form>
</body>
</html>


<?php

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('location:session.php?pesan=logout');
}