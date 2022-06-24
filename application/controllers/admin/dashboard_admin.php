<?php
class Dashboard_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{


		$data['barang'] = $this->model_barang->tampil_data()->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['barang'] = $this->model_barang->edit_data($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit', $data);
		$this->load->view('templates_admin/footer');
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


	public function update()
	{
		$id = $this->input->post('id');
		$nama_barang	= $this->input->post('nama_barang');
		$tempat	= $this->input->post('tempat');
		$waktu	= $this->input->post('waktu');
		$harga	= $this->input->post('harga');
		$keterangan	= $this->input->post('keterangan');


		if (!empty($_FILES["gambar"]["name"])) {

			$this->gambar = $this->_uploadImage();
		} else {

			$this->gambar = $_POST["gambar_lama"];
		}

		$data = array(
			'nama_barang'	=> $nama_barang,
			'tempat'	=> $tempat,
			'waktu'	=> $waktu,
			'harga'	=> $harga,
			'keterangan'	=> $keterangan,
			'gambar' => $this->gambar



		);
		$where = array(
			'id' => $id
		);
		$this->model_barang->update_data($where, $data, 'tb_barang');
		redirect('admin/dashboard_admin/index');
	}
	public function tambah_aksi()
	{
		$nama_barang	= $this->input->post('nama_barang');
		$tempat	= $this->input->post('tempat');
		$waktu	= $this->input->post('waktu');
		$harga	= $this->input->post('harga');
		$keterangan	= $this->input->post('keterangan');
		$waktu_daftar	= $this->input->post('waktu_daftar');
		$gambar	= $_FILES['gambar'];

		if (!empty($_FILES["gambar"]["name"])) {

			$this->gambar = $this->_uploadImage();
		} else {

			echo "Upload Gagal";
		}



		$data = array(
			'nama_barang'	=> $nama_barang,
			'tempat'	=> $tempat,
			'waktu'	=> $waktu,
			'keterangan'	=> $keterangan,
			'harga'	=> $harga,
			'waktu_daftar'	=> $waktu_daftar,
			'gambar' => $this->gambar
		);
		$this->model_barang->input_data($data, 'tb_barang');
		redirect('admin/dashboard_admin/index');
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_barang->hapus_data($where, 'tb_barang');
		redirect('admin/dashboard_admin/index');
	}
	public function detail($id)
	{
		$this->load->model('model_barang');
		$detail = $this->model_barang->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_barang', $data);
		$this->load->view('templates_admin/footer');
	}
}
