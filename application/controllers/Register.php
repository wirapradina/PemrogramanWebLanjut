<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
    }
    
    public function process_register() {
        // Memvalidasi input
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_register');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password') 
            );

            $this->load->model('M_user');
            $result = $this->M_user->register_user($data);

            if ($result) {
                redirect('http://localhost/project_uas/index.php/login');
            } else {
                $this->load->view('form_register');
            }
        }
    }
}
?>
