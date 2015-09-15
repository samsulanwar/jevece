<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_pesan');
		$this->load->helper('signature');
		if($this->session->userdata('status') != "login")
		{
			redirect('home');
		}
	}

	public function index()
	{ 
		$this->load->view('admin/header');
		$this->load->view('admin/view_home');
		$this->load->view('admin/footer');
	}

	public function pesan()
	{
		$data['pesan'] = $this->model_pesan->get_pesan();

		$this->load->view('admin/header');
		$this->load->view('admin/view_pesan', $data);
		$this->load->view('admin/footer');
	}

	public function hapus_pesan($id,$compare)
	{
		$signature = new signature;
		$key = $this->config->item('encryption_key');
		$cek = $signature->compareSignature($id, $compare, $key);
		if (!$cek){
			redirect('admin/pesan');
		}
		$this->model_pesan->delete_pesan($id);
		redirect('admin/pesan');
	}

}