<?php

class Home extends Controller {
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header('location: ' . BASEURL.'/artikel');
        }
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}