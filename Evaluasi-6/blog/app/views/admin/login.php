<?php

if (isset($_SESSION['login'])) {
    header('location: ' . BASEURL.'/admin');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login</h1>
    
    
<form action="<?= BASEURL; ?>/admin/logiclogin" method="post">
<label for="username">username : </label>
<input type="text" name="username" id="username">
<br><br>
<label for="password">password : </label>
<input type="password" name="password" id="password">
<br><br>
<button type="submit" name="submit">masuk</button>
</form>
<br>
<p>belum punya akun?<a href="<?= BASEURL; ?>/admin/register">Register</a></p>

</body>