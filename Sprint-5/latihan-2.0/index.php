

<?php 

function rumusLingkaran($class)
{
    $file = "App/Lingkaran/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function rumusSegitiga($class)
{
    $file = "App/Segitiga/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("rumusLingkaran");
spl_autoload_register("rumusSegitiga");

if (isset($_POST['hitungLingkaran'])){
    $jari2 = $_POST['jari2'];
    $l = new Lingkaran($jari2);
    
} elseif (isset($_POST['hitungSegitiga'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $s = new Segitiga($alas, $tinggi);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bangun Datar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <h3 style="text-align:center">Hitung Luas Lingkaran</h3>
                <hr>
                <form action="" method="post">
                    <label for="jari2">Jari-Jari</label>
                    <input type="text" name="jari2" id="jari2" placeholder="Search">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="hitungLingkaran">Search</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <h3 style="text-align:center">Hitung Luas Segitiga</h3>
                <hr>
                <form action="" method="post">
                    <label for="alas">Alas</label>
                    <input type="text" name="alas" id="alas" placeholder="Search">
                    <label for="tinggi">Tinggi</label>
                    <input type="text" name="tinggi" id="tinggi" placeholder="Search">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="hitungSegitiga">Search</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

