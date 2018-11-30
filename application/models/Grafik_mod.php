<?php
class Grafik_mod extends CI_Model{

	function get_data(){ 
           $query = $this->db->query('SELECT SUBSTRING(tanggal, 1, 4) AS tanggal, COUNT(id) AS id FROM s_masuk GROUP BY SUBSTRING(tanggal, 1, 4)');
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data2(){ 
           $query = $this->db->query('SELECT SUBSTRING(tanggal, 1, 4) AS tanggal, COUNT(id) AS id FROM s_keluar GROUP BY SUBSTRING(tanggal, 1, 4)');
        if($query->num_rows() > 0){
            foreach($query->result() as $data2){
                $hasil[] = $data2;
            }
            return $hasil;
        }
    }
    
}