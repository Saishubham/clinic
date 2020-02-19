<?php
class Mymodel extends CI_Model{
	public function File_upload($data){
		$query=$this->db->insert('review',$data);
		if($query){
			echo "File uploaded successfully";
		}
		else{
			echo "upload error";
		}
	}
}
?>