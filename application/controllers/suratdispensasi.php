<?php

class Suratdispensasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index()
	{
		$data['datasiswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}
	function tambah()
	{
		$this->load->view('v_input');
	}
	function tambah_aksi()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$tanggalizin = $this->input->post('tanggalizin');
		$alasan = $this->input->post('alasan');
		$tanggalsurat = $this->input->post('tanggalsurat');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'tanggalizin' => $tanggalizin,
			'alasan' => $alasan,
			'tanggalsurat' => $tanggalsurat
		);
		$this->m_data->input_data($data, 'datasiswa');
		redirect('suratdispensasi/index');
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'datasiswa');
		redirect('suratdispensasi/index');
	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['datasiswa'] = $this->m_data->edit_data($where, 'datasiswa')->result();
		$this->load->view('v_edit', $data);
	}
	function update()
	{
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$tanggalizin = $this->input->post('tanggalizin');
		$alasan = $this->input->post('alasan');
		$tanggalsurat = $this->input->post('tanggalsurat');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'tanggalizin' => $tanggalizin,
			'alasan' => $alasan,
			'tanggalsurat' => $tanggalsurat
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'datasiswa');
		redirect('suratdispensasi/index');
	}
	function cetak($id)
	{
		$where = array('id' => $id);
		$data['datasiswa'] = $this->m_data->edit_data($where, 'datasiswa')->result();
		$this->load->view('v_print', $data);
	}
}
