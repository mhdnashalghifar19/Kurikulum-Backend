<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
    
    <div class="container">
        <h1>    Register</h1> 
        <form action="<?= BASEURL.'/admin/logicregister'?>" method="post">
        <label for="username">username : </label>
        <input type="text" name="username" id="username">
    <br><br>
    <label for="password">password : </label>
    <input type="password" name="password" id="password">
    <br><br>
    <label for="password1">password : </label>
    <input type="password" name="password1" id="password1">
    <br><br>
    <button type="submit" name="daftar">daftar</button>
</form>
</div>
</body>
</html>