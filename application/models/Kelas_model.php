<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        return $this->db->get('kelas')->result();
    }

    // get data by id
    function get_by_id($id)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id])->row();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert('kelas', $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where(['id_kelas' => $id]);
        $this->db->update('kelas', $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where(['id_kelas' => $id]);
        $this->db->delete('kelas');
    }

}