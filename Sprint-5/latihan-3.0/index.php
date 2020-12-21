<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Hitung\Lingkaran;
    use Hitung\Segitiga;



    $lingkaran = new Lingkaran;
    $segitiga = new Segitiga;
    


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operasi Hitung</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
    </head> 
    <body> 
        
        <div class="container"> 
            <div class="row align-items-center" style="height: 500px"> 
                <div class="col-sm-5 crad">
                    <div class="card-body">
                        <h3 style="text-align:center">Hitung Luas Segitiga</h3>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="alas">Alas</label>
                                <input type="text" class="form-control" name="alas" id="alas" placeholder="Alas">
                            </div>
                            <div class="form-group">
                                <label for="tinggi">Tinggi</label>
                                <input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="Tinggi">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark" name="hitungSegitiga" value="Search">
                            </div>
                            <?php
                                if(isset($_POST['hitungSegitiga'])){
                                    $alas = $_POST['alas'];
                                    $tinggi = $_POST['tinggi'];
                                    $hasil = $segitiga->luasSegitiga($alas, $tinggi);

                                    echo "<input type='text' class='form-control' value='$hasil'>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="col-sm-5 card"> 
                    <div class="card-body"> 
                        <h3 style="text-align:center">Hitung Luas Lingkaran</h3> 
                        <form action="" method="post"> 
                            <div class="form-group"> 
                                <label for="jari2">Jari-Jari</label> 
                                <input type="text" class="form-control" name="jari2" id="jari2" placeholder="Jari-Jari"> 
                            </div> 
                            <div class="form-group"> 
                                <input type="submit" class="btn btn-dark" name="hitungLingkaran" value="Search"> 
                            </div> 
                            <?php
                                if(isset($_POST['hitungLingkaran'])){
                                    $jari2 = $_POST['jari2'];
                                    $hasil = $lingkaran->luasLingkaran($jari2);

                                    echo "<input type='text' class='form-control' value='$hasil'>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https:code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https:cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
    </html>

