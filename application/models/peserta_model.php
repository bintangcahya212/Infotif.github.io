<?php
class Peserta_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('daftar');
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
