<?php

if(isset($_POST['submit'])) {
    if ($_POST['username'] == 'Muhammad' && $_POST['password'] == '12345') {
        setcookie('user', $_POST['username'], time() + 3600, "/" );
        header('location:succes.php');
    } else {
        header('location:cookie.php?pesan=gagal');
    }
}

if (isset($_COOKIE['user'])) {
    header('location:succes.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <p class="text_login">Login</p>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username..." required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password..." required />

            <input type="submit" name="submit" value="Login">
        </form>

</body>
</html>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] =="gagal") {
        echo "<div class='alert'>Username atau Password salah !</div>";
    } else if ($_GET['pesan'] == "logout") {
        echo "<div class='alert'>Berhasil Logout !</div>";
    }
}
?>

