<?php
class Kelompok_model extends CI_Model{

    public function get_kelompok()
    {
        return $this->db->get('kelompok');
    }

    public function insert_data($data)
    {
        return $this->db->insert('kelompok', $data);
    }
}