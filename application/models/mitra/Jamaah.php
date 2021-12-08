<?php 
 
class Jamaah extends CI_Model{
	
	function tampil_data(){
		return $this->db->query("SELECT * FROM tabel_jamaah WHERE idtabel_user='$_SESSION[id]'"); 

    }
}