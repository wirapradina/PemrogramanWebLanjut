<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_customer');
    }

    public function index()
    {
        $data['customer_data'] = $this->M_customer->get_customer(); // Perbaikan disini

        $this->load->view('customer', $data);
    }
    public function tambah()
    {
        $this->load->view('tambah_data_cus');
    }

    public function proses_tambah()
    {
        $data_customer = array(
            'NIK' => $this->input->post('nik'),
            'Nama' => $this->input->post('nama'),
            'Nomor_Telepon' => $this->input->post('nomor_telepon'),
            'Alamat' => $this->input->post('alamat'),
        );

        $this->M_customer->tambah_data_customer($data_customer);

        redirect('index.php/customer');
    }
    
}
