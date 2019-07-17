<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['siswa'] = $this->siswa_model->get_all();
        $this->load->view('siswa/siswa_list', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->siswa_model->rules());

        if ($this->form_validation->run()) {
            $this->siswa_model->insert();
            $this->session->set_flashdata('message', 'disimpan');
        }
        $data['kelas'] = $this->kelas_model->get_all();
        $this->load->view('siswa/siswa_add', $data);
    }

    public function edit($id)
    {
        $data = $this->db->get_where('siswa', ['nama_siswa' => $this->input->post('siswa')])->row();

        if ($data) {
            $this->session->set_flashdata('error', 'Nama siswa sudah terdaftar!');
        }else {
            $siswa = array('nama_siswa' => $this->input->post('siswa'));
            $this->siswa_model->update($id, $siswa);
            $this->session->set_flashdata('message', 'diubah');
        }
        redirect('siswa');
    }

    public function delete($id)
    {
        $data = $this->db->get_where('siswa', ['siswa_id' => $id])->row();

        if ($data) {
            $this->session->set_flashdata('error', 'Tidak bisa dihapus!');
        }else {
            $this->siswa_model->delete($id);
            $this->session->set_flashdata('message', 'dihapus');
        }
        redirect('siswa');
    }
}
