<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function getAllProduk() {
        return $this->db->get('t_produk');
    }

    public function getProdukById($id){
        return $this->db->get_where(['id' => $id]);
    }

    public function insertProduk($data) {
        $this->db->insert('t_produk', $data);
    }

    

}