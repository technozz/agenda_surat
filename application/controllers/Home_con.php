<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_con extends CI_Controller {

function __construct(){
			  parent::__construct();
			  $this->load->model('Login_mod');
			  if($this->session->userdata('status') != "login"){
			   		redirect('login');
			  }
		 }

	public function index()
	{

		$data['data']=$this->Login_mod->totals_masuk();
		$data['data2']=$this->Login_mod->totals_keluar();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('home',$data);
		$this->load->view('template/Footer');
	}

	

	
}
