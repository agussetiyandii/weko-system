<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getAllKategori(){
        return $this->db->get('t_kategori');
    }

    public function getKategoriById($id){
        return $this->db->get_where('t_kategori', ['id' => $id]);
    }

}