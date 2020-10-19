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
        <!-- <a class="navbar-brand" href="<?= BASEURL; ?>/home">MY BLOG</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-link active" href="<?= BASEURL; ?>/home/admin">Beranda<span class="sr-only">(current)</span></a> -->
                <!-- <a class="nav-link" href="<?= BASEURL; ?>/admin">Articles</a> -->
                <!-- <a class="nav-link" href="<?= BASEURL; ?>/about">About Me</a> -->
            </div>
        </div>
        <form class="form-inline my-2 my-lg-0" action="<?= BASEURL; ?>/Admin/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Artikel.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-light" type="submit" id="tombolCari"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
        </form>
                    <a href="<?= BASEURL; ?>/admin/keluar"><button class="btn btn-outline-light ml-4"><i class="fa fa-power-off"></i> Log out</button></a>
    </div>
</nav>

<div class="container" mt-4>

<div class="row">
    <div class="col-md-12">
        <h2>Daftar Artikel</h2>
    </div>
</div>
    <table class="table table-bordered">
    <thead class="text-center">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Artikel</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Penulis</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    </tbody class="text-center">
        <div class="list-group">
            <?php foreach( $data['art'] as $key => $art ) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $art['judul']; ?></td>
                        <td><?= $art['tanggal']; ?></td>
                        <td><?= $art['penulis']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/admin/hapus/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3" onclick="return confirm('Anda Yakin?')"><i class="fa fa-trash"></i> hapus</a>
                            <a href="<?= BASEURL; ?>/artikel/ubah/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $art['id']; ?>"><i class="fa fa-pencil-square"></i> ubah</a>
                            <a href="<?= BASEURL; ?>/admin/detail/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3"><i class="fa fa-share-square"></i> detail</a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </div>
    </tbody>
</div>
</div>

    <div class="row">
        <div class="col-lg-6">
        <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-outline-dark tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Artikel
        </button>
        </div>
    </div> 

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/admin/tambah" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="hidden" name="gambarlama" id="gambarlama">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>

                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal"><i class="fa fa-reply-all"></i> Keluar</button>
                <button type="submit" class="btn btn-outline-dark">Tambah Data</button>
                </form>
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