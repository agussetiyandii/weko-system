<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Suplier_model', 'suplier');
        $this->load->model('Wilayah_model', 'provinsi');
    }

    public function index(){
        $resultSuplier = $this->suplier->getAllSuplier()->result_array();
        $data = [
            'dataSuplier' => $resultSuplier
        ];
        $this->load->view('suplier', $data);
    }

    public function add(){
        $this->load->view('addSuplier');
    }

    public function simpan_suplier(){

        // 2. Tangkap data dari form
        $insert_t_suplier = [
            'nama_suplier' => $this->input->post('namaSuplier'),
            'no_telp' => $this->input->post('noTelp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'negara' => $this->input->post('negara'),
            'kode_pos' => $this->input->post('kodepos'),
            'last_add' => $this->input->post('lastAdd'),
            'last_modified' => $this->input->post('lastModified')
        ];

        // 3. Simpan ke database
        $this->suplier->insertSuplier($insert_t_suplier);

        // 4. Alihkan ke halaman produk
        redirect('suplier');

    }

}

?>