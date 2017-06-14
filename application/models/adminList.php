<?php

class adminList extends Model
{
	
	function validasi()
	{
		$this->db->where('username',
			$this->input->post('username'));
		$this->db->where('password',
			$this->input->post('password'));
		$ambil = $this->db->get('memberlist');

		if($ambil->num_rows == 1){
			return true;
		}
	}
}
?>