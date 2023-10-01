<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SKD_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM skd
        return $this->db->get('skd');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('skd', $data);
    }

    function get_by_no_skd($no_skd)
    {
        //SELECT * FROM kk WHERE no_skd=$no_skd
        $this->db->where('no_skd', $no_skd);
        $this->db->from('skd');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('skd', $data);
    }

    function delete($no_skd)
    {
        //delete data berdasarkan no_skd
        $this->db->where('no_skd', $no_skd);
        $this->db->delete('skd');
    }
    

}