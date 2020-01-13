<?php

class User extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('mahasiswa_model');
        }

        public function index() 
        {
            $data['judul'] = 'Halaman Home';
            $this->load->view('templates/user_header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        }

    public function registrasi()
    {
        $data['judul'] = 'Halaman Registrasi';
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamatwali', 'Alamat Wali', 'required');
        $this->form_validation->set_rules('teleponwali', 'Telepon Wali', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('user/registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'telepon' => $this->input->post('telepon'),
                'alamat_wali' => $this->input->post('alamatwali'),
                'telepon_wali' => $this->input->post('teleponwali'),
            );

            $result = $this->mahasiswa_model->insert_data($data);

            if ($result > 0) {
                $this->session->set_flashdata("success", "Berhasil menambahkan data mahasiswa!");
                redirect('user/registrasi');
            }
        }
    }
    
    public function daftar_kelompok()
    {
        $data['judul'] = 'Daftar Kelompok';
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/daftar_kelompok');
        $this->load->view('templates/footer');
    }
}
