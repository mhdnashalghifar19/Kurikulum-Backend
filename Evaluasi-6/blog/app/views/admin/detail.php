<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-10">
            <img src="<?= BASEURL; ?>/img/<?= $data['art']['gambar'] ?>" class="card-img-top img-fluid" alt="...">
            <div class="">
                <h5 class="card-title"><?= $data['art']['judul']; ?></h5>
                <p class="card-text"><?= $data['art']['isi']; ?></p>
            </div>
            <div class="">
                <li class="list-group-item">Rilis: <?= $data['art']['tanggal']; ?></li>
                <li class="list-group-item">Penulis: <?= $data['art']['penulis']; ?></li>
            </div>
            <div class="">
                <a href="https://www.malasngoding.com" class="btn btn-outline-dark float-right ml-2"><i class="fa fa-share-square-o"></i> Another link</a>
                <a href="<?= BASEURL; ?>/admin" class="btn btn-outline-dark float-right ml-2"><i class="fa fa-mail-reply-all"></i> Back</a>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
</body>
</html>