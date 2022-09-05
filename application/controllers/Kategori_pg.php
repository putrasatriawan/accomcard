<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_pg extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori_pg');
        $this->load->model('m_kategori');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Kategori PhotoGrapher',
            'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
            'isi' => 'v_kategori_pg',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_kategori_pg' => $this->input->post('nama_kategori_pg'),
        );
        $this->m_kategori_pg->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!');
        redirect('kategori_pg');
    }
    public function edit($id_kategori_pg = NULL)
    {
        $data = array(
            'id_kategori_pg' => $id_kategori_pg,
            'nama_kategori_pg' => $this->input->post('nama_kategori_pg'),
        );
        $this->m_kategori_pg->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit !!!');
        redirect('kategori_pg');
    }

    public function delete($id_kategori_pg = NULL)
    {
        $data = array(
            'id_kategori_pg' => $id_kategori_pg
        );
        $this->m_kategori_pg->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('kategori_pg');
    }
    //Update one item
}

/* End of file Kategori.php */
