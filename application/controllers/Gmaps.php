<?php
class Gmaps extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->library('googlemaps');

		$config['center'] = '0.4811808246860665, 101.46253392910846';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '0.4811808246860665, 101.46253392910846';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('map_view', $data);
		$this->load->view('templates/footer');
	}
}
