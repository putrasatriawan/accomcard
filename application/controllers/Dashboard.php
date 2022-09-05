<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_barang');
        $this->load->model('m_kategori');
        $this->load->model('m_kategori_pg');
        $this->load->model('m_kategori_vg');
    }


    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'total_barang' => $this->m_admin->total_barang(),
            'total_kategori' => $this->m_admin->total_kategori(),
            'barang' => $this->m_barang->get_all_data(),
            'isi' => 'v_dashboard',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}
