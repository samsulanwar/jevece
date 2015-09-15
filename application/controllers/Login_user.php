<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}
	public function index()
	{
		$this->load->view('view_login_user');
	}
	public function auth()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array(
			'username' => $username,
			'password' => $password
			);
		if($this->form_validation->run() == TRUE)
		{
			$cek = $this->model_login->cek($data);
			$data = $this->model_login->data($data);
			if($cek > 0)
			{
				$session = array(
					'id_user' => $data[0]->id_user,
					'nama' => $data[0]->nama,
					'status' => 'login'
					);
				$this->session->set_userdata($session);
				redirect('admin/index');
			}
			else
			{
				redirect('login/index/gagal');
			}
		}
		else
		{
			redirect('login/index/gagal');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}