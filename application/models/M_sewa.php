<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sewa extends CI_Model {

    public function get_sewa($id = '') {
        if ($id == '') {
            return $this->db->get('sewa')->result();
        } else {
            $this->db->where('Id_sewa', $id);
            return $this->db->get('sewa')->result();
        }
    }
   
    public function simpan_data_penyewaan($data_sewa) {
    
        $this->db->insert('sewa', $data_sewa);
    }


    
}
