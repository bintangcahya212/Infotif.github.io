<?php

class Countdown extends CI_Controller
{

	public function index()
	{
		$this->load->view('v_countdown');
	}

	public function time()
	{
		$tanggal_start = $this->input->post('start');
		$waktu_start = $this->input->post('waktu_start');
		$s = strtotime("$waktu_start $tanggal_start");
		$start = array('waktu' => date('Y:m:d H:i:s', $s));
		$result = $this->mcountdown->time($start);
		if ($result == true) {
			redirect(site_url('countdown/lihat_countdown'));
		} else {
			redirect(site_url());
		}
	}
}
