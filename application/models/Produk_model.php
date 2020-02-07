<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function getAllProduk() {
        return $this->db->get('t_produk');
    }

    public function getProdukById($id){
        return $this->db->get_where('t_produk',['id' => $id]);
    }

    public function getProdukByKodeBarang($kodeBarang){
        return $this->db->get_where('t_produk',['kode_barang' => $kodeBarang]);
    }

    public function getDetailProduk($kodeBarang){
        return $this->db->query("SELECT * FROM t_produk JOIN t_penempatan_barang WHERE t_produk.kode_barang = '$kodeBarang' AND t_produk.kode_barang = t_penempatan_barang.kode_barang");
    }

    public function insertProduk($data) {
        $this->db->insert('t_produk', $data);
    }

    public function editProduk($kodeBarang){

    }

    public function deleteProduk($kodeBarang){
        $this->db->delete('t_produk', ['kode_barang' => $kodeBarang]);
        $this->db->delete('t_penempatan_barang', ['kode_barang' => $kodeBarang]);
    }

    

}