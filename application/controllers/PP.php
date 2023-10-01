<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PP extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load helper
        $this->load->helper('url');
        $this->load->helper('form');
        //load library  
        $this->load->library('form_validation');
        //load model 
        $this->load->model('PP_model');
    }

    public function index()
    {
        $getData = $this->PP_model->get();

        $data = [
            'pp' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Pernyataan Pernikahan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('pp/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        
        //rule validasi
        $validation_rules = [
            [
                'field' => 'id_pernikahan',
                'label' => 'Id Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],[
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ],[
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],[
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
                'rules' => 'required'
            ],[
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
        ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['datapp'] = $this->PP_model->getdata();
            $this->load->view('pp/add',$data);
            //sampe sini
        } else {

            //data pp
            $pp = [
                'id_pernikahan' => $this->input->post('id_pernikahan'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nik' => $this->input->post('nik'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'alamat' => $this->input->post('alamat'),
            ];

            $this->PP_model->insert($pp);
            redirect('pp');
            
        }
    }

    public function edit($id_pernikahan = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $id_pernikahan) {
            //jika tidak ada, maka alihkan ke halaman daftar ktp
            redirect('pp');
        }
        //ambil data pp berdasarkan nim
        $data['pp'] =  $this->PP_model->get_by_id_pernikahan($id_pernikahan)->row_array();
        //load form edit
        $this->load->view('pp/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $id_pernikahan = $this->input->post('id_pernikahan');

            //rule validasi
             $validation_rules = [
            [
                'field' => 'id_pernikahan',
                'label' => 'Id Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],[
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ],[
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],[
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
                'rules' => 'required'
            ],[
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('pp/edit/'. $id_pernikahan);
            }

            $where['id_pernikahan'] = $id_pernikahan;

            //data pp
            $pp = [
                'id_pernikahan' => $this->input->post('id_pernikahan'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nik' => $this->input->post('nik'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'alamat' => $this->input->post('alamat'),
            ];

            //update data
            $this->PP_model->update($pp, $where);

            redirect('pp');
        } 
        
    }

    public function hapus($id_pernikahan = '')
    {
        //cek apakah parameter id_pernikahan ada
        if ('' == $id_pernikahan) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->PP_model->delete($id_pernikahan);
        redirect('pp');
    }
}

