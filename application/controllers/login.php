<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]', [
			'matches' => 'password is dont match'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
			'matches' => 'password is dont match'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('login',);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		var_dump($user);
		if ($user) {
			if ($user['role_id'] == 2) {

				redirect('dashboard');
			} else {
				redirect('admin/dashboard_admin');
			}
		} else {
			redirect('login/index');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]', [
			'matches' => 'password is dont match'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
			'matches' => 'password is dont match'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('register',);
			echo 'tolong isi data akun';
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 2,

			];


			$this->db->insert('user', $data);
			redirect('login/index');
		}
	}
}
