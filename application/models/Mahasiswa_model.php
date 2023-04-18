<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    function get()
    {
        return $this->db->get('tabel_mahasiswa');
    }
    function insert($data)
    {
        $this->db->insert('tabel_mahasiswa', $data);
    }

}