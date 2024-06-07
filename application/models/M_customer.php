<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

    public function get_customer($nik = '') {
        if ($nik == '') {
            return $this->db->get('customer')->result();
        } else {
            $this->db->wherre('NIK', $nik);
            return $this->db->get('custome')->result();
        }
    }

    public function tambah_data_customer($data_customer) {
        $this->db->insert('customer', $data_customer);
    }

}
