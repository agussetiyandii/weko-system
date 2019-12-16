<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function index(){
        $this->load->view('produk');
    }

    public function tambah(){
        $this->load->view('tambah-produk');
    }

    public function simpan_produk(){
        $kategori = $this->input->post('kategori');
        $sub_kategori = $this->input->post('sub_kategori');
        $lokasi = $this->input->post('lokasi');
        $sub_lokasi = $this->input->post('sub_lokasi');

        $data = [
            'asal_barang' => $this->input->post('asalBarang'),
            'nama_barang' => $this->input->post('namaBarang'),
            'merek' => $this->input->post('merek'),
            
            'kondisi' => $this->input->post('kondisi'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'remark' => $this->input->post('remark')
        ];
        $this->db->insert('t_produk');
    }

}

?>