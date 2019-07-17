<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->get_all();
        $this->load->view('kelas/kelas_list', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('kelas', 'kelas', 'required|is_unique[kelas.nama_kelas]');
        if ($this->form_validation->run() == true) {
            $data = array('nama_kelas' => $this->input->post('kelas'));
            $this->Kelas_model->insert($data);
            $this->session->set_flashdata('message', 'ditambahkan');
        }else {
            $this->session->set_flashdata('error', 'Nama kelas sudah terdaftar!');
        }
        redirect('kelas');
    }

    public function edit($id)
    {
        $data = $this->db->get_where('kelas', ['nama_kelas' => $this->input->post('kelas')])->row();

        if ($data) {
            $this->session->set_flashdata('error', 'Nama kelas sudah terdaftar!');
        }else {
            $kelas = array('nama_kelas' => $this->input->post('kelas'));
            $this->Kelas_model->update($id, $kelas);
            $this->session->set_flashdata('message', 'diubah');
        }
        redirect('kelas');
    }

    public function delete($id)
    {
        $data = $this->db->get_where('siswa', ['kelas_id' => $id])->row();

        if ($data) {
            $this->session->set_flashdata('error', 'Tidak bisa dihapus!');
        }else {
            $this->Kelas_model->delete($id);
            $this->session->set_flashdata('message', 'dihapus');
        }
        redirect('kelas');
    }
}
