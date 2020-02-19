<?php
	class Database_model extends CI_Model{
		//image model
 private $_ID;
 private $_url;
 
    public function setID($ID) {
        $this->_ID = $ID;
    }
 
    public function setURL($url) {
        $this->_url = $url;
    }	
	// get image
    public function getPicture() {        
        $this->db->select(array('p.id', 'p.url'));
        $this->db->from('picture p');  
        $this->db->where('p.id', $this->_ID);     
        $query = $this->db->get();
       return $query->row_array();
    }
    // insert image
    public function create() { 
        $data = array(
            'url' => $this->_url,
        );
        $this->db->insert('picture', $data);
        return $this->db->insert_id();
    }
		public function insertbyquery($table,$columns,$values){
			$query="INSERT INTO $table ($columns) VALUES ($values)";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}

	public function leftjoin(){
			
		$run=$this->db->get("review","payment");
			
				$query="SELECT review.first, review.last, review.rdate, review.contact, payment.t_amount,payment.pay, payment.due, 
				FROM review LEFT JOIN payment ON review.p_id = payment.p_id ORDER BY review.p_id ";
				//if($limit!=""){
					//$query.=" limit $limit ";
					
				$run=$this->db->query($query);
			
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		
			
			
		public function selectmail($table,$values){
			$query="SELECT email FROM new WHERE email='$email'";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}
		public function selectbyquery($table,$values){
			$query="SELECT * FROM payment WHERE paydate = NOW()+1days";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}
		
		
		public function insertbyarray($table,$data){
			$run=$this->db->insert($table,$data);
			if($run){
				return true;
			}
		}
		public function delete($table,$where){
			$run=$this->db->delete($table,$where);
			if($run){
				return true;
			}
		}
		
	
		public function getrows($table,$where="",$limit=""){
			if($where==""){
				$run=$this->db->get($table);
			}
			else{
				$query="SELECT * from $table where $where";
				if($limit!=""){
					$query.=" limit $limit ";
					}
				$run=$this->db->query($query);
			}
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		public function getpayment($table,$where="",$limit=""){
			if($where==""){
				$run=$this->db->get($table);
			}
			else{
				$query="SELECT SUM(pay)FROM $table WHERE $where";
				if($limit!=""){
					$query.=" limit $limit ";
					}
				$run=$this->db->query($query);
			}
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		public function getrows_d($table,$where="",$limit=""){
			if($where==""){
				$run=$this->db->get($table);
			}
			else{
				$query="SELECT *from $table where $where";
				if($limit!=""){
					$query.=" limit $limit ";
					}
				$run=$this->db->query($query);
			}
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		public function getcount($table,$where){
			$query="SELECT count(*) as `count` from $table where $where";
			$run=$this->db->query($query);
			$result=$run->row_array();
			$count=$result['count'];
			return $count;
		}
			public function getcountmail($table,$where){
			$query="SELECT count(email) as `count` from $table where $where";
			$run=$this->db->query($query);
			$result=$run->row_array();
			$count=$result['count'];
			return $count;
		}
			public function getcount_m($table){
			$query="SELECT count(*) as `count` from $table where DATE = CURDATE( ) OR DATE>=(CURDATE()-INTERVAL 1 MONTH)";
			$run=$this->db->query($query);
			$result=$run->row_array();
			$count=$result['count'];
			
			return $count;
		}
		
		public function getsingledata($table,$where){
			$run=$this->db->get_where($table,$where);
			//$result=$run->result();
			$result=$run->row_array();
			
			return $result;
		}
		
		public function getlastdata($table,$where){
			$query="SELECT * from $table where $where order by `id` desc limit 1";
			$run=$this->db->query($query);
			$result=$run->row_array();
			return $result;
		}
		public function File_upload($data){
		$query=$this->db->insert('file_upload',$data);
		if($query){
			echo "File uploaded successfully";
		}
		else{
			echo "upload error";
		}
	}
		
		public function update($table,$data,$where){
			$this->db->set($data);
			$this->db->where($where);
			$run=$this->db->update($table);
			if($run){
				return true;
			}
		}

		public function delete_single_user()  
      {  
           $this->load->model("Database_model");  
           $this->Database_model->delete_single_user($_POST["id"]);  
           echo 'Data Deleted';  
      }  
      

 public function getcontact($contact){
$this->db->where('contact' , $contact);
$query = $this->db->get('new');
if($query->num_rows()>0){
   			return true;
  }
 else {
   		return false;
  	}	
 }

	}
	
?>