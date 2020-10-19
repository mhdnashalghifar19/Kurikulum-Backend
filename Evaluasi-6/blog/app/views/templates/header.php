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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- <a class="navbar-brand" href="<?= BASEURL; ?>/home">Beranda</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= BASEURL; ?>/home">Beranda<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= BASEURL; ?>/artikel">Articles</a>
                <a class="nav-link" href="<?= BASEURL; ?>/about">About Me</a>
            </div>
        </div>
        <form class="form-inline my-2 my-lg-0" action="<?= BASEURL; ?>/artikel/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Artikel.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-light" type="submit" id="tombolCari"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
        </form>
    </div>
</nav>