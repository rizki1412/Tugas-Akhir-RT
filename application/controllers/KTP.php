<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KTP extends CI_Controller
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
        $this->load->model('KTP_model');
    }

    public function index()
    {
        $getData = $this->KTP_model->get();

        $data = [
            'ktp' => $getData->result_array(),
        ];

        $data['judul'] = 'Data KTP';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('ktp/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        
        //rule validasi
        $validation_rules = [
            [
                'field' => 'nik',
                'label' => 'Nik',
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
                'field' => 'alamat',
                'label' => 'Alamat',
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
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'kewarganegaraan',
                'label' => 'Kewarganegaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'berlaku_hingga',
                'label' => 'Berlaku Hingga',
                'rules' => 'required'
            ]
        ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('ktp/add');
        } else {

            //data ktp
            $ktp = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'berlaku_hingga' => $this->input->post('berlaku_hingga'),
            ];

            $this->KTP_model->insert($ktp);
            redirect('ktp');
            
        }
    }

    public function edit($nik = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $nik) {
            //jika tidak ada, maka alihkan ke halaman daftar ktp
            redirect('ktp');
        }
        //ambil data ktp berdasarkan nim
        $data['ktp'] =  $this->KTP_model->get_by_nik($nik)->row_array();
        //load form edit
        $this->load->view('ktp/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $nik = $this->input->post('nik');

            //rule validasi
             $validation_rules = [
            [
                'field' => 'nik',
                'label' => 'Nik',
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
                'field' => 'alamat',
                'label' => 'Alamat',
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
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'kewarganegaraan',
                'label' => 'Kewarganegaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'berlaku_hingga',
                'label' => 'Berlaku Hingga',
                'rules' => 'required'
            ]
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('ktp/edit/'. $nik);
            }

            $where['nik'] = $nik;

            //data ktp
            $ktp = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'berlaku_hingga' => $this->input->post('berlaku_hingga'),
            ];

            //update data
            $this->KTP_model->update($ktp, $where);

            redirect('ktp');
        } 
        
    }

    public function hapus($nik = '')
    {
        //cek apakah parameter NIK ada
        if ('' == $nik) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->KTP_model->delete($nik);
        redirect('ktp');
    }
}

