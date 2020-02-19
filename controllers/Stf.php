<?php
class Stf extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="New Registration";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('staff');
				$this->load->view('footer');
				}
				
				
			public function staff_register(){
			if($this->input->post('register')!==NULL){
				//$user_id=$_SESSION['user_id'];
			$data['user_id']=$this->input->post('user_id');
			$data['name']=$this->input->post('name');			            
			$data['date']=$this->input->post('date');
			$data['address']=$this->input->post('address');
			$data['contact']=$this->input->post('contact');
			$data['aadhar']=$this->input->post('aadhar');
			$data['age']=$this->input->post('age');
			$data['salary']=$this->input->post('salary');
			$data['profile']=$this->input->post('profile');
			$run=$this->Database_model->insertbyarray("staff",$data);
				if($run===true){
					//$user_id=$this->input->('id');
					//$_SESSION["userId"]=$id;	
					$contact=$this->input->post('contact');
					$where="`contact`=$contact";
					$getptid=$this->Database_model->getlastdata("staff",$where);
					$pid=$getptid['id'];
					$msg="<div class='alert alert-success'><strong>Record Added Sucessfully Your ID IS'$pid' </strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/stf/");
				}
			}
			else{
				redirect("/stf/");
			}
		}
		public function editstaff(){
			$table="staff";
			$id=$this->uri->segment(3);
			$where=array("id"=>$id);
			$array=$this->Database_model->getsingledata($table,$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['array']=$array;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('staffrec',$data);
			$this->load->view('footer');
		}
		
		public function updatestaff(){
			if($this->input->post('updatestaff')!==NULL){
			$user_id=$this->input->post('user_id');
			$id=$this->input->post('id');
			$data['name']=$this->input->post('name');			            
			$data['date']=$this->input->post('date');
			$data['address']=$this->input->post('address');
			$data['contact']=$this->input->post('contact');		
			$data['aadhar']=$this->input->post('aadhar');
			$data['age']=$this->input->post('age');
			$data['salary']=$this->input->post('salary');
			$data['profile']=$this->input->post('profile');
			$where="`id`=$id and `user_id`='$user_id'";
			$run=$this->Database_model->update("staff",$data,$where);
				if($run===true){
				
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/stf/stafflist/");
				}
			}
			else{
				redirect("/stf/editstaff/?$id/");
			}
		}
			
			public function stafflist(){
			$data=array();
			$data['title']="Staff-List";
			$count=8;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="staff";
			$where=1;
			$query="";
				$pagefilters['query']=$query;
			
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (contact ='$query' or id ='$query')";
			}
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['query']=$query;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/stf/stafflist/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('stafflist',$data);
			$this->load->view('footer');
		
			}
					}
					
			
?>