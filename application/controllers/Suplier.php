<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {
    public function index(){
        $this->load->view('suplier');
    }

    public function add(){
        $this->load->view('addSuplier');
    }
}