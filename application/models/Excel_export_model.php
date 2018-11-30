<?php
class Excel_export_model extends CI_Model
{
	 function fetch_data()
	 {
	  $this->db->order_by("tanggal_terima", "ASC");
	  $query = $this->db->get("s_masuk");
	  return $query->result();
	 }


	 function fetch_data2()
	 {
	  $this->db->order_by("id", "DESC");
	  $query = $this->db->get("s_keluar");
	  return $query->result();
	 }

 
}