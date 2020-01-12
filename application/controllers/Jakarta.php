<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jakarta extends CI_Controller {
    public function index(){
        $this->load->view('jakarta');
    }
}