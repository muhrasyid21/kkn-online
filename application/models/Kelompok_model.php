<?php
class Kelompok_model extends CI_Model {

    public function get_kelompok() {
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->join('mahasiswa', 'kelompok.nim_mahasiswa = mahasiswa.nim');
        return $this->db->get();
    }

    public function get_nim() {
        $this->db->select('nim');
        return $this->db->get('kelompok');
    }


    public function insert_data($data) {
        return $this->db->insert('kelompok', $data);
    }

}