<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DKK extends CI_Controller
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
        $this->load->model('DKK_model');
    }

    public function index()
    {
        
        
        $getData = $this->DKK_model->get();

        $data = [
            'dkk' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Detail Kartu Keluarga';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('dkk/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        //rule validasi
        $validation_rules = [
            [
                'field' => 'kode_kk',
                'label' => 'Kode kk',
                'rules' => 'required'
            ],
            [
                'field' => 'id_kk',
                'label' => 'Id Kk',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
                'rules' => 'required'
            ],
            [
                'field' => 'status_hubungan_dalam_keluarga',
                'label' => 'Status Hubungan Dalam Keluarga',
                'rules' => 'required'
            ],
            [
                'field' => 'kewarganegaraan',
                'label' => 'Kewarganegaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'ayah',
                'label' => 'Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'ibu',
                'label' => 'Ibu',
                'rules' => 'required'
            ],
            ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['datadkk'] = $this->DKK_model->getdata();
            $this->load->view('dkk/add',$data);
            //sampe sini
        } else {

            //data dkk
            $dkk = [
                'kode_kk' => $this->input->post('kode_kk'),
                'id_kk' => $this->input->post('id_kk'),
                'nama' => $this->input->post('nama'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'status_hubungan_dalam_keluarga' => $this->input->post('status_hubungan_dalam_keluarga'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'ayah' => $this->input->post('ayah'),
                'ibu' => $this->input->post('ibu')
            ];

            $this->DKK_model->insert($dkk);
            redirect('dkk');
            
        }
    }

    public function edit($kode_kk = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $kode_kk) {
            //jika tidak ada, maka alihkan ke halaman daftar penduduk
            redirect('dkk');
        }
        //ambil data acara berdasarkan nim
        $data['dkk'] =  $this->DKK_model->get_by_kode_kk($kode_kk)->row_array();
        //load form edit
        $this->load->view('dkk/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $kode_kk = $this->input->post('kode_kk');

            //rule validasi
            $validation_rules = [
            [
                'field' => 'kode_kk',
                'label' => 'Kode kk',
                'rules' => 'required'
            ],
            [
                'field' => 'id_kk',
                'label' => 'Id Kk',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
                'rules' => 'required'
            ],
            [
                'field' => 'status_hubungan_dalam_keluarga',
                'label' => 'Status Hubungan Dalam Keluarga',
                'rules' => 'required'
            ],
            [
                'field' => 'kewarganegaraan',
                'label' => 'Kewarganegaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'ayah',
                'label' => 'Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'ibu',
                'label' => 'Ibu',
                'rules' => 'required'
            ],
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('dkk/edit/'. $kode_kk);
            }

            $where['kode_kk'] = $kode_kk;

            //data stld
            $dkk = [
                'kode_kk' => $this->input->post('kode_kk'),
                'id_kk' => $this->input->post('id_kk'),
                'nama' => $this->input->post('nama'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'status_hubungan_dalam_keluarga' => $this->input->post('status_hubungan_dalam_keluarga'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'ayah' => $this->input->post('ayah'),
                'ibu' => $this->input->post('ibu')
            ];

            //update data
            $this->DKK_model->update($dkk, $where);

            redirect('dkk');
        } 
        
    }

    public function hapus($dkk = '')
    {
        //cek apakah parameter dkk ada
        if ('' == $dkk) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->DKK_model->delete($dkk);
        redirect('dkk');
    }
}

