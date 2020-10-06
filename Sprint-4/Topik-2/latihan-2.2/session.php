<?php
session_start();
if (isset($_SESSION['username'])) {
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
    <div class="box">
        <p class="text_login">Login</p>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=="gagal") {
                echo "<div class='alert'>Username Anda Salah !</div>";
            }
        }
        ?>

        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username..." required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password..." required />
    
            <input type="submit" name="submit" class="login_button" value="Login">
        </form>
        <?php

        if (isset($_POST['submit'])) {
            if ($_POST['username'] == 'Muhammad' && $_POST['password'] == '12345') {
                $_SESSION['username'] = $_POST['username'];
                header('location:succes.php');
            } else {
                header('location:session.php?pesan=gagal');
            }
        }

        ?>
    </div>
</body>
</html>