<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function index(){
        $resultProduk = $this->db->get('t_produk')->result_array();
        $data = [
            'dataProduk' => $resultProduk
        ];
        $this->load->view('produk', $data);
    }

    public function tambah(){
        $this->load->view('tambah-produk');
    }

    public function simpan_produk(){
        // proses upload
        $file_name = '';

        $config['upload_path']          = './assets/images/products';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);
        if ( !$this->upload->do_upload('gambar_produk') ){
            $error = $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $file_name = $data['file_name'];
        }

        // proses penyimpanan file

    }

    // fungsi-fungsi untuk melakukan jquery AJAX

    public function load_sub_kategori($id){
        $data['data_sub_kategori'] = $this->db->get_where('t_sub_kategori', ['id_kategori' => $id])->result();
        $this->load->view('ajax/tambah-produk/sub-kategori', $data);
    }

    public function load_sub_lokasi_1($id){
        $this->db->select('sub_lokasi_1');
        $this->db->distinct();
        $data['data_sub_lokasi_1'] = $this->db->get_where('t_sub_lokasi', ['id_lokasi' => $id])->result();
        $this->load->view('ajax/tambah-produk/sub-lokasi-1', $data);
    }

    public function load_sub_lokasi_2($id, $sub_lokasi_1){
        $where = [
            'id_lokasi' => $id,
            'sub_lokasi_1' => $sub_lokasi_1
        ];
        $data['data_sub_lokasi_2'] = $this->db->get_where('t_sub_lokasi', $where)->result();
        $this->load->view('ajax/tambah-produk/sub-lokasi-2', $data);
    }

}

?>