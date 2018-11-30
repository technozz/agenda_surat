<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	public function grafik_surat()
	{
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('grafik');
		$this->load->view('template/Footer');
	}

	public function linechart()
	{
		$this->load->model('Grafik_mod');
		$data['data']=$this->Grafik_mod->get_data();
		$data['data2']=$this->Grafik_mod->get_data2();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('linechart',$data);
		$this->load->view('template/Footer');
	}

	public function barchart()
	{
		$this->load->model('Grafik_mod');
		$data['data']=$this->Grafik_mod->get_data();
		$data['data2']=$this->Grafik_mod->get_data2();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('barchart',$data);
		$this->load->view('template/Footer');
	}

}
