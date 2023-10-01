<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KK extends CI_Controller
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
        $this->load->model('KK_model');
    }

    public function index()
    {
        
        
        $getData = $this->KK_model->get();

        $data = [
            'kk' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Kartu Keluarga';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('kk/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        //rule validasi
        $validation_rules = [
            [
                'field' => 'id_kk',
                'label' => 'Id KK',
                'rules' => 'required'
            ],
            [
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
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
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ]
            ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['datakk'] = $this->KK_model->getdata();
            $this->load->view('kk/add',$data);
            //sampe sini
        } else {

            //data kk
            $kk = [
                'id_kk' => $this->input->post('id_kk'),
                'no_kk' => $this->input->post('no_kk'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];

            $this->KK_model->insert($kk);
            redirect('kk');
            
        }
    }

    public function edit($id_kk = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $id_kk) {
            //jika tidak ada, maka alihkan ke halaman daftar penduduk
            redirect('kk');
        }
        //ambil data acara berdasarkan nim
        $data['kk'] =  $this->KK_model->get_by_id_kk($id_kk)->row_array();
        //load form edit
        $this->load->view('kk/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $id_kk = $this->input->post('id_kk');

            //rule validasi
            $validation_rules = [
            [
                'field' => 'id_kk',
                'label' => 'Id KK',
                'rules' => 'required'
            ],
            [
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
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
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('kk/edit/'. $id_kk);
            }

            $where['id_kk'] = $id_kk;

            //data stld
            $kk = [
                'id_kk' => $this->input->post('id_kk'),
                'no_kk' => $this->input->post('no_kk'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];

            //update data
            $this->KK_model->update($kk, $where);

            redirect('kk');
        } 
        
    }

    public function hapus($id_kk = '')
    {
        //cek apakah parameter id_kk ada
        if ('' == $id_kk) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->KK_model->delete($id_kk);
        redirect('kk');
    }
}

