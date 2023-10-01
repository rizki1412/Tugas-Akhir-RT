<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SKD extends CI_Controller
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
        $this->load->model('SKD_model');
    }

    public function index()
    {
        
        
        $getData = $this->SKD_model->get();

        $data = [
            'skd' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Surat Keterangan Domisili';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesadmin/header', $data);
            $this->load->view('templatesadmin/sidebar', $data);
            $this->load->view('templatesadmin/topbar', $data);
            $this->load->view('skd/index', $data);
            $this->load->view('templatesadmin/footer');
        } 
        
        
    }

    public function create()
    {
        //rule validasi
        $validation_rules = [
            [
                'field' => 'no_skd',
                'label' => 'No Skd',
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
                'field' => 'id_kk',
                'label' => 'Id KK',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_sekarang',
                'label' => 'Alamat Sekarang',
                'rules' => 'required'
            ],
            ];

        //set rule validasi
        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            //ini buat ngasih get data supaya bisa dropdown
            $data['dataskd'] = $this->SKD_model->getdata();
            $this->load->view('skd/add',$data);
            //sampe sini
        } else {

            //data skd
            $skd = [
                'no_skd' => $this->input->post('no_skd'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'id_kk' => $this->input->post('id_kk'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_sekarang' => $this->input->post('alamat_sekarang')
            ];

            $this->SKD_model->insert($skd);
            redirect('skd');
            
        }
    }

    public function edit($no_skd = '')
    {
        //Cek apakah ada parameter $nim
        if ('' == $no_skd) {
            //jika tidak ada, maka alihkan ke halaman daftar penduduk
            redirect('skd');
        }
        //ambil data acara berdasarkan nim
        $data['skd'] =  $this->SKD_model->get_by_no_skd($no_skd)->row_array();
        //load form edit
        $this->load->view('skd/edit', $data);
    }

    public function update()
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {
            $no_skd = $this->input->post('no_skd');

            //rule validasi
            $validation_rules = [
            [
                'field' => 'no_skd',
                'label' => 'No Skd',
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
                'field' => 'id_kk',
                'label' => 'Id KK',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_sekarang',
                'label' => 'Alamat Sekarang',
                'rules' => 'required'
            ],
            ];

            //set rule validasi
            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() === false) {
                redirect('skd/edit/'. $no_skd);
            }

            $where['no_skd'] = $no_skd;

            //data skd
            $skd = [
                'no_skd' => $this->input->post('no_skd'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'id_kk' => $this->input->post('id_kk'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_sekarang' => $this->input->post('alamat_sekarang')
            ];

            //update data
            $this->SKD_model->update($skd, $where);

            redirect('skd');
        } 
        
    }

    public function hapus($skd = '')
    {
        //cek apakah parameter skd ada
        if ('' == $skd) {
            //jika tidak, tampilkan error
            return show_404();
        }
        //hapus data
        $this->SKD_model->delete($skd); 
        redirect('skd');
    }
}

