<?php

class Auth extends CI_Controller
{
    public function index()
    {
    }

    public function login()
    {
        $data['title'] = 'Halaman Masuk';
        $this->load->view('template/header', $data);
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }
}
