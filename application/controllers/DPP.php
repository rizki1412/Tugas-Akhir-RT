<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DPP extends CI_Controller
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
        $this->load->model('DPP_model');
    }

    public function index()
    {
        $getData = $this->DPP_model->get();

        $data = [
            'dpp' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Detail Pernyataan Pernikahan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('dpp/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        
        //rule validasi
        $validation_rules = [
            [
                'field' => 'kd_pernikahan',
                'label' => 'KD Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'id_pernikahan',
                'label' => 'Id Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_calon',
                'label' => 'Nama Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir_calon',
                'label' => 'Tempat Lahir Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir_calon',
                'label' => 'Tanggal Lahir Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],[
                'field' => 'agama_calon',
                'label' => 'Agama Calon',
                'rules' => 'required'
            ],[
                'field' => 'jenis_kelamin_calon',
                'label' => 'Jenis Kelamin Calon',
                'rules' => 'required'
            ],[
                'field' => 'status_perkawinan_calon',
                'label' => 'Status Perkawinan Calon',
                'rules' => 'required'
            ],[
                'field' => 'alamat_calon',
                'label' => 'Alamat Calon',
                'rules' => 'required'
            ],
        ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['datadpp'] = $this->DPP_model->getdata();
            $this->load->view('dpp/add',$data);
            //sampe sini
        } else {

            //data dpp
            $dpp = [
                'kd_pernikahan' => $this->input->post('kd_pernikahan'),
                'id_pernikahan' => $this->input->post('id_pernikahan'),
                'nama_calon' => $this->input->post('nama_calon'),
                'tempat_lahir_calon' => $this->input->post('tempat_lahir_calon'),
                'tanggal_lahir_calon' => $this->input->post('tanggal_lahir_calon'),
                'nik' => $this->input->post('nik'),
                'agama_calon' => $this->input->post('agama_calon'),
                'jenis_kelamin_calon' => $this->input->post('jenis_kelamin_calon'),
                'status_perkawinan_calon' => $this->input->post('status_perkawinan_calon'),
                'alamat_calon' => $this->input->post('alamat_calon'),
            ];

            $this->DPP_model->insert($dpp);
            redirect('dpp');
            
        }
    }

    public function edit($kd_pernikahan = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $kd_pernikahan) {
            //jika tidak ada, maka alihkan ke halaman daftar ktp
            redirect('dpp');
        }
        //ambil data dpp berdasarkan nim
        $data['dpp'] =  $this->DPP_model->get_by_kd_pernikahan($kd_pernikahan)->row_array();
        //load form edit
        $this->load->view('dpp/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $kd_pernikahan = $this->input->post('kd_pernikahan');

            //rule validasi
             $validation_rules = [
            [
                'field' => 'kd_pernikahan',
                'label' => 'KD Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'id_pernikahan',
                'label' => 'Id Pernikahan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_calon',
                'label' => 'Nama Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir_calon',
                'label' => 'Tempat Lahir Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir_calon',
                'label' => 'Tanggal Lahir Calon',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],[
                'field' => 'agama_calon',
                'label' => 'Agama Calon',
                'rules' => 'required'
            ],[
                'field' => 'jenis_kelamin_calon',
                'label' => 'Jenis Kelamin Calon',
                'rules' => 'required'
            ],[
                'field' => 'status_perkawinan_calon',
                'label' => 'Status Perkawinan Calon',
                'rules' => 'required'
            ],[
                'field' => 'alamat_calon',
                'label' => 'Alamat Calon',
                'rules' => 'required'
            ],
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('dpp/edit/'. $kd_pernikahan);
            }

            $where['kd_pernikahan'] = $kd_pernikahan;

            //data dpp
            $dpp = [
                'kd_pernikahan' => $this->input->post('kd_pernikahan'),
                'id_pernikahan' => $this->input->post('id_pernikahan'),
                'nama_calon' => $this->input->post('nama_calon'),
                'tempat_lahir_calon' => $this->input->post('tempat_lahir_calon'),
                'tanggal_lahir_calon' => $this->input->post('tanggal_lahir_calon'),
                'nik' => $this->input->post('nik'),
                'agama_calon' => $this->input->post('agama_calon'),
                'jenis_kelamin_calon' => $this->input->post('jenis_kelamin_calon'),
                'status_perkawinan_calon' => $this->input->post('status_perkawinan_calon'),
                'alamat_calon' => $this->input->post('alamat_calon'),
            ];

            //update data
            $this->DPP_model->update($dpp, $where);

            redirect('dpp');
        } 
        
    }

    public function hapus($kd_pernikahan = '')
    {
        //cek apakah parameter kd_pernikahan ada
        if ('' == $kd_pernikahan) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->DPP_model->delete($kd_pernikahan);
        redirect('dpp');
    }
}

