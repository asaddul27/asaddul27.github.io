<?php

class Suratperingatan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_dataperingatan');
		$this->load->helper('url');
	}

	function index()
	{
		$data['peringatan'] = $this->m_dataperingatan->tampil_data()->result();
		$this->load->view('p_tampil', $data);
	}
	function tambah()
	{
		$this->load->view('p_input');
	}
	function tambah_aksi()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$keterangan = $this->input->post('keterangan');
		$tanggalsurat = $this->input->post('tanggalsurat');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'keterangan' => $keterangan,
			'tanggalsurat' => $tanggalsurat
		);
		$this->m_dataperingatan->input_data($data, 'peringatan');
		redirect('suratperingatan/index');
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_dataperingatan->hapus_data($where, 'peringatan');
		redirect('suratperingatan/index');
	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['peringatan'] = $this->m_dataperingatan->edit_data($where, 'peringatan')->result();
		$this->load->view('p_edit', $data);
	}
	function update()
	{
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$keterangan = $this->input->post('keterangan');
		$tanggalsurat = $this->input->post('tanggalsurat');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'keterangan' => $keterangan,
			'tanggalsurat' => $tanggalsurat
		);

		$where = array(
			'id' => $id
		);

		$this->m_dataperingatan->update_data($where, $data, 'peringatan');
		redirect('suratperingatan/index');
	}
	function cetak($id)
	{
		$where = array('id' => $id);
		$data['peringatan'] = $this->m_dataperingatan->edit_data($where, 'peringatan')->result();
		$this->load->view('p_print', $data);
	}
}
