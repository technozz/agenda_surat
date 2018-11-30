<?php
/**
* 
*/
class Login_mod extends CI_Model
{
	
	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}


	function totals_masuk(){ 
           $query = $this->db->query('SELECT COUNT(id) AS id FROM s_masuk');
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function totals_keluar(){ 
           $query = $this->db->query('SELECT COUNT(id) AS id FROM s_keluar');
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}