<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_photo');
        $this->load->model('m_kategori_pg');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Talent PhotoGrapher',
            'photo' => $this->m_photo->get_all_data(),
            'isi' => 'photo/v_photo',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules(
            'nama_photo',
            'Nama Photo',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori_pg',
            'Kategori Pg'
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
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '5024';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah PhotoGrapher',
                    'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'photo/v_add',
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
                    'nama_photo' => $this->input->post('nama_photo'),
                    'id_kategori_pg' => $this->input->post('id_kategori_pg'),
                    'harga' => $this->input->post('harga'),
                    'hargaasal' => $this->input->post('hargaasal'),
                    'alamat' => $this->input->post('alamat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_photo->add($data);
                $this->session->set_flashdata('pesan', 'Data berhasil ditambah !!!');
                redirect('photo');
            }
        }
        $data = array(
            'title' => 'Tambah Talent',
            'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
            'isi' => 'photo/v_add',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    //Update one item
    public function edit($id_photo)
    {
        $this->form_validation->set_rules(
            'nama_photo',
            'Nama Photo',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori_og',
            'Kategori_pg',
            'required',
            array('required' => '%s Harus Di isi !!!')
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
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit photo',
                    'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
                    'photo' => $this->m_photo->get_data($id_photo),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'photo/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                //hapus gambar
                $photo = $this->m_photo->get_data($id_photo);
                if ($photo->gambar != "") {
                    unlink('./assets/gambar/' . $photo->gambar);
                }
                //end hapus gambar
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_photo' => $id_photo,
                    'nama_photo' => $this->input->post('nama_photo'),
                    'id_kategori_pg ' => $this->input->post('id_kategori_pg'),
                    'harga' => $this->input->post('harga'),
                    'hargaasal' => $this->input->post('hargaasal'),
                    'alamat' => $this->input->post('alamat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_photo->edit($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
                redirect('photo');
            }
            //jika tanpa ganti gambar
            $data = array(
                'id_photo' => $id_photo,
                'nama_photo' => $this->input->post('nama_photo'),
                'id_kategori_pg' => $this->input->post('id_kategori_pg'),
                'harga' => $this->input->post('harga'),
                'hargaasal' => $this->input->post('hargaasal'),
                'alamat' => $this->input->post('alamat'),
                'deskripsi' => $this->input->post('deskripsi'),

            );
            $this->m_photo->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
            redirect('photo');
        }

        $data = array(
            'title' => 'Edit Talent',
            'kategori_pg' => $this->m_kategori_pg->get_all_data_pg(),
            'photo' => $this->m_photo->get_data($id_photo),
            'isi' => 'photo/v_edit',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }


    //Delete one item
    public function delete($id_photo)
    {
        //hapus gambar
        $photo = $this->m_photo->get_data($id_photo);
        if ($photo->gambar != "") {
            unlink('./assets/gambar/' . $photo->gambar);
        }
        //end hapus gambar
        $data = array(
            'id_photo' => $id_photo
        );
        $this->m_photo->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('photo');
    }
}
/* End of file photo.php */
