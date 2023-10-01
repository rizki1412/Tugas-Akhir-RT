<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PP_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM tabel_pp
        return $this->db->get('pp');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('pp', $data);
    }

    function get_by_id_pernikahan($id_pernikahan)
    {
        //SELECT * FROM pp WHERE id_pernikahan=$id_pernikahan
        $this->db->where('id_pernikahan', $id_pernikahan);
        $this->db->from('pp');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pp', $data);
    }

    function delete($id_pernikahan)
    {
        //delete data berdasarkan nim
        $this->db->where('id_pernikahan', $id_pernikahan);
        $this->db->delete('pp');
    }
    
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM ktp ORDER BY nik ASC");
        return $query->result();
    } 
}