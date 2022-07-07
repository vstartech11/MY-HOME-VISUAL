<?php

class Landing extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Landing Page';
        $this->load->view('template/header', $data);
        $this->load->view('landing/index');
        $this->load->view('template/footer');
    }
}
