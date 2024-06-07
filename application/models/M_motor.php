<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_motor extends CI_Model {

    public function get_motor($plat = '') {
        if ($plat == '') {
            return $this->db->get('motor')->result();
        } else {
            $this->db->where('PlatMotor', $plat);
            return $this->db->get('motor')->result();
        }
    }

    public function get_motor_by_PlatMotor($plat) {
        $this->db->where('PlatMotor', $plat);
        return $this->db->get('motor')->row();
    }

    public function update_motor($data) {
        // Lakukan operasi update data motor di sini
        $this->db->where('PlatMotor', $data['PlatMotor']);
        $this->db->update('motor', $data);
    }    

    public function delete_Motor($plat) {
        // Hapus data motor berdasarkan PlatMotor
        $this->db->where('PlatMotor', $plat);
        $deleteMotor = $this->db->delete('motor');

        echo "Menghapus motor dengan PlatMotor: " . $plat;

        echo $this->db->last_query();
    

      
    }

    public function simpan_data_motor($data_motor) {
        // Simpan data motor ke database
        $this->db->insert('motor', $data_motor);
    }

    
    
    
    
}
