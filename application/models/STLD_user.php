<?php
defined('BASEPATH') or exit('No direct script access allowed');
class STLD_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM tabel_stld
        return $this->db->get('stld');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('stld', $data);
    }

    function get_by_no_stld($no_stld)
    {
        //SELECT * FROM stld WHERE no_stld=$no_stld
        $this->db->where('no_stld', $no_stld);
        $this->db->from('stld');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('stld', $data);
    }

    function delete($no_stld)
    {
        //delete data berdasarkan nim
        $this->db->where('no_stld', $no_stld);
        $this->db->delete('stld');
    }
    
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM ktp ORDER BY nik ASC");
        return $query->result();
    } 
}