<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KTP_user extends CI_Model
{
    function get()
    {
        //SELECT * FROM tabel_ktp
        return $this->db->get('ktp');
    }

    function insert($data)
    {
        //insert data ke dalam tabel
        $this->db->insert('ktp', $data);
    }

    function get_by_nik($nik)
    {
        //SELECT * FROM ktp WHERE nik=$nik
        $this->db->where('nik', $nik);
        $this->db->from('ktp');
        return $this->db->get();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('ktp', $data);
    }

    function delete($nik)
    {
        //delete data berdasarkan nim
        $this->db->where('nik', $nik);
        $this->db->delete('ktp');
    } 
}