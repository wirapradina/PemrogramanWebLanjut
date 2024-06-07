<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRental extends CI_Controller {

    public function index() {
        // Load model dan ambil data rental
        $this->load->model('M_rental'); // Sesuaikan nama model dengan nama file
        $data['rental_data'] = $this->M_rental->get_rental_data();

        // Load view untuk menampilkan data rental
        $this->load->view('data_rental', $data);
    }
}
