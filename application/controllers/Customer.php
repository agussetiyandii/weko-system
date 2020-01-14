<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function index(){
        $resultCustomer = $this->db->get('t_customer')->result_array();
        $data = [
            'dataCustomer' => $resultCustomer
        ];
        $this->load->view('customer', $data);
    }

    public function add(){
        $this->load->view('addCustomer');
    }

    public function simpan_customer(){
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
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan')
        ];
        if($where['kecamatan'] == NULL) $where['kecamatan'] = '';
        $queryProvinsi = $this->db->get_where('t_kota', 't_kecamatan', $where)->row();

        $nama_customer = $this->input->post('namaCustomer');
        $no_telp = $this->input->post('noTelp');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');
        $negara = $this->input->post('negara');
        $kode_pos = $this->input->post('kodePos');
        $max_kredit = $this->input->post('maxKredit');
        $tempo_kredit = $this->input->post('tempoKredit');
        $last_add = $this->input->post('lastAdd');
        $last_modified = $this->input->post('lastModified');

        $data = [
            'nama_customer' => $nama_customer,
            'no_telp' => $no_telp,
            'email' => $email,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'negara' => $negara,
            'kode_pos' => $kode_pos,
            'max_kredit' => $max_kredit,
            'tempo_kredit' => $tempo_kredit,
            'last_add' => $last_add,
            'last_modified' => $last_modified
        ];
        $this->db->insert('t_customer', $data);
        $dataProvinsi = $this->db->get_where('t_provinsi', ['id' => $id_provinsi])->row()->provinsi;
        // jika data produk ti t_stok_barang telah ada , maka ubah stoknya
        // if($this->db->get_where('t_stok_barang')->num_rows() > 0){
        //     $this->db->update('t_stok_barang', [
        //         'stok_'.$dataLokasi => $data['jumlah']
        //     ],[
        //         'nama_barang' => $data['nama_barang']
        //     ]);
        // } else {
            // selain itu, tambahkan produk dan stoknya
        //     $this->db->insert('t_stok_barang', [
        //         'nama_barang' => $data['nama_barang'],
        //         'stok_'.$dataLokasi => $data['jumlah']
        //     ]);
        // }
        redirect(base_url('customer/index'));
    }

    // public function load_sub_kategori($id){
    //     $data['data_sub_kategori'] = $this->db->get_where('t_sub_kategori', ['id_kategori' => $id])->result();
    //     $this->load->view('ajax/tambah-produk/sub-kategori', $data);
    // }

    public function load_kota($id){
        $this->db->select('kota');
        $this->db->distinct();
        $data['data_kota'] = $this->db->get_where('t_kota', ['id_provinsi' => $id])->result();
        $this->load->view('ajax/addCustomer/kota', $data);
    }

    public function load_kecamatan($id, $kecamatan){
        $where = [
            'id_provinsi' => $id,
            'kota' => $kota
        ];
        $data['data_kecamatan'] = $this->db->get_where('t_kota', $where)->result();
        $this->load->view('ajax/addCustomer/kecamatan', $data);
    }

}

?>