<?php
/**
* 
*/
class Kodepetunjuk_model extends CI_Model
{
	
	public function urusanpegawai(){
		$data=array (
			'kode'=> $this->input->post('kode'),
			'keterangan'=>$this->input->post('keterangan'),
			
		);
		$this->db->insert('kode_urusan_pegawai',$data);
		return redirect('/kode/lihat_kode/');
	}

	public function urusanumum(){
		$data=array (
			'kode'=> $this->input->post('kode'),
			'keterangan'=>$this->input->post('keterangan'),
			
		);
		$this->db->insert('kode_urusan_umum',$data);
		return redirect('/kode/lihat_kode/');
	}

	public function p2m(){
		$data=array (
			'kode'=> $this->input->post('kode'),
			'keterangan'=>$this->input->post('keterangan'),
			
		);
		$this->db->insert('kode_p2m',$data);
		return redirect('/kode/lihat_kode/');
	}

	public function pembinaankesehatan(){
		$data=array (
			'kode'=> $this->input->post('kode'),
			'keterangan'=>$this->input->post('keterangan'),
			
		);
		$this->db->insert('kode_pembinaan_kesehatan',$data);
		return redirect('/kode/lihat_kode/');
	}

	function ambildata($kode)
	{
		return $this->db->get_where('kode_urusan_pegawai', array('kode' => $kode))->row_array();
	}

	function ambildata2($kode)
	{
		return $this->db->get_where('kode_urusan_umum', array('kode' => $kode))->row_array();
	}

	function ambildata3($kode)
	{
		return $this->db->get_where('kode_p2m', array('kode' => $kode))->row_array();
	}

	function ambildata4($kode)
	{
		return $this->db->get_where('kode_pembinaan_kesehatan', array('kode' => $kode))->row_array();
	}

	function hapus($kode){
	 	$this->db->where('id', $kode);
		$this->db->delete('kode_urusan_pegawai');
	 }

	 function hapus2($kode){
	 	$this->db->where('id', $kode);
		$this->db->delete('kode_urusan_umum');
	 }

	 function hapus3($kode){
	 	$this->db->where('id', $kode);
		$this->db->delete('kode_p2m');
	 }

	 function hapus4($kode){
	 	$this->db->where('id', $kode);
		$this->db->delete('kode_pembinaan_kesehatan');
	 }
}