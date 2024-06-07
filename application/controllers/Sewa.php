<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_sewa');
        $this->load->library('session');
    }

    public function index() {
        $data['sewa_data'] = $this->M_sewa->get_sewa();
        $this->load->view('data_sewa', $data);
    }

    public function sewa() {
        // Load halaman tambah data sewa
        $this->load->view('tambah_data_sewa');
    }

    //user
    public function rental_form($plat_motor, $merk_tipe, $harga_sewa) {
        $merk_tipe = urldecode($merk_tipe);
    
        $data = array(
            'plat_motor' => urldecode($plat_motor),
            'merk_tipe' => $merk_tipe,
            'harga_sewa' => urldecode($harga_sewa)
        );
    
        $this->load->view('rental_form', $data);
    }
    public function process_sewa() {
        // Ambil data dari form
        $nik = $this->input->post('nik');
        $nama_penyewa = $this->input->post('nama_penyewa');
        $plat_motor = $this->input->post('plat_motor');
        $merk_tipe_motor = $this->input->post('merk_tipe_motor');
        $lama_sewa_hari = $this->input->post('lama_sewa_hari');
        $harga = $this->input->post('harga');
    
        // Simpan data ke tabel sewa
        $data_sewa = array(
            'NIK_Penyewa' => $nik,
            'Nama_Penyewa' => $nama_penyewa,
            'PlatMotor' => $plat_motor,
            'Merk_Tipe_Motor' => $merk_tipe_motor,
            'Lama_Sewa_Hari' => $lama_sewa_hari,
            'Harga' => $harga
        );
    
        $this->db->insert('sewa', $data_sewa);
    
        $this->session->set_flashdata('notification', 'Data sewa berhasil ditambahkan!');
    
        redirect('http://localhost/project_uas/index.php/sewa');
    }
    

    public function process_rental() {
        var_dump($_POST);
        // Ambil data dari form
        $plat_motor = $this->input->post('plat_motor');
        $merk_tipe = $this->input->post('merk_tipe');
        $harga_sewa = $this->input->post('harga_sewa');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $lama_sewa = $this->input->post('lama_sewa');
    
        // Simpan data ke tabel data_rental
        $data_rental = array(
            'plat_motor' => $plat_motor,
            'merk_tipe_motor' => $merk_tipe,
            'harga_sewa' => $harga_sewa,
            'nik_penyewa' => $nik,
            'nama_penyewa' => $nama,
            'no_telp' => $no_telp,
            'lama_sewa_hari' => $lama_sewa
        );
    
        $this->db->insert('data_rental', $data_rental);
    
        $this->session->set_flashdata('notification', 'Sewa berhasil!');

        redirect('http://localhost/project_uas/index.php/dashboard');
    }
    


}
