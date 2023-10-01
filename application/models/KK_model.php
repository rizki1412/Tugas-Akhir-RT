<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KK_model extends CI_Model
{
    function get()
    {
        //SELECT * FROM kk
        return $this->db->get('kk');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('kk', $data);
    }

    function get_by_id_kk($id_kk)
    {
        //SELECT * FROM kk WHERE id_kk=$id_kk
        $this->db->where('id_kk', $id_kk);
        $this->db->from('kk');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('kk', $data);
    }

    function delete($id_kk)
    {
        //delete data berdasarkan id_kk
        $this->db->where('id_kk', $id_kk);
        $this->db->delete('kk');
    }
    
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM ktp ORDER BY nik ASC");
        return $query->result();
    }  
}