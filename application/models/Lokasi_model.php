<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function getLokasi(){
        return $this->db->get('t_lokasi');
    }

    public function getLokasiById($id){
        return $this->db->get_where('t_lokasi', ['id' => $id]);
    }

    public function getIdFullLokasi($idLokasi, $subLokasi1, $subLokasi2){
        return $this->db->get_where('t_sub_lokasi', [
            'id_lokasi' => $idLokasi,
            'sub_lokasi_1' => $subLokasi1,
            'sub_lokasi_2' => $subLokasi2
        ]);
    }

    public function getSubLokasi1($id){
        $this->db->select('sub_lokasi_1');
        $this->db->distinct();
        return $this->db->get_where('t_sub_lokasi', ['id_lokasi' => $id]);
    }

    public function getSubLokasi2($id, $subLokasi1){
        return $this->db->get_where('t_sub_lokasi', [
            'id_lokasi' => $id,
            'sub_lokasi_1' => $subLokasi1
        ]);
    }

    public function insertPenempatanBarang($data){
        $this->db->insert('t_penempatan_barang', $data);
    }

}