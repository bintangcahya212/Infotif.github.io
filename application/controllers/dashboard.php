<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebarkegiatan');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{

		$detail = $this->model_barang->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}
	public function search()
	{
		$keyword = $this->input->get('keyword');
		$data = $this->model_barang->ambil_data($keyword);
		$data = array(
			'keyword' => $keyword,
			'data' => $data
		);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebarkegiatan');
		$this->load->view('search', $data);
		$this->load->view('templates/footer');
	}
	public function _uploadImage()
	{
		$config['upload_path'] = './assets/img';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = time();
		$config['overwrite'] = true;
		$config['max-size'] = 3000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		} else {
			print_r($this->upload->display_errors());
		}
	}
	public function tambah_aksi()
	{
		$nama	= $this->input->post('nama');
		$nik	= $this->input->post('nik');
		$email	= $this->input->post('email');
		$no_hp	= $this->input->post('no_hp');
		$kegiatan	= $this->input->post('kegiatan');
		$gambar	= $_FILES['gambar'];

		if (!empty($_FILES["gambar"]["name"])) {

			$this->gambar = $this->_uploadImage();
		} else {

			echo "Upload Gagal";
		}



		$data = array(
			'nama'	=> $nama,
			'nik'	=> $nik,
			'email'	=> $email,
			'no_hp'	=> $no_hp,
			'kegiatan'	=> $kegiatan,
			'gambar' => $this->gambar
		);
		$this->dashboard_model->input_data($data, 'daftar');
		redirect('dashboard/index');
	}
}
