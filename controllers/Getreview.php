<?php
class Review extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="Get-Review";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('getreview');
				$this->load->view('footer');
				}
				
				//public function get_info(){
//					if($this->input->post('getpayment')!==NULL){
//			$data['ins_amount']=$this->input->post('ins_amount');
//			$data['transno']=$this->input->post('transno');				            
//			$data['transdate']=$this->input->post('transdate');
//			$run=$this->Database_model->insertbyarray("payment",$data);
//				if($run===true){
//					$msg= "added successfully";
//					$arr=array("msg"=>$msg);
//					$this->session->set_flashdata($arr);
//					redirect("/payment/");
//				}
//			}
//			else{
//				redirect("/payment/");
//			}
//		}
		public function getreview(){
			
			$table="new";
			if($this->input->post('getreview')!==NULL){
			$id=$this->uri->segment(3);
			$where=array("id"=>$id);
			$getid=$this->Database_model->getsingledata($table,$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['getid']=$getid;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getreview',$data);
			$this->load->view('footer');
		}

		}
		}
					
			
?>