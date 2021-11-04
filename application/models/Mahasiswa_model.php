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

    public function getMahasiswaById($id)
    {
        // MENGGUNAKAN CI QUERY BUILDER (sama seperti function hapus, tetapi lebih singkat penulisannya)
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
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
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
