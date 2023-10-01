<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SKDuser extends CI_Controller
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
        $this->load->model('SKD_user');
    }

    public function index()
    {
        $getData = $this->SKD_user->get();

        $data = [
            'skd' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Surat Keterangan Domisili';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('skduser/index', $data);
            $this->load->view('templates/footer');
        } 
        
        
    }

   
}

