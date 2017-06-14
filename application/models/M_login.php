<?php 
 
class M_login extends CI_Model{	
	public function __construct(){
		$this->load->database();
	}
	
	function cek($username, $password){	
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('admin');
		if($result->num_rows()==1){
			return $result->row(0)->Id;
		}else{
			return false;
		}
		
	}	
} 
?>