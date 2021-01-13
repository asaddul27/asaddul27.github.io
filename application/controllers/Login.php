<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        // tampilkan halaman login
        $this->load->view("login");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function proses(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $enc_password = md5($password);
        $cek = $this->user_model->doLogin($email,$enc_password);
        // var_dump($cek->username);
        // die();
        if(!$cek == null){
        $newdata = array(
        'username'  => $cek->username,
        'email'     => $cek->email,
        'level'     => $cek->level,
        'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);
            return redirect(site_url('admin'));
        }else{
             return redirect(site_url('login'));
        }
      
    }
}