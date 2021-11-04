<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        // menggunanakan query
        // $query = "SELECT * FROM mahasiswa";

        // menggunakan query builder
        /* 
        $querybuilder = $this->db->get('mahasiswa');
        return $querybuilder->result_array();
         */

        // menggunakan method chaining pada query builder
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        // inserting data berdasarkan CI query builder
        // bikin data berupa array, 
        // parameter kedua(true) untuk mengamankan query dari sql injection
        // $this->input->post('nama') sama artinya dengan $_POST['nama']
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        // inserting data berdasarkan CI query builder (2 parameter, pertama(nama table), kedua(data))
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}
