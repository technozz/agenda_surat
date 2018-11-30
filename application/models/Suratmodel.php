<?php
class Suratmodel extends CI_Model
{

	public function input_surat(){
		$config['upload_path']          = './assets/gambar/surat_masuk/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
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
					'kode'=> $this->input->post('nomor_berkas'),
					'alamat'=>$this->input->post('alamat'),
					'tanggal_surat'=> $this->input->post('tanggal_surat'),
					'tanggal_terima'=> $this->input->post('tanggal_terima'),
					'nomor'=> $this->input->post('nomor'),
					'perihal'=> $this->input->post('perihal'),
					'n_petunjuk'=> $this->input->post('nomor_petunjuk'),
					'gambar'=>$gambar
					
				);
				$this->db->insert('s_masuk',$data);
				return redirect('/Surat/surat_masuk');
			}

	}
	
 	public function input_surat2()
	{
		$config['upload_path']          = './assets/gambar/surat_keluar/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
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
					'kode'=> $this->input->post('nomor_berkas'),
					'alamat'=>$this->input->post('alamat'),
					'tanggal_surat'=> $this->input->post('tanggal_surat'),
					'tanggal_terima'=> $this->input->post('tanggal_terima'),
					'nomor'=> $this->input->post('nomor'),
					'perihal'=> $this->input->post('perihal'),
					'n_petunjuk'=> $this->input->post('nomor_petunjuk'),
					'gambar'=>$gambar
					
				);
				$this->db->insert('s_keluar',$data);
				return redirect('/Surat/surat_keluar');
			}
		
	}

	function ambildata($id)
	{
		return $this->db->get_where('s_masuk', array('id' => $id))->row_array();
	}

	function editdata($id)
	{
				$data=array (
				'kode'=> $this->input->post('nomor_berkas'),
				'alamat'=>$this->input->post('alamat'),
				'tanggal_surat'=> $this->input->post('tanggal_surat'),
				'tanggal_terima'=> $this->input->post('tanggal_terima'),
				'nomor'=> $this->input->post('nomor'),
				'perihal'=> $this->input->post('perihal'),
				'n_petunjuk'=> $this->input->post('nomor_petunjuk'),
					);

					$this->db->where('id', $id);
					$this->db->update('s_masuk', $data);
					
		
	}


	function hapus($id){
	 	$this->db->where('id', $id);
		$this->db->delete('s_masuk');
	 }



	function ambildata2($id)
	{
		return $this->db->get_where('s_keluar', array('id' => $id))->row_array();
	}



	function editdata2($id)
	{
		$data=array (
			'kode'=> $this->input->post('nomor_berkas'),
			'alamat'=>$this->input->post('alamat'),
			'tanggal_surat'=> $this->input->post('tanggal_surat'),
			'tanggal_terima'=> $this->input->post('tanggal_terima'),
			'perihal'=> $this->input->post('perihal'),
			'n_petunjuk'=> $this->input->post('nomor_petunjuk'),
		);

		$this->db->where('id', $id);
		$this->db->update('s_keluar', $data);
	}




	public function edit_gambar($id){
		$config['upload_path']          = './assets/gambar/surat_masuk/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
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
					'gambar'=>$gambar
					
				);
				$this->db->where('id', $id);
				$this->db->update('s_masuk', $data);
			}

	}



public function edit_gambar2($id)
{
		$config['upload_path']          = './assets/gambar/surat_keluar/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
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
					'gambar'=>$gambar
					
				);
				$this->db->where('id', $id);
				$this->db->update('s_keluar', $data);
			}

	}



	function hapus2($id){
	 	$this->db->where('id', $id);
		$this->db->delete('s_keluar');
	 }

	 public function print(){
	 	$sql = "SELECT * FROM s_masuk ORDER BY tanggal_terima ASC ";
	  		$query = $this->db->query($sql);
	      	return $query->result();
	}
	public function print2(){
	 	$sql = "SELECT * FROM s_keluar ORDER BY tanggal_terima ASC ";
	  		$query = $this->db->query($sql);
	      	return $query->result();
	}

	// public function export(){
	//  	$query = $this->db->get('s_masuk');
 //        $this->excel_generator->set_query($query);
 //        $this->excel_generator->set_header(array('Kode', 'Alamat', 'Tanggal', 'Nomor', 'Perihal', 'Nomor Petunjuk'));
 //        $this->excel_generator->set_column(array('kode', 'alamat', 'tanggal', 'nomor', 'perihal', 'n_etunjuk'));
 //        $this->excel_generator->set_width(array(25, 15, 30, 15));
 //        $this->excel_generator->exportTo2007('Surat Masuk');
	// }

	public function export2(){
	 	$sql = "SELECT * FROM s_keluar";
	  		$query = $this->db->query($sql);
	      	return $query->result();
	}
} 
