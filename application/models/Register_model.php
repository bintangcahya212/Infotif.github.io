<?php
class Register_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('user');
	}
	public function input_data($data, $table)
	{

		$this->db->insert($user, $data);
	}
}
