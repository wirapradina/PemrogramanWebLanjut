<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMotor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_motor');
    }

    public function index() {
        $data['data_motor'] = $this->M_motor->get_motor();
        $this->load->view('data_motor', $data);
    }

    public function edit($PlatMotor) {
        $PlatMotor = urldecode($PlatMotor);
        // Ambil data motor berdasarkan PlatMotor
        $data['motor'] = $this->M_motor->get_motor_by_PlatMotor($PlatMotor);
    
        // Tampilkan halaman edit dengan data motor yang dipilih
        $this->load->view('edit_motor', $data);
    }

    public function update_motor() {
        // Ambil data dari formulir
        $data = array(
            'PlatMotor' => $this->input->post('PlatMotor'),
            'HargaSewa' => $this->input->post('HargaSewa'),
            'Status' => $this->input->post('Status'),
            // ... tambahkan field lainnya sesuai kebutuhan
        );
    
        // Tangani gambar motor
        $config['upload_path']   = './assets/'; // Ganti path ini sesuai kebutuhan
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 2048; // Dalam kilobytes
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('Gambar')) {
            // Jika upload berhasil, update nama gambar di $data
            $upload_data = $this->upload->data();
            $data['Gambar'] = $upload_data['file_name'];
        }
    
        // Panggil metode model untuk update data motor
        $this->load->model('M_motor'); // Load model
        $this->M_motor->update_motor($data);
    
        // Redirect kembali ke halaman data_motor
        redirect('index.php/data_motor');
    }    

    public function delete_Motor($plat) {
        // Ubah karakter pengganti kembali ke spasi
        $plat = str_replace('_', ' ', $plat);
    
        // Hapus data motor berdasarkan PlatMotor
        $this->db->where('PlatMotor', $plat);
        $deleteMotor = $this->db->delete('motor');
    
        if ($deleteMotor) {
            // Penghapusan berhasil
            redirect('index.php/DataMotor'); // atau tautkan ke halaman yang sesuai
        } else {
            // Gagal menghapus
            echo "Gagal menghapus motor dengan PlatMotor: " . $plat;
        }
    }
       
    // controllers/DataMotor.php
public function tambah() {
    // Logika penambahan data motor
    // Contoh: Load halaman tambah data motor
    $this->load->view('tambah_data_motor');
}

public function proses_tambah() {
    // Load library upload
    $config['upload_path']   = './assets/'; // Ganti path ini sesuai kebutuhan
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size']      = 2048; // Dalam kilobytes

    $this->load->library('upload', $config);

    // Tangani unggahan file
    if ($this->upload->do_upload('gambar')) {
        $upload_data = $this->upload->data();
        $gambar = $upload_data['file_name'];

        // Data formulir lainnya
        $PlatMotor = $this->input->post('PlatMotor');
        $Merk_Tipe = $this->input->post('Merk_Tipe');
        $HargaSewa = $this->input->post('HargaSewa');
        $Status = $this->input->post('Status');

        // Simpan data ke database
        $data_motor = array(
            'PlatMotor' => $PlatMotor,
            'Merk_Tipe' => $Merk_Tipe,
            'HargaSewa' => $HargaSewa,
            'Status' => $Status,
            'Gambar' => $gambar, // Simpan nama file ke database
        );

        $this->load->model('M_motor'); // Load model
        $this->M_motor->simpan_data_motor($data_motor);
    } else {
        // Tangani kesalahan unggahan
        $error = array('error' => $this->upload->display_errors());
        // Tangani kesalahan sesuai kebutuhan
    }

    // Redirect atau tampilkan halaman yang sesuai
    redirect('index.php/DataMotor'); // Ganti sesuai kebutuhan
}


}
