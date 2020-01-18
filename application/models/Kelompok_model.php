<?php
class Kelompok_model extends CI_Model {

    public function get_by_kelompok($where) {
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->join('mahasiswa', 'kelompok.nim = mahasiswa.nim');
        $this->db->where('kelompok.nama', $where);
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