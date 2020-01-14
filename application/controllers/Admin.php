<?php

class Admin extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
            $this->load->model('mahasiswa_model');
            $this->load->model('admin_model');
            $this->load->model('kelompok_model');
        }
        
    public function index() 
    {
        if ($this->session->userdata('admin_data') != null) {
            $data['judul'] = 'Halaman Home';
            $data['admin'] = $this->session->userdata('admin_data');
            $this->load->view('templates/admin_header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('admin_data') != null) {
            $data['judul'] = 'Halaman Registrasi';
            $data['admin'] = $this->session->userdata('admin_data');
    
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('telepon', 'Telepon', 'required');
            $this->form_validation->set_rules('alamatwali', 'Alamat Wali', 'required');
            $this->form_validation->set_rules('teleponwali', 'Telepon Wali', 'required');
    
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/registrasi');
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
                    redirect('admin/registrasi');
                }
            }
        } else {
            redirect('user');
        }
    }

    public function login()
    {
        $data['judul'] = 'Login';
        $data['admin'] = $this->session->userdata('admin_data');        

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('admin/login');
            $this->load->view('templates/footer');
        } else {
            $username = $this->input->post('username');
            $userpass = $this->input->post('password');

            $data = array(
                'username' => $username
            );
            $checkuser = $this->admin_model->get_user_by_username($data);
            if ($checkuser->num_rows() == 1) {
                $hash = $checkuser->row('password');
                if (password_verify($userpass, $hash)) {
                    $result = $checkuser->row();
                    $userdata = array(
                        'id' => $result->id,
                        'username' => $result->username,
                    );
                    $this->session->set_userdata('admin_data', $userdata);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata("wrong", "Wrong password, please try again.");
                    $this->load->view('templates/user_header', $data);
                    $this->load->view('admin/login');
                    $this->load->view('templates/footer');
                }
            } else {
                $this->session->set_flashdata("not_exist", "Account is not existed.");
                $this->load->view('templates/user_header', $data);
                $this->load->view('admin/login');
                $this->load->view('templates/footer');
            }
        }
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect('user');
    }

    public function daftar_kelompok()
    {
        if ($this->session->userdata('admin_data') != null) {
            $data['judul'] = 'Daftar Kelompok';
            $data['admin'] = $this->session->userdata('admin_data');

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/daftar_kelompok');
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function data_relasi()
    {
        if ($this->session->userdata('admin_data') != null) {
            $data['judul'] = 'Data Relasi';
            $data['admin'] = $this->session->userdata('admin_data');
            $data['data_mahasiswa'] = $this->mahasiswa_model->get_nim_mahasiswa()->result();
            
            $this->form_validation->set_rules('kelompok', 'Nama kelompok', 'required');
            $this->form_validation->set_rules('nim_mahasiswa[]', 'NIM Mahasiswa', 'required');
    
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/data_relasi');
                $this->load->view('templates/footer');
            } else {
                $kelompok = $this->input->post('kelompok');
                $penempatan = '';

                if ($kelompok == 'Kelompok 1') {
                    $penempatan = 'Malang';
                }
                if ($kelompok == 'Kelompok 2') {
                    $penempatan = 'Banyuwangi';
                }
                if ($kelompok == 'Kelompok 3') {
                    $penempatan = 'Solo';
                }
                if ($kelompok == 'Kelompok 4') {
                    $penempatan = 'Karanganyar';
                }
                if ($kelompok == 'Kelompok 5') {
                    $penempatan = 'Jepara';
                }
                
                $checkbox = $this->input->post('nim_mahasiswa');
                
                for ($i = 0; $i < sizeof($checkbox); $i++) {
                    $data = array(
                        'nim' => $checkbox[$i],
                        'nama' => $kelompok,
                        'penempatan' => $penempatan
                    );

                    $result = $this->kelompok_model->insert_data($data);
                }

                if ($result > 0) {
                    $this->session->set_flashdata("success", "Berhasil menambahkan data relasi mahasiswa!");
                    redirect('admin/data_relasi');
                }
            }
        } else {
            redirect('user');
        }
    }
}
