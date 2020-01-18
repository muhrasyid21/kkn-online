<?php
class Mahasiswa_model extends CI_Model {

    public function insert_data($data) {
        return $this->db->insert('mahasiswa', $data);
    }

    public function get_nim_mahasiswa() {
        $this->db->select('nim');
        return $this->db->get('mahasiswa');
    }

    public function delete($where) {
        $this->db->where($where);
        $this->db->delete('mahasiswa');
    }
}