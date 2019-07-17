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

    public function getbyId()
    {
        $id = $this->input->get('id');
        echo json_encode($this->Kelas_model->get_by_id($id));
    }

}
