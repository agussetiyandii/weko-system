<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Customer_model', 'customer');
        $this->load->model('Wilayah_model', 'provinsi');
    }

    public function index(){
        $resultCustomer = $this->customer->getAllCustomer()->result_array();
        $data = [
            'dataCustomer' => $resultCustomer
        ];
        $this->load->view('customer', $data);
    }

    public function add(){
        $this->load->view('addCustomer');
    }

    public function simpan_customer(){

        // 2. Tangkap data dari form
        $insert_t_customer = [
            'nama_customer' => $this->input->post('namaCustomer'),
            'no_telp' => $this->input->post('noTelp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan'),
            'negara' => $this->input->post('negara'),
            'kode_pos' => $this->input->post('kodepos'),
            'max_kredit' => $this->input->post('maxKredit'),
            'tempo_kredit' => $this->input->post('tempoKredit')
        ];

        // 3. Simpan ke database
        $this->customer->insertCustomer($insert_t_customer);

        // 4. Alihkan ke halaman produk
        redirect('customer');

    }


}

?>