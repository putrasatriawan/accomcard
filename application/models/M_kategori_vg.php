<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori_vg extends CI_Model
{
    public function get_all_data_vg()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori_vg');
        $this->db->order_by('id_kategori_vg', 'desc');
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert('tbl_kategori_vg', $data);
    }
    public function edit($data)
    {
        $this->db->where('id_kategori_vg', $data['id_kategori_vg']);
        $this->db->update('tbl_kategori_vg', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_kategori_vg', $data['id_kategori_vg']);
        $this->db->delete('tbl_kategori_vg', $data);
    }
}

/* End of file .php */
