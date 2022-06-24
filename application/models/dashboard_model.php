<?php
class Dashboard_model extends CI_Model
{

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
}
