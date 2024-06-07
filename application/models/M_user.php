<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// application/models/M_user.php

class M_user extends CI_Model {

    public function register_user($data) {
        // Menyimpan data pengguna ke dalam tabel users
        return $this->db->insert('user', $data);
    }
}
