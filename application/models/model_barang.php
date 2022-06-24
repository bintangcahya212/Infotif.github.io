<?php
class Model_barang extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('tb_barang', array('id' => $id))->row();
		return $query;
	}
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_data($keyword = null)
	{
		$this->db->select('*');
		$this->db->from('tb_barang');
		if (!empty($keyword)) {
			$this->db->like('nama_barang', $keyword);
		}
		return $this->db->get()->result_array();
	}
}
