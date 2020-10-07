<?php

if (!isset($_COOKIE['user'])) {
    header('location:cookie.php');
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
    
    <p>Berhasil Login, <strong><?= $_COOKIE['user'] ?></strong></p>

        <form action="" method="get">
            <button type="submit" name="logout">Logout</button>
        </form>

</body>
</html>

<?php
if (isset($_GET['logout'])) {
    unset($_COOKIE['user']);
    setcookie('user', null, -1, '/');
    header('location:cookie.php?pesan=logout');
}
?>