<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    
public function index(){
    $this->load->view('form_login');
}
public function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek = $this->M_login->cek_user($username,$password)->num_rows();
    if ($cek > 0){
        $data_session = array(
            'nama' => $username,
            'status' => "login"
        );
        $this->session->set_userdata($data_session);

        // Redirect langsung ke halaman dashboard
        redirect('http://localhost/project_uas/index.php/dashboard');
    } else {
        echo "Username dan password salah !";
    }
}

public function logadmin() {
    $this->load->view('logadmin');
}

public function login_admin(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek = $this->M_login->cek_admin($username, $password)->num_rows();
    if ($cek > 0){
        $data_session = array(
            'nama' => $username,
            'status' => "login"
        );
        $this->session->set_userdata($data_session);

        // Redirect langsung ke halaman data motor
        redirect('index.php/DataMotor');
    } else {
        echo "Username dan password salah !";
    }
}


public function dashboard() {
    $this->load->model('M_motor_cus'); // Pastikan model M_motor_cus di-load
    $data['motor_data'] = $this->M_motor_cus->get_motor_data();

    // Load the 'dashboard' view and pass the data
    $this->load->view('dashboard', $data);
}



public function dashadmin(){
    $this->load->view('dashadmin');
}
public function register(){
    $this->load->view('form_register');
}
}
