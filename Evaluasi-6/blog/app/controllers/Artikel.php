<?php

class Artikel extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar Artikel';
        $data['art'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Artikel';
        $data['art'] = $this->model('Artikel_model')->getArtikelById($id);
        $this->view('templates/header', $data);
        $this->view('artikel/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {

        if ($this->model('Artikel_model')->tambahDataArtikel($_POST) > 0 ) {
            FLasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            FLasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function hapus($id)
    {

        if ($this->model('Artikel_model')->hapusDataArtikel($id) > 0 ) {
            FLasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            FLasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Artikel_model')->getArtikelById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Artikel_model')->ubahDataArtikel($_POST) > 0 ) {
            FLasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            FLasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Artikel';
        $data['art'] = $this->model('Artikel_model')->cariDataArtikel();
        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }

}