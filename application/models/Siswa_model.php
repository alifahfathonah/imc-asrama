<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    public function rules()
    {
        return [
            [   'field' => 'nis',
                'label' => 'Nis',
                'rules' => 'is_unique[siswa.nis]|numeric'],
            [   'field' => 'nama_siswa',
                'label' => 'Nama Siswa',
                'rules' => 'required']
        ];
    }

    function get_all()
    {
        return $this->db->get('siswa')->result();
    }

    // get data by id
    function get_by_id($id)
    {
        return $this->db->get_where('siswa', ['id_siswa' => $id])->row();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert('siswa', $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where(['id_siswa' => $id]);
        $this->db->update('siswa', $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where(['id_siswa' => $id]);
        $this->db->delete('siswa');
    }

}