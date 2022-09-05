 <?php


    defined('BASEPATH') or exit('No direct script access allowed');

    class M_home extends CI_Model
    {
        public function get_all_data()
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
            $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left');
            $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left');

            $this->db->order_by('id_barang', 'desc');
            return $this->db->get()->result();
        }
        public function get_all_data_pg()
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left');

            $this->db->order_by('id_barang', 'desc');
            return $this->db->get()->result();
        }
        public function get_all_data_vg()
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left');

            $this->db->order_by('id_barang', 'desc');
            return $this->db->get()->result();
        }
        public function get_all_data_kategori()
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori');
            $this->db->order_by('id_kategori', 'desc');
            return $this->db->get()->result();
        }
        public function get_all_data_kategori_pg()
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori_pg');
            $this->db->order_by('id_kategori_pg', 'desc');
            return $this->db->get()->result();
        }
        public function get_all_data_kategori_vg()
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori_vg');
            $this->db->order_by('id_kategori_vg', 'desc');
            return $this->db->get()->result();
        }

        public function detail_barang($id_barang)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
            $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left');
            $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left');


            $this->db->where('id_barang', $id_barang);
            return $this->db->get()->row();
        }

        public function detail_barang_pg($id_photo)
        {
            $this->db->select('*');
            $this->db->from('tbl_photo');
            $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_photo.id_kategori_pg', 'left');
            $this->db->where('id_photo', $id_photo);
            return $this->db->get()->row();
        }

        public function gambar_photo($id_photo)
        {

            $this->db->select('*');
            $this->db->from('tbl_gambar');
            $this->db->where('id_barang', $id_photo);
            return $this->db->get()->result();
        }

        public function gambar_barang($id_barang)
        {

            $this->db->select('*');
            $this->db->from('tbl_gambar');
            $this->db->where('id_barang', $id_barang);
            return $this->db->get()->result();
        }

        public function kategori($id_kategori)
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori');
            $this->db->where('id_kategori', $id_kategori);
            return $this->db->get()->row();
        }

        public function kategori_pg($id_kategori_pg)
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori_pg');
            $this->db->where('id_kategori_pg', $id_kategori_pg);
            return $this->db->get()->row();
        }

        public function kategori_vg($id_kategori_vg)
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori_vg');
            $this->db->where('id_kategori_vg', $id_kategori_vg);
            return $this->db->get()->row();
        }

        public function get_all_data_barang($id_kategori)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
            $this->db->where('tbl_barang.id_kategori', $id_kategori);
            return $this->db->get()->result();
        }

        public function get_all_data_barang_pg($id_kategori_pg)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori_pg', 'tbl_kategori_pg.id_kategori_pg = tbl_barang.id_kategori_pg', 'left');
            $this->db->where('tbl_barang.id_kategori_pg', $id_kategori_pg);
            return $this->db->get()->result();
        }


        public function get_all_data_barang_vg($id_kategori_vg)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori_vg', 'tbl_kategori_vg.id_kategori_vg = tbl_barang.id_kategori_vg', 'left');
            $this->db->where('tbl_barang.id_kategori_vg', $id_kategori_vg);
            return $this->db->get()->result();
        }

        public function get_keyword($keyword)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->like('nama_barang', $keyword);
            $this->db->like('id_kategori', $keyword);
            $this->db->or_like('harga', $keyword);
            $this->db->or_like('hargaasal', $keyword);
            $this->db->or_like('deskripsi', $keyword);
            return $this->db->get()->result();
        }
    }
