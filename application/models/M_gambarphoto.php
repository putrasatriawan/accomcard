<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_gambarbarang extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('tbl_photo. * ,COUNT(tbl_gambar_photo.id_photo) as total_gambar');
        $this->db->from('tbl_photo');
        $this->db->join('tbl_gambar_photo', 'tbl_gambar_photo.id_photo = tbl_photo.id_photo', 'left');
        $this->db->group_by('tbl_photo.id_photo');
        $this->db->order_by('tbl_photo.id_photo', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_gambar_pg)
    {
        $this->db->select('*');
        $this->db->from('tbl_gambar_photo');
        $this->db->where('id_gambar_pg', $id_gambar_pg);
        return $this->db->get()->row();
    }
    public function get_gambar($id_photo)
    {
        $this->db->select('*');
        $this->db->from('tbl_gambar_photo');
        $this->db->where('id_photo', $id_photo);
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert('tbl_gambar_photo', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_gambar_pg', $data['id_gambar_pg']);
        $this->db->delete('tbl_gambar_photo', $data);
    }
}
