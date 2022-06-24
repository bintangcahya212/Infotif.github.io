<?php

class Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model', 'event');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['event'] = $this->event->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/event', $data);
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
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['event'] = $this->model_barang->edit_data($where, 'event')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_event', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$event	= $this->input->post('event');
		$keterangan	= $this->input->post('keterangan');
		$gambar	= $_FILES['gambar'];

		if (!empty($_FILES["gambar"]["name"])) {

			$this->gambar = $this->_uploadImage();
		} else {

			echo "Upload Gagal";
		}



		$data = array(
			'event'	=> $event,
			'keterangan'	=> $keterangan,
			'gambar' => $this->gambar
		);
		$this->event->input_data($data, 'event');
		redirect('admin/event/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->event->hapus_data($where, 'event');
		redirect('admin/event/index');
	}


	public function update()
	{
		$id = $this->input->post('id');
		$event	= $this->input->post('event');

		$keterangan	= $this->input->post('keterangan');


		if (!empty($_FILES["gambar"]["name"])) {

			$this->gambar = $this->_uploadImage();
		} else {

			$this->gambar = $_POST["gambar_lama"];
		}

		$data = array(
			'event'	=> $event,

			'keterangan'	=> $keterangan,
			'gambar' => $this->gambar



		);
		$where = array(
			'id' => $id
		);
		$this->event->update_data($where, $data, 'event');
		redirect('admin/event/index');
	}
	public function detail($id)
	{

		$detail = $this->event->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_event', $data);
		$this->load->view('templates_admin/footer');
	}
}
