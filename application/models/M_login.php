<?php
class M_login extends CI_Model{
    public function cek_user($u,$p){
        return $this->db->get_where('user', array('username'=> $u, 'password'=>$p));
    }

    public function cek_admin($u,$p){
        return $this->db->get_where('admin', array('username'=> $u, 'password'=>$p));
    }
}
