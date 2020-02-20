<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
        $this->load->model('Lokasi_model', 'lokasi');
        $this->load->model('Kategori_model', 'kategori');
        $this->load->model('Stok_model', 'stok');
    }

    public function index(){
        $resultProduk = $this->produk->getAllProduk()->result_array();
        $data = [
            'dataProduk' => $resultProduk
        ];
        $this->load->view('produk', $data);
    }

    public function tambah(){
        $this->load->view('addProduk');
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

        /* proses penyimpanan data ke database */
        // 1. Ambil full lokasi = id dari tabel t_sub_lokasi
        $lokasi = '';
        $idLokasi = $this->input->post('idLokasiBarang');
        $subLokasi1 = $this->input->post('subLokasiBarang1');
        $subLokasi2 = $this->input->post('subLokasiBarang2');
        if($subLokasi2 == NULL) $subLokasi2 = '';

        $getSubLokasi = $this->lokasi->getIdFullLokasi($idLokasi, $subLokasi1, $subLokasi2)->row_array();
        $idFullLokasi = $getSubLokasi['id'];

        $kodeBarang = $this->input->post('kodeBarang').'L'.$idLokasi;

        // 2. Tangkap data dari form
        $insert_t_produk = [
            'kode_barang' => $kodeBarang,
            'nama_barang' => $this->input->post('namaBarang'),
            'id_merek' => $this->input->post('idMerek'),
            'id_kategori' => $this->input->post('idKategoriBarang'),
            'id_full_kategori' => $this->input->post('idSubKategoriBarang'),
            'harga' => $this->input->post('harga'),
            'gambar' => $file_name
        ];

        $insert_t_penempatan_barang = [
            'kode_barang' => $kodeBarang,
            'asal_barang' => $this->input->post('asalBarang'),
            'id_lokasi' => $this->input->post('idLokasiBarang'),
            'id_full_lokasi' => $idFullLokasi,
            'kondisi' => $this->input->post('kondisi'),
            'info_barang' => $this->input->post('infoBarang'),
            'remark' => $this->input->post('remark')
        ];

        $insert_stok = [
            'kode_barang' => $kodeBarang,
            'stok_pending' => $this->input->post('jumlah')
        ];

        $lokasi = $this->lokasi->getLokasiById($idLokasi)->row()->lokasi;

        // 3. Simpan ke database
        $this->produk->insertProduk($insert_t_produk);
        $this->lokasi->insertPenempatanBarang($insert_t_penempatan_barang);
        $this->stok->insertStok('t_stok_'.$lokasi, $insert_stok);

        // 4. Alihkan ke halaman produk
        redirect('produk');


    }

    public function pageEditProduk($kodeBarang){
        $data['asalBarang'] = [
            'Stock kantor',
            'Stock pembelian',
            'Stock supplier'
        ];
        $data['produk'] = $this->produk->getDetailProduk($kodeBarang)->row();
        $this->load->view('pageEditProduk', $data);
    }

    public function saveEditProduk(){

    }

    public function deleteProduk($kodeBarang){
        $this->produk->deleteProduk($kodeBarang);
        redirect('/produk');
    }

    // fungsi-fungsi untuk melakukan jquery AJAX

    public function load_sub_kategori($idKategori){
        $data['data_sub_kategori'] = $this->kategori->getSubKategori($idKategori)->result();
        $this->load->view('ajax/tambah-produk/sub-kategori', $data);
    }

    public function load_sub_lokasi_1($id){
        $data['data_sub_lokasi_1'] = $this->lokasi->getSubLokasi1($id)->result();
        $this->load->view('ajax/tambah-produk/sub-lokasi-1', $data);
    }

    public function load_sub_lokasi_2($id, $sub_lokasi_1){
        $data['data_sub_lokasi_2'] = $this->lokasi->getSubLokasi2($id, $sub_lokasi_1)->result();
        $this->load->view('ajax/tambah-produk/sub-lokasi-2', $data);
    }

}

?>