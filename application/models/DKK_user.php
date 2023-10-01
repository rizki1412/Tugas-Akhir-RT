<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DKK_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM dkk
        return $this->db->get('dkk');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('dkk', $data);
    }

    function get_by_kode_kk($kode_kk)
    {
        //SELECT * FROM kk WHERE kode_kk=$kode_kk
        $this->db->where('kode_kk', $kode_kk);
        $this->db->from('dkk');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dkk', $data);
    }

    function delete($kode_kk)
    {
        //delete data berdasarkan kode_kk
        $this->db->where('kode_kk', $kode_kk);
        $this->db->delete('dkk');
    }
    
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM kk ORDER BY id_kk ASC");
        return $query->result();
    }  
}