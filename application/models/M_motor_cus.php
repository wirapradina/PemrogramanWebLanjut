<?php
class M_motor_cus extends CI_Model {

    // Define the table name
    private $table_name = 'motor';

    // Define the table fields
    public $PlatMotor;
    public $Merk_Tipe;
    public $HargaSewa;
    public $Status;
    public $Gambar;

    public function get_motor_data() {
        // Order by PlatMotor in ascending order
        $this->db->order_by('PlatMotor', 'ASC');
        
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

}
?>
