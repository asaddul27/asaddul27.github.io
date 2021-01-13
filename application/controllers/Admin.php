<?php
class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') != TRUE) {
      redirect(base_url('login'));
    }
  }

  public function index()
  {
    if ($this->session->userdata('level') != '1') {
      return redirect(base_url('welcome'));
    } else {
      return $this->load->view('admin');
    }
  }

  public function suratdispensasi()
  {
    $this->load->view('v_tampil');
  }
  public function edit()
  {
    $this->load->view('edit');
  }
}
