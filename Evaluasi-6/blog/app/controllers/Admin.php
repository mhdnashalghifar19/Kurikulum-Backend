<?php

class Admin extends Controller {
    public function index()
    {
        $this->cek();
        $data['title'] = 'Admin';
        $data['art'] = $this->model('Admin_model')->getAllArtikel();
        $this->view('admin/index', $data);
    }

    public function detail($id)
    {
        $this->cek();
        $data['title'] = 'Detail Artikel';
        $data['art'] = $this->model('Admin_model')->getArtikelById($id);
        $this->view('admin/detail', $data);
    }

    public function tambah()
    {
        $this->cek();
        if ($this->model('Admin_model')->tambahDataArtikel($_POST) > 0 ) {
            FLasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            FLasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus($id)
    {
        $this->cek();
        if ($this->model('Admin_model')->hapusDataArtikel($id) > 0 ) {
            FLasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            FLasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function getubah()
    {
        $this->cek();
        echo json_encode($this->model('Admin_model')->getArtikelById($_POST['id']));
    }

    public function ubah()
    {
        $this->cek();
        if ($this->model('Admin_model')->ubahDataArtikel($_POST) > 0 ) {
            FLasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            FLasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function login()
    {
        $this->view('admin/login');
    }

    public function logiclogin()
    {
        if ($this->model('Admin_model')->getdataUser($_POST) > 0 ) {
            $_SESSION['login'] = true;
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            header('Location: ' . BASEURL . '/admin/login');
            exit;
        }
    }

    public function register()
    {
        $this->view('admin/register');
    }

    public function logicregister()
    {
        if ($this->model('Admin_model')->getregister($_POST) > 0) {
            header('location: ' . BASEURL.'/admin/login');
            exit;
        } else {
            header('location: ' . BASEURL . '/admin/register');
            exit;
        }
    }

    public function keluar(){
        session_unset();
        session_destroy();
        header('location: ' . BASEURL.'/admin/login');
        
    }

    public function cek()
    {
        if (!isset($_SESSION['login'])) {
            header('location: ' . BASEURL.'/admin/login');
        }
    }


}