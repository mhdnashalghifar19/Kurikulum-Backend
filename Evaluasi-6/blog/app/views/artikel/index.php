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
                                        <!-- <a href="<?= BASEURL; ?>/artikel/hapus/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3" onclick="return confirm('Anda Yakin?')"><i class="fa fa-trash"></i> hapus</a> -->
                                        <!-- <a href="<?= BASEURL; ?>/artikel/ubah/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $art['id']; ?>"><i class="fa fa-pencil-square"></i> ubah</a> -->
                                        <a href="<?= BASEURL; ?>/artikel/detail/<?= $art['id']; ?>" class="btn btn-outline-dark float-right ml-3"><i class="fa fa-share-square"></i> detail</a>
                                    </td>
                                </tr>
                        <?php endforeach ?>
                    </div>
                </tbody>
            </div>
        </div>

    <!-- <div class="row">
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
    
</div> -->


<!-- Modal -->
<!-- <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <form action="<?= BASEURL; ?>/artikel/tambah" method="post" enctype="multipart/form-data"> 
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
</div> -->