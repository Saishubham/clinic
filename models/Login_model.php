<?php
	class Login_model extends CI_Model{
		public function login($data){
			$run=$this->db->get_where("users",$data);
			if($run->num_rows()==1){
				$result=$run->row_array();
				return $result;
			}
			else{
				return "Username or Password is wrong!";
			}
		}
	}
?>