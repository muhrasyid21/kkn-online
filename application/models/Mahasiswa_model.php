<?php
class Mahasiswa_model extends CI_Model{

    public function insert_data($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function get_nim() {
        $this->db->select('nim');
        return $this->db->get('mahasiswa');
    }

}