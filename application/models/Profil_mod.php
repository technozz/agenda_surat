<?php

class Profil_mod extends CI_Model
{
	
	function getid($id)
	{
		return $this->db->get_where('login', array('id' => $id))->row_array();
	}

	function editprofil($id)
	{

		$config['upload_path']          = './assets/gambar/admin/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['max_size']             = 5000;
	    $config['max_width']            = 3000;
	    $config['max_height']           = 3000;
	    

	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);

	    if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		}
		else {
			$img = $this->upload->data();
			$gambar = $img['file_name'];

			$data=array (
				'nama'=> $this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'email'=> $this->input->post('email'),
				'jk'=> $this->input->post('JK'),
				'no_hp'=> $this->input->post('hp'),
				'foto'=> $gambar,
				'about'=> $this->input->post('about')
			);
			$this->db->where('id', $id);
			$this->db->update('login', $data);
			}
	}

	function getusername($username)
	{
		return $this->db->get_where('login', array('id' => $username))->row_array();
	}

	function editakun($username)
	{
		$data=array (
			'username'=> $this->input->post('username'),
			'password'=>$this->input->post('password'),
		);

		$this->db->where('id',$username);
		$this->db->update('login', $data);
	}


	function tambahadmin()
	{
		$data=array (
		'username'=> $this->input->post('username'),
		'password'=>$this->input->post('password')
		);
		$this->db->insert('login',$data);
		return redirect('/Profil/hapus_akun');
	}

	function getakunhapus($username)
	{
		return $this->db->get_where('login', array('id' => $username))->row_array();
	}

	function hapusakun($username){
	 	$this->db->where('id', $username);
		$this->db->delete('login');
	 }


		
}