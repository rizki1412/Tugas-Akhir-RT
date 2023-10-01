<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DKKuser extends CI_Controller
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
        $this->load->model('DKK_user');
    }

    public function index()
    {
        
        
        $getData = $this->DKK_user->get();

        $data = [
            'dkk' => $getData->result_array(),
        ];

        $data['judul'] = 'Data Detail Kartu Keluarga';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        
      
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dkkuser/index', $data);
            $this->load->view('templates/footer');
        } 
        
        
    }

}

