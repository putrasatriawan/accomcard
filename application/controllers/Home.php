<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'barang' => $this->m_home->get_all_data(),
            'isi' => 'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function kategori($id_kategori)
    {

        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => 'Kategori Talent :  ' .  $kategori->nama_kategori,
            'barang' => $this->m_home->get_all_data_barang($id_kategori),
            'isi' => 'v_kategori_barang',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    public function kategori_pg($id_kategori_pg)
    {

        $kategori_pg = $this->m_home->kategori_pg($id_kategori_pg);
        $data = array(
            'title' => 'Kategori Talent :  ' .  $kategori_pg->nama_kategori_pg,
            'barang' => $this->m_home->get_all_data_barang_pg($id_kategori_pg),
            'isi' => 'v_kategori_pg_user',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    public function kategori_vg($id_kategori_vg)
    {

        $kategori_vg = $this->m_home->kategori_vg($id_kategori_vg);
        $data = array(
            'title' => 'Kategori Talent :  ' .  $kategori_vg->nama_kategori_vg,
            'barang' => $this->m_home->get_all_data_barang_vg($id_kategori_vg),
            'isi' => 'v_kategori_vg_user',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    public function detail_talent($id_barang)
    {
        $data = array(
            'title' => 'Detail Talent',
            'gambar' => $this->m_home->gambar_barang($id_barang),
            'barang' => $this->m_home->detail_barang($id_barang),
            'isi' => 'v_detail_talent',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['barang'] = $this->m_home->get_keyword($keyword);
        $data = array(
            'title' => 'Pencarian',
            'isi' => 'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}

/* End of file Home.php */
