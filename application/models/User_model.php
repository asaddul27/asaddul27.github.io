<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public function doLogin($email, $enc_password){

        // cari user berdasarkan email dan username
        $this->db->where('email', $email)
                ->or_where('username', $email)
                ->where('password', $enc_password);
        $user = $this->db->get($this->_table)->row();
        return $user;

    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    

}