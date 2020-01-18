<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function getAllCustomer() {
        return $this->db->get('t_customer');
    }

    public function getCustomerById($id){
        return $this->db->get_where(['id' => $id]);
    }

    public function insertCustomer($data) {
        $this->db->insert('t_customer', $data);
    }

    

}