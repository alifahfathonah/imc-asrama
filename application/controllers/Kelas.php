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
        $kelas = array('nama_kelas' => $this->input->post('kelas'));
        $this->Kelas_model->insert($kelas);
        redirect('kelas');
    }

    public function edit($id)
    {
        $kelas = array('nama_kelas' => $this->input->post('kelas'));
        $this->Kelas_model->update($id, $kelas);
        redirect('kelas');
    }

    public function delete($id)
    {
        $this->Kelas_model->delete($id);
        redirect('kelas');
    }
}
