<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah_model extends CI_Model {

    public function getAllProvinsi(){
        return $this->db->get('provinsi');
    }

    public function getKabupatenById($id){
        return $this->db->get_where('kabupaten', ['id_prov' => $id]);
    }

    public function getKecamatanById($id){
      return $this->db->get_where('kecamatan', ['id_kab' => $id]);
    }


}