<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left', 'is NULL');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left', 'is NULL');
        $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left', 'is NULL');

        $this->db->order_by('id_barang', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left', 'is NULL');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left', 'is NULL');
        $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left', 'is NULL');

        $this->db->where('id_barang', $id_barang);

        return $this->db->get()->row();
    }
    public function get_all_data_pg()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left', 'is NULL');

        $this->db->order_by('id_barang', 'desc');
        return $this->db->get()->result();
    }

    public function get_data_pg($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left', 'is NULL');

        $this->db->where('id_barang', $id_barang);

        return $this->db->get()->row();
    }
    public function get_all_data_vg()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left', 'is NULL');

        $this->db->order_by('id_barang', 'desc');
        return $this->db->get()->result();
    }

    public function get_data_vg($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left');

        $this->db->where('id_barang', $id_barang);

        return $this->db->get()->row();
    }
    public function add($data)
    {
        $this->db->insert('tbl_barang', $data);
    }
    public function edit($data)
    {
        $data = array(
            'id_barang' => ($this->input->post('id_barang')),
            'nama_barang' => ($this->input->post('id_barang')),
            'id_kategori' => is_null($this->input->post('id_kategori')),
            'id_kategori_pg' => is_null($this->input->post('id_kategori_pg')),
            'id_kategori_vg' => is_null($this->input->post('id_kategori_vg')),
            'harga' => ($this->input->post('harga')),
            'hargaasal' => ($this->input->post('hargaasal')),
            'deskripsi' => ($this->input->post('deskripsi')),
            'alamat' => ($this->input->post('alamat')),
            'gambar' => ($this->input->post('gambar'))
        );
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('tbl_barang', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->delete('tbl_barang', $data);
    }

    public function kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }

    public function get_all_data_barang_pg($id_kategori_pg)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left');
        $this->db->where('tbl_barang.id_kategori_pg', $id_kategori_pg);
        return $this->db->get()->result();
    }
}

/* End of file .php */
