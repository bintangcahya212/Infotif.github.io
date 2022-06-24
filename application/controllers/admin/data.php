<?php

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['kegiatan'] = $this->peserta_model->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_peserta', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->peserta_model->hapus_data($where, 'daftar');
		redirect('admin/data/index');
	}
}
