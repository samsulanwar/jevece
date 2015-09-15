<?php
class Model_login extends CI_Model
{

	function cek($data)
	{
		return $this->db->get_where('user', $data)->num_rows();
	}
	function data($data)
	{
		return $this->db->get_where('user', $data)->result();
	}
}