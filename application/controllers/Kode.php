<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode extends CI_Controller {

	public function lihat_kode(){
		$query['data'] = $this->db->get('kode_urusan_pegawai')->result_array();
		$query['data2'] = $this->db->get('kode_urusan_umum')->result_array();
		$query['data3'] = $this->db->get('kode_p2m')->result_array();
		$query['data4'] = $this->db->get('kode_pembinaan_kesehatan')->result_array();
		$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
		$this->load->view('template/Header',$data1);
		$this->load->view('kode_petunjuk',$query);
		$this->load->view('template/Footer');
	}

public function kode_urusan_pegawai()
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->urusanpegawai();		
	}

public function kode_urusan_umum()
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->urusanumum();		
	}

public function kode_p2m()
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->p2m();		
	}
	
	public function kode_pembinaan_kesehatan()
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->pembinaankesehatan();		
	}

	public function hapus($kode)
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->hapus($kode);
		return redirect('/Kode/lihat_kode/');
	}

	public function hapus2($kode)
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->hapus2($kode);
		return redirect('/Kode/lihat_kode/');
	}

	public function hapus3($kode)
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->hapus3($kode);
		return redirect('/Kode/lihat_kode/');
	}

	public function hapus4($kode)
	{
		$this->load->model('Kodepetunjuk_model');
		$data['data'] = $this->Kodepetunjuk_model->hapus4($kode);
		return redirect('/Kode/lihat_kode/');
	}

}
