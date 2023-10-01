<?php
defined('BASEPATH') or exit('No direct script access allowed');
class STLDuser extends CI_Controller
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
        $this->load->model('STLD_user');
    }

    public function index()
    {
        
        
        $getData = $this->STLD_user->get();

        $data = [
            'stld' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Surat Tanda Lapor Diri';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('stlduser/index', $data);
            $this->load->view('templates/footer');
        } 
        
        
    }

    
}

