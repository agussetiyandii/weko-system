<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batam extends CI_Controller {
    public function index(){
        $this->load->view('batam');
    }
}