<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
function __construct(){
	parent::__construct();
	$this->load->model('Login_mod');
}
	public function index()
	{
		$this->load->view('login');
	
	}

function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Login_mod->cek_login("login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;

			redirect(base_url("home_con"));

		}else{
			redirect(base_url('login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
