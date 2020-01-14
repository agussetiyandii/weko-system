<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {
    public function index(){
        $resultSuplier = $this->db->get('t_suplier')->result_array();
        $data = [
            'dataSuplier' => $resultSuplier
        ];
        $this->load->view('suplier', $data);
    }

    public function add(){
        $this->load->view('addSuplier');
    }

    public function simpan_suplier(){
        // $file_name = '';

        // $config['upload_path']          = './assets/images/products';
        // $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 2048;

        // $this->load->library('upload', $config);
        // if ( !$this->upload->do_upload('gambar_produk') ){
        //     $error = $this->upload->display_errors();
        // } else {
        //     $data = $this->upload->data();
        //     $file_name = $data['file_name'];
        // }

        // $where = [
        //     'provinsi' => $this->input->post('provinsi'),
        //     'kota' => $this->input->post('kota'),
        //     'kecamatan' => $this->input->post('kecamatan')
        // ];
        // if($where['kecamatan'] == NULL) $where['kecamatan'] = '';
        // $queryLokasi = $this->db->get_where('t_sub_lokasi', $where)->row();

        $nama_customer = $this->input->post('namaCustomer');
        $no_telp = $this->input->post('noTelp');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');
        $negara = $this->input->post('negara');
        $kode_pos = $this->input->post('kodePos');
        $last_add = $this->input->post('lastAdd');
        $last_modified = $this->input->post('lastModified');

        $data = [
            'nama_suplier' => $nama_customer,
            'no_telp' => $no_telp,
            'email' => $email,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'negara' => $negara,
            'kode_pos' => $kode_pos,
            'last_add' => $last_add,
            'last_modified' => $last_modified
        ];
        $this->db->insert('t_customer', $data);
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