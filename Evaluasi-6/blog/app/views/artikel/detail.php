<div class="container mt-5">

    <div class="row">
        <div class="col-md-10">
            <img src="<?= BASEURL; ?>/img/<?= $data['art']['gambar'] ?>" class="card-img-top img-fluid" alt="...">
            <div class="">
                <h5 class="card-title"><?= $data['art']['judul']; ?></h5>
                <p class="card-text"><?= $data['art']['isi']; ?></p>
            </div>
            <div class="">
                <li class="list-group-item">Rilis; <?= $data['art']['tanggal']; ?></li>
                <li class="list-group-item">Written By; <?= $data['art']['penulis']; ?></li>
            </div>
            <div class="">
                <a href="https://www.malasngoding.com" class="btn btn-outline-dark float-right ml-2"><i class="fa fa-share-square-o"></i> Another link</a>
                <a href="<?= BASEURL; ?>/artikel" class="btn btn-outline-dark float-right ml-2"><i class="fa fa-mail-reply-all"></i> Back</a>
            </div>
        </div>
    </div>

</div>
