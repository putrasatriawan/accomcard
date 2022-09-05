<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_photo extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_photo.id_kategori_pg', 'left');

        $this->db->order_by('id_photo', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_photo)
    {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_photo.id_kategori_pg', 'left');

        $this->db->where('id_photo', $id_photo);

        return $this->db->get()->row();
    }
    public function get_all_data_pg()
    {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_photo.id_kategori_pg', 'left');

        $this->db->order_by('id_photo', 'desc');
        return $this->db->get()->result();
    }

    public function get_data_pg($id_photo)
    {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg= tbl_photo.id_kategori_pg', 'left');

        $this->db->where('id_photo', $id_photo);

        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_photo', $data);
    }
    public function edit($data)
    {
        $this->db->where('id_photo', $data['id_photo']);
        $this->db->update('tbl_photo', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_photo', $data['id_photo']);
        $this->db->delete('tbl_photo', $data);
    }
}

/* End of file .php */
