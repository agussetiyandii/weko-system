<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier_model extends CI_Model {

    public function getAllSuplier() {
        return $this->db->get('t_suplier');
    }

    public function getSuplierById($id){
        return $this->db->get_where(['id' => $id]);
    }

    public function insertSuplier($data) {
        $this->db->insert('t_suplier', $data);
    }

    

}