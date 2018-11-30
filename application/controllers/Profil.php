<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function home_profil()
		{
			$query['data'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			$this->load->view('template/Header',$data1);
			$this->load->view('profil', $query);
			$this->load->view('template/Footer');
		}

	public function tambahadmin()
		{
			$this->load->model('Profil_mod');
			$add['add'] = $this->Profil_mod->tambahadmin();
			
		}

	public function editprofil($id)
		{
			$this->load->model('Profil_mod');
			$data['data'] = $this->Profil_mod->getid($id);
			$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			// $query['data'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			$this->load->view('template/Header',$data1);
			$this->load->view('editprofil',$data);
			$this->load->view('template/Footer');
		}

		public function edit_profil($id)
		{
			$this->load->model('Profil_mod');
			$data2['data'] = $this->Profil_mod->editprofil($id);
			return redirect('Profil/home_profil');
			
		}

		public function editakun($username)
		{
			$this->load->model('Profil_mod');
			$data['data'] = $this->Profil_mod->getusername($username);
			$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			// $query['data'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			$this->load->view('template/Header',$data1);
			$this->load->view('editakun',$data);
			$this->load->view('template/Footer');
		}

		public function edit_akun($username)
		{
			$this->load->model('Profil_mod');
			$data['data'] = $this->Profil_mod->editakun($username);
			return redirect('Login');
			
		}



		public function hapus_akun()
		{
			$query['data'] = $this->db->get('login')->result_array();
			$data1['data3'] = $this->db->get_where('login', array('username' => $_SESSION['user']))->row_array();
			$this->load->view('template/Header',$data1);
			$this->load->view('hapusakun',$query);
			$this->load->view('template/Footer');
		}


		public function hapus($username)
	{
		$this->load->model('Profil_mod');
		$data['data'] = $this->Profil_mod->hapusakun($username);
		return redirect('/profil/hapus_akun');
	}




	
}
