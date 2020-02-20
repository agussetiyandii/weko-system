<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_model extends CI_Model {
	public function getStokBatam(){
		return $this->db->get('t_stok_batam');
	}

	public function insertStok($table, $data){
		$this->db->insert($table, $data);
	}

}

?>