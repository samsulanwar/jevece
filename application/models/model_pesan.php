<?php
class Model_pesan extends CI_Model
{
	function get_pesan()
	{
		$this->db->from('kontak');
		$rs = $this->db->get();
		return $rs->result();
	}

	function delete_pesan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kontak');
	}
}