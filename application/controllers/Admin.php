<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function index()
    {   //mengambil data user dari session
        $data['judul'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
     
        $this->load->view('templatesadmin/header', $data);//$data buat ngirim data di atas ke index di user
        $this->load->view('templatesadmin/sidebar', $data);
        $this->load->view('templatesadmin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templatesadmin/footer');
    }
    public function edit() 
    { 
        $data['judul'] = 'Ubah Profil'; 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [ 
            'required' => 'Nama tidak Boleh Kosong' 
        ]);

        if ($this->form_validation->run() == false) { 
            $this->load->view('templatesadmin/header', $data); 
            $this->load->view('templatesadmin/sidebar', $data); 
            $this->load->view('templatesadmin/topbar', $data); 
            $this->load->view('admin/edit', $data); 
            $this->load->view('templatesadmin/footer'); 
        } 
        else 
        { 
            $nama = $this->input->post('nama', true); 
            $email = $this->input->post('email', true); 
            
            //jika ada gambar yang akan diupload 
            $upload_image = $_FILES['image']['name']; 

            if ($upload_image) { 
                $config['upload_path'] = './assets/img/profile/'; 
                $config['allowed_types'] = 'gif|jpg|png'; 
                $config['max_size'] = '3000'; 
                $config['max_width'] = '1024'; 
                $config['max_height'] = '1000'; 
                $config['file_name'] = 'pro' . time(); 

                $this->load->library('upload', $config); 
                if ($this->upload->do_upload('image')) { 
                    $gambar_lama = $data['user']['image']; 
                    if ($gambar_lama != 'default.jpg') { 
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama); 
                    } 
                    $gambar_baru = $this->upload->data('file_name'); $this->db->set('image', $gambar_baru); 
                } 
                else { } 
            } 
            $this->db->set('name', $nama);  
            $this->db->where('email', $email); 
            $this->db->update('user'); 
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('admin');
        }
    }

    
}   
