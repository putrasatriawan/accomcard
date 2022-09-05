<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gambarphoto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gambarphoto');
        $this->load->model('m_photo');
    }


    public function index()
    {
        $data = array(
            'title' => 'Gambar Photo',
            'gambar_pg' => $this->m_gambarbarang->get_all_data(),
            'isi' => 'gambarphoto/v_index.php',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    public function add($id_photo)
    {
        $this->form_validation->set_rules(
            'ket_photo',
            'Ket Gambar',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambarbarang/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '5024';
            $this->upload->initialize($config);
            $field_name = "gambar_photo";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Gambar Photo',
                    'error_upload' => $this->upload->display_errors(),
                    'photo' => $this->m_photo->get_data($id_photo),
                    'gambar_pg' => $this->m_gambarphoto->get_gambar($id_photo),
                    'isi' => 'gambarphoto/v_add.php',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambarbarang/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_photo' => $id_photo,
                    'ket_photo' => $this->input->post('ket_photo'),
                    'gambar_pg'  => $upload_data['uploads']['file_name'],
                );
                $this->m_gambarphoto->add($data);
                $this->session->set_flashdata('pesan', 'Gambar berhasil ditambah !!!');
                redirect('gambarphoto/add/' . $id_photo);
            }
        }
        $data = array(
            'title' => 'Gambar Photo',
            'photo' => $this->m_photo->get_data($id_photo),
            'gambar_pg' => $this->m_gambarphoto->get_gambar($id_photo),
            'isi' => 'gambarphoto/v_add.php',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    public function delete($id_photo, $id_gambar_pg)
    {
        //hapus gambar
        $gambar_pg = $this->m_gambarphoto->get_data($id_gambar_pg);
        if ($gambar_pg->gambar_pg != "") {
            unlink('./assets/gambarbarang/' . $gambar_pg->gambar_pg);
        }
        //end hapus gambar
        $data = array(
            'id_gambar_pg' => $id_gambar_pg
        );
        $this->m_gambarphoto->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('gambarbarang/add/' . $id_photo);
    }
}
