<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

public function edit2($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->ambildata2($id);
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('edit2', $data);
		$this->load->view('template/Footer');
	 }

public function edit_surat2($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->editdata2($id);
		return redirect('/Surat/Surat_keluar');
		
	}

public function hapus2($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->hapus2($id);
		return redirect('/Surat/Surat_keluar');
	}



	public function gambar2($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->ambildata2($id);
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('editgambar2', $data);
		$this->load->view('template/Footer');
	}

	public function edit_gambar2($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->edit_gambar2($id);
		return redirect('/Surat/surat_keluar');
		
	}
	
}