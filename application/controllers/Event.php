<?php

class Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model', 'event');
	}
	public function index()
	{
		$data['event'] = $this->event->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('event', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{

		$detail = $this->event->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_event', $data);
		$this->load->view('templates/footer');
	}
}
