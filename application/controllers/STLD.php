<?php
defined('BASEPATH') or exit('No direct script access allowed');
class STLD extends CI_Controller
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
        $this->load->model('STLD_model');
    }

    public function index()
    {
        
        
        $getData = $this->STLD_model->get();

        $data = [
            'stld' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Surat Tanda Lapor Diri';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('stld/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        //rule validasi
        $validation_rules = [
            [
                'field' => 'no_stld',
                'label' => 'No STLD',
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
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
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
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'laporan',
                'label' => 'Laporan',
                'rules' => 'required'
            ]
            ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['datastld'] = $this->STLD_model->getdata();
            $this->load->view('stld/add',$data);
            //sampe sini
        } else {

            //data stld
            $stld = [
                'no_stld' => $this->input->post('no_stld'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nik' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'laporan' => $this->input->post('laporan')
            ];

            $this->STLD_model->insert($stld);
            redirect('stld');
            
        }
    }

    public function edit($no_stld = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $no_stld) {
            //jika tidak ada, maka alihkan ke halaman daftar penduduk
            redirect('stld');
        }
        //ambil data acara berdasarkan nim
        $data['stld'] =  $this->STLD_model->get_by_no_stld($no_stld)->row_array();
        //load form edit
        $this->load->view('stld/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $no_stld = $this->input->post('no_stld');

            //rule validasi
            $validation_rules = [
            [
                'field' => 'no_stld',
                'label' => 'No STLD',
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
                'field' => 'status_perkawinan',
                'label' => 'Status Perkawinan',
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
            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'laporan',
                'label' => 'Laporan',
                'rules' => 'required'
            ]
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('stld/edit/'. $no_stld);
            }

            $where['no_stld'] = $no_stld;

            //data stld
            $stld = [
                'no_stld' => $this->input->post('no_stld'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nik' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'laporan' => $this->input->post('laporan'),
            ];

            //update data
            $this->STLD_model->update($stld, $where);

            redirect('stld');
        } 
        
    }

    public function hapus($no_stld = '')
    {
        //cek apakah parameter no_stld ada
        if ('' == $no_stld) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->STLD_model->delete($no_stld);
        redirect('stld');
    }
}

