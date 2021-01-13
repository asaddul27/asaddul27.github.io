<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tentangkami()
	{
		$this->load->view('tentangkami');
	}
	public function events()
	{
		$this->load->view('events');
	}
	public function teachers()
	{
		$this->load->view('teachers');
	}
	public function guru01()
	{
		$this->load->view('guru/guru01');
	}
	public function guru02()
	{
		$this->load->view('guru/guru02');
	}
	public function guru03()
	{
		$this->load->view('guru/guru03');
	}
	public function guru04()
	{
		$this->load->view('guru/guru04');
	}
	public function guru05()
	{
		$this->load->view('guru/guru05');
	}
	public function guru06()
	{
		$this->load->view('guru/guru06');
	}
	public function guru07()
	{
		$this->load->view('guru/guru07');
	}
	public function guru08()
	{
		$this->load->view('guru/guru08');
	}
	public function guru09()
	{
		$this->load->view('guru/guru09');
	}
	public function guru10()
	{
		$this->load->view('guru/guru10');
	}
}
