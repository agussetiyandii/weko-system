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

        $where = [
            'id_lokasi' => $this->input->post('idLokasiBarang'),
            'sub_lokasi_1' => $this->input->post('subLokasiBarang1'),
            'sub_lokasi_2' => $this->input->post('subLokasiBarang2')
        ];
        if($where['sub_lokasi_2'] == NULL) $where['sub_lokasi_2'] = '';
        $queryLokasi = $this->db->get_where('t_sub_lokasi', $where)->row();

        $asal_barang = $this->input->post('asalBarang');
        $nama_barang = $this->input->post('namaBarang');
        $id_merek = $this->input->post('idMerek');
        $id_full_kategori = $this->input->post('idSubKategoriBarang');
        $id_lokasi = $this->input->post('idLokasiBarang');
        $id_full_lokasi = $queryLokasi->id;
        $kondisi = $this->input->post('kondisi');
        $info_barang = $this->input->post('infoBarang');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $remark = $this->input->post('remark');

        $data = [
            'asal_barang' => $asal_barang,
            'nama_barang' => $nama_barang,
            'id_merek' => $id_merek,
            'id_full_kategori' => $id_full_kategori,
            'id_lokasi' => $id_lokasi,
            'id_full_lokasi' => $id_full_lokasi,
            'kondisi' => $kondisi,
            'info_barang' => $info_barang,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'remark' => $remark,
            'gambar' => $file_name
        ];
        $this->db->insert('t_produk', $data);
        $dataLokasi = $this->db->get_where('t_lokasi', ['id' => $id_lokasi])->row()->lokasi;
        // jika data produk ti t_stok_barang telah ada , maka ubah stoknya
        if($this->db->get_where('t_stok_barang')->num_rows() > 0){
            $this->db->update('t_stok_barang', [
                'stok_'.$dataLokasi => $data['jumlah']
            ],[
                'nama_barang' => $data['nama_barang']
            ]);
        } else {
            // selain itu, tambahkan produk dan stoknya
            $this->db->insert('t_stok_barang', [
                'nama_barang' => $data['nama_barang'],
                'stok_'.$dataLokasi => $data['jumlah']
            ]);
        }
        redirect(base_url('produk/index'));
    }

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