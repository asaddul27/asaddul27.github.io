<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function index()
    {
        $this->load->view('berita/berita');
    }
    public function perpus_terakreditasi_a()
    {
        $this->load->view('berita/perpus-terakreditasi-a');
    }
    public function meeting()
    {
        $this->load->view('berita/meeting');
    }
    public function pencapaian()
    {
        $this->load->view('berita/pencapaian');
    }
    public function juara()
    {
        $this->load->view('berita/juara');
    }
}
