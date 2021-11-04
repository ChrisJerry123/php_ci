<?php

class Mahasiswa extends CI_Controller
{
    // CONSTRUCT (LOAD MODEL UNTUK SEMUA METHOD DALAM CONTROLLER INI)
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    // METHOD DEFAULT
    public function index()
    {

        $data['judul'] = "Mahasiswa";

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    // METHOD TAMBAH
    public function tambah()
    {
        $data['judul'] = "Form Tambah Mahasiswa";

        //  parameter nya ada tiga(elemen mana yang mau di kasih rules (name-nya), nama alias, dan rulesnya apa)
        // set pesan errornya juga
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');



        // VALIDASI KASIH RULES DULU
        if ($this->form_validation->run() == FALSE) {
            // JIKA GAGAL, ARAHKAN KE HALAMAN tambah.php
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            // JIKA BERHASIL, ARAHKAN KE MODEL Mahaiswa_model, lalu redirect ke controller mahasiswa/index
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa/index');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
}
