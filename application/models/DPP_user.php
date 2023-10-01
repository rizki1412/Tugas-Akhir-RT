<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DPP_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM tabel_dpp
        return $this->db->get('dpp');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('dpp', $data);
    }

    function get_by_kd_pernikahan($kd_pernikahan)
    {
        //SELECT * FROM dpp WHERE kd_pernikahan=$kd_pernikahan
        $this->db->where('kd_pernikahan', $kd_pernikahan);
        $this->db->from('dpp');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dpp', $data);
    }

    function delete($kd_pernikahan)
    {
        //delete data berdasarkan nim
        $this->db->where('kd_pernikahan', $kd_pernikahan);
        $this->db->delete('dpp');
    }
    
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM ktp ORDER BY nik ASC");
        return $query->result();
    } 
}