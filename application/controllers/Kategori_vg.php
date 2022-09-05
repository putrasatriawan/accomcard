<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_vg extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori_vg');
        $this->load->model('m_kategori');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Kategori PhotoGrapher',
            'kategori_vg' => $this->m_kategori_vg->get_all_data_vg(),
            'isi' => 'v_kategori_vg',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_kategori_vg' => $this->input->post('nama_kategori_vg'),
        );
        $this->m_kategori_vg->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!');
        redirect('kategori_vg');
    }
    public function edit($id_kategori_vg = NULL)
    {
        $data = array(
            'id_kategori_vg' => $id_kategori_vg,
            'nama_kategori_vg' => $this->input->post('nama_kategori_vg'),
        );
        $this->m_kategori_vg->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit !!!');
        redirect('kategori_vg');
    }

    public function delete($id_kategori_vg = NULL)
    {
        $data = array(
            'id_kategori_vg' => $id_kategori_vg
        );
        $this->m_kategori_vg->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('kategori_vg');
    }
    //Update one item
}

/* End of file Kategori.php */
