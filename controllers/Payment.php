<?php
class Payment extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Database_model');
		$this->load->library('upload');
        if($this->session->userdata('user_id')===NULL){
			redirect("/login/");
			}
		}
		
			public function pay()
			{
			$data=array();
			$data['title']="Payment";
			//$table="new";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('pay');
			$this->load->view('footer');
			}

			
			public function getptdisplay(){
			$data=array();
			$data['title']="Patient-display";
			$count=5;
			if($this->uri->segment('4')){ 
			$page=$this->uri->segment('4');
			 }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="payment";
			//$table2="payment";
			//$where2="insdate=CURDATE()";
			$where=1;
			$query="";
			if($this->input->get('query')!=NULL)
			{
				$query=trim($this->input->get('query'));
				$where.=" and (p_id = '$query')";
				$pagefilters['query']=$query;
			}
			else
			{
				$msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/payment/pay/');
					}
			$array2=$this->Database_model->getlastdata("payment","p_id='$query'");
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['array2']=$array2;
			$data['query']=$query;
			$data['rowcount']=$rowcount;
			$patient=$this->Database_model->getsingledata("payment","p_id = '$query' or id = '$query'");
			$data['rowcount']=$patient['id']-$offset;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/review/getptdisplay/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('payment_detail',$data);
			$this->load->view('footer');
		}

			public function editpay(){
			$table="payment";
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
			$this->load->view('editpay',$data);
			$this->load->view('footer');
		}

			public function updatepay(){
			if($this->input->post('updatepay')!==NULL){
			$p_id=$this->input->post('p_id');
			$id=$this->input->post('id');
			$data['insdate']=$this->input->post('insdate');
			$data['total']=$this->input->post('total');	
			$data['pay']=$this->input->post('pay');
			$data['due']=$this->input->post('due');		
			$where="`id`=$id";
			$run=$this->Database_model->update("payment",$data,$where);
				if($run===true){
				
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("payment/getptdisplay/?query=$p_id/");
				}
			}
			else{
				redirect("/payment/editpay/?$id/");
			}
		}
			
			function delete_single_rec()  
      		{  
      		$table="payment";
			$id=$this->uri->segment(3);
			$pid=$this->uri->segment(4);
			//$where=array("idss"=>$id);
			$where="`id`=$id and `p_id`=$pid";
			//$depts=$this->Database_model->getrows($table,$where="");
			$patients=$this->Database_model->delete($table,$where);
			//$this->load->model('Database_model');
			if($patients==true){
			
			$msg=($patients['id']) ."<div class='alert alert-info'><strong>Record Deleted Sucessfully</strong></div>";
			$arr=array("msg"=>$msg);
			$this->session->set_flashdata($arr);
			redirect("/payment/getptdisplay/?query=$pid");
				}
			
			else{
				redirect("/home/");
			}
		
		}

	}
		
?>