<?php
class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_motor_cus'); // Load the M_motor_cus model
    }

    public function index() {
        $data['motor_data'] = $this->M_motor_cus->get_motor_data();
        $this->load->view('dashboard_view', $data);
    }

}
?>
