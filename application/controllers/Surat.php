<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function surat_masuk(){
		// $this->load->model("excel_export_model");
  		// $query["employee_data"] = $this->excel_export_model->fetch_data();
  		$query['data'] = $this->db->order_by('tanggal_terima','ASC' );
		$query['data'] = $this->db->get('s_masuk' )->result_array();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('suratmasuk',$query);
		$this->load->view('template/Footer');
	}

	/* public function surat_keluar(){
		$this->load->model("excel_export_model");
  		$query["employee_data"] = $this->excel_export_model->fetch_data2();
  		$query['data'] = $this->db->order_by('tanggal_terima','ASC' );
		$query['data'] = $this->db->get('s_keluar')->result_array();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('suratkeluar',$query);
		$this->load->view('template/Footer');
	}
 */

	public function suratmasuk()
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->input_surat();
				
	}

/* 	public function suratkeluar()
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->input_surat2();		
	} */

	

	public function edit($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->ambildata($id);
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('edit', $data);
		$this->load->view('template/Footer');
	}

	public function edit_surat($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->editdata($id);
		return redirect('/Surat/surat_masuk');
		
	}

	public function gambar($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->ambildata($id);
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('editgambar', $data);
		$this->load->view('template/Footer');
	}

	public function edit_gambar($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->edit_gambar($id);
		return redirect('/Surat/surat_masuk');
		
	}

	public function hapus($id)
	{
		$this->load->model('Suratmodel');
		$data['data'] = $this->Suratmodel->hapus($id);
		return redirect('/Surat/surat_masuk');
	}

	public function print(){
		$this->load->model('Suratmodel');
		$data = array('data' =>$this->Suratmodel->print());
		// $this->load->view('template/Header');
		$this->load->view('print',$data);
		// $this->load->view('template/Footer');
	}

	public function print2(){
		$this->load->model('Suratmodel');
		$data = array('data' =>$this->Suratmodel->print2());
		// $this->load->view('template/Header');
		$this->load->view('prints_keluar',$data);
		// $this->load->view('template/Footer');
	}

	public function exporxls_masuk(){
		$this->load->model('Suratmodel');
		$this->Suratmodel->export();
	}

	public function exporxls_out(){
		$this->load->model('Suratmodel');
		$data = array('data' =>$this->Suratmodel->export2());
		// $this->load->view('template/Header');
		$this->load->view('exportxls_keluar',$data);
		// $this->load->view('template/Footer');
	}

}