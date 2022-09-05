<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori_pg extends CI_Model
{
    public function get_all_data_pg()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori_pg');
        $this->db->order_by('id_kategori_pg', 'desc');
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert('tbl_kategori_pg', $data);
    }
    public function edit($data)
    {
        $this->db->where('id_kategori_pg', $data['id_kategori_pg']);
        $this->db->update('tbl_kategori_pg', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_kategori_pg', $data['id_kategori_pg']);
        $this->db->delete('tbl_kategori_pg', $data);
    }
}

/* End of file .php */
