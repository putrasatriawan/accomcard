<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Talent_vg extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->model('m_kategori');
        $this->load->model('m_kategori_pg');
        $this->load->model('m_kategori_vg');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Talent VideoGrapher',
            'barang' => $this->m_barang->get_all_data(),
            'isi' => 'talent_vg/v_talent_vg',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules(
            'nama_barang',
            'Nama Barang',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori'
        );
        $this->form_validation->set_rules(
            'id_kategori_pg',
            'Kategori_pg'
        );
        $this->form_validation->set_rules(
            'id_kategori_vg',
            'Kategori_vg'
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'hargaasal',
            'Harga Asal',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
            $config['max_size'] = '60000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Talent',
                    'kategori' => $this->m_kategori->get_all_data(),
                    'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
                    'kategori_vg' => $this->m_kategori_vg->get_all_data_vg(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'talent/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'id_kategori_pg' => $this->input->post('id_kategori_pg'),
                    'id_kategori_vg' => $this->input->post('id_kategori_vg'),
                    'harga' => $this->input->post('harga'),
                    'hargaasal' => $this->input->post('hargaasal'),
                    'alamat' => $this->input->post('alamat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->add($data);
                $this->session->set_flashdata('pesan', 'Data berhasil ditambah !!!');
                redirect('talent');
            }
        }
        $data = array(
            'title' => 'Tambah Talent',
            'kategori' => $this->m_kategori->get_all_data(),
            'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
            'kategori_vg' => $this->m_kategori_vg->get_all_data_vg(),
            'isi' => 'talent_vg/v_add_vg',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    //Update one item
    public function edit($id_barang)
    {
        $this->form_validation->set_rules(
            'nama_barang',
            'Nama Barang',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori'
        );
        $this->form_validation->set_rules(
            'id_kategori_pg',
            'Kategori_pg'
        );
        $this->form_validation->set_rules(
            'id_kategori_vg',
            'Kategori_vg'
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'hargaasal',
            'Harga Asal',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
            $config['max_size'] = '6000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit Talent VideoGrapher',
                    'kategori' => $this->m_kategori->get_all_data(),
                    'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
                    'kategori_vg' => $this->m_kategori_vg->get_all_data_vg(),
                    'barang' => $this->m_barang->get_data($id_barang),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'talent_vg/v_edit_vg',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                //hapus gambar
                $barang = $this->m_barang->get_data($id_barang);
                if ($barang->gambar != "") {
                    unlink('./assets/gambar/' . $barang->gambar);
                }
                //end hapus gambar
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_barang' => $id_barang,
                    'nama_barang' => $this->input->post('nama_barang'),
                    'id_kategori ' => $this->input->post('id_kategori'),
                    'id_kategori_pg ' => $this->input->post('id_kategori_pg'),
                    'id_kategori_vg ' => $this->input->post('id_kategori_vg'),
                    'harga' => $this->input->post('harga'),
                    'hargaasal' => $this->input->post('hargaasal'),
                    'alamat' => $this->input->post('alamat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->edit($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
                redirect('talent');
            }
            //jika tanpa ganti gambar
            $data = array(
                'id_barang' => $id_barang,
                'nama_barang' => $this->input->post('nama_barang'),
                'id_kategori' => $this->input->post('id_kategori'),
                'id_kategori_pg' => $this->input->post('id_kategori_pg'),
                'id_kategori_vg' => $this->input->post('id_kategori_vg'),
                'harga' => $this->input->post('harga'),
                'hargaasal' => $this->input->post('hargaasal'),
                'alamat' => $this->input->post('alamat'),
                'deskripsi' => $this->input->post('deskripsi'),

            );
            $this->m_barang->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
            redirect('talent');
        }

        $data = array(
            'title' => 'Edit Talent',
            'kategori' => $this->m_kategori->get_all_data(),
            'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
            'kategori_vg' => $this->m_kategori_vg->get_all_data_vg(),
            'barang' => $this->m_barang->get_data($id_barang),
            'isi' => 'talent_vg/v_edit_vg',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }


    //Delete one item
    public function delete($id_barang)
    {
        //hapus gambar
        $barang = $this->m_barang->get_data($id_barang);
        if ($barang->gambar != "") {
            unlink('./assets/gambar/' . $barang->gambar);
        }
        //end hapus gambar
        $data = array(
            'id_barang' => $id_barang
        );
        $this->m_barang->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('talent');
    }
}
/* End of file Barang.php */
