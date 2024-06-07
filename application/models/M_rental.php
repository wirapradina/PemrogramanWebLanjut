<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rental extends CI_Model {

    public function get_rental_data() {
        // Implementasi untuk mengambil data dari tabel data_rental
        $query = $this->db->get('data_rental'); // Sesuaikan dengan nama tabel Anda

        return $query->result();
    }
}
