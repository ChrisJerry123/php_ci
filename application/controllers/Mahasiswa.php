<?php

class Mahasiswa extends CI_Controller
{
    // CONSTRUCT DEFAULT
    public function index()
    {
        $this->load->database();
        $data['judul'] = "Mahasiswa";

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }
}
