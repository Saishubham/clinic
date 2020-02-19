<?php
class Payment extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="Payment";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('payment');
				$this->load->view('footer');
				}
				public function getid(){
			$data=array();
			$data['title']="update info";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getid',$data);
			$this->load->view('footer');
		}
		
		public function getcid(){
			if($this->input->post('payment')!==NULL){
			$table="new";
			$id=$this->input->post('id');
			$where=array("id"=>$id);
			$payment=$this->Database_model->getsingledata($table,$where);
			$totalins=$this->Database_model->getcount("payment","user_id='$id'");
			if($payment['insnum']==$totalins){
				
				$msg= "<div class='alert alert-info'><strong>INSTALLMENT COMPLETED</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/payment/getid/');
				}
				else{
			if($payment!==NULL){
			$ins_date=$payment['insdate'];
			$paydate=date('Y-m-d');
			 $expiry=$this->expiry_date($ins_date,$paydate);
			$insamount=$payment['insamount'];
			$latefine=$insamount*0.05;
			$latefine=$insamount*0.05*$expiry;
			//$payment['dues']=$dues;
			$payment['paydate']=$paydate;
			$payment['latefine']=$latefine;
			$payment['total_amount']=$insamount+$latefine;
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['payment']=$payment;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getcid',$data);
			$this->load->view('footer');
			}
			else{
				$msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/payment/getid/');
					}
				}
				}
			else{
				redirect('/payment/getid/');
				}
		} 
				
			public function get_payment(){
			if($this->input->post('pay')!==NULL){
			$data['user_id']=$this->input->post('id');	
			$data['cname']=$this->input->post('cname');
			$data['cphone']=$this->input->post('cphone');
			$data['caddress']=$this->input->post('caddress');
			$data['fin_amount']=$this->input->post('fin_amount');
			$data['insamount']=$this->input->post('insamount');
			$data['insdate']=$insdate=$this->input->post('insdate');
			$data['paydate']=$this->input->post('paydate');
			$data['latefine']=$this->input->post('latefine');
			$data['total_amount']=$this->input->post('total_amount');
			$data['mode']=$this->input->post('mode');	
			$data['bank']=$this->input->post('bank');	
			$run=$this->Database_model->insertbyarray($table="payment",$data);
			$data=array();
			$data['title']="get_payment";
			//$data['payment']=$payment;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getcid',$data);
			$this->load->view('footer');
			if($run===true){
					$nextdate=date("Y-m-d",strtotime($insdate." +1 month"));
					$data1['insdate']=$nextdate;
					$user_id=$this->input->post('id');	
					$where="`id`='$user_id'";
					$reg=$this->Database_model->update("new",$data1,$where);
					$getpid=$this->Database_model->getlastdata("payment","`user_id`='$user_id'");
					$pid=$getpid['id'];
					$msg= "Payment successfully";
					$arr=array("msg"=>$msg);
					//$this->session->set_flashdata($arr);
					redirect("/payment/print_invoice/?id=$pid");
			
			}
				
			}
			
			//else{
				//redirect("/getcid/");
			//}
		}
		
	
	public function expiry_date($ins_date,$paydate){
				$ins_date=strtotime($ins_date);
				$paydate=strtotime($paydate);
				if($ins_date<$paydate){
					$diff=$paydate-$ins_date;
					echo $x=abs(floor($diff/(60*60*24)));
					return $x;
				}
				
				/*if($td>$exp){
					$diff=$td-$exp;
					$x=abs(floor($diff/(60*60*24)));
					echo"product expire after days:".$x;
					}
					else{
						$diff=$td-$exp;
					$x=abs(floor($diff/(60*60*24)));
					echo"expire after days:".$x;
					}*/
				
				}						
			public function getinslist(){
			$data=array();
			$data['title']="Installment-list";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getinslist',$data);
			$this->load->view('footer');
			}
		
			public function getinsdisplay(){
			$data=array();
			$data['title']="Installment-display";
			$count=5;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="payment";
			$where=1;
			$query="";
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (cphone = '$query' or user_id = '$query')";
				$pagefilters['query']=$query;
			}
			else{
				$msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/payment/getinslist/');
					}
			
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['query']=$query;
			$payment=$this->Database_model->getsingledata("new","cphone = '$query' or id = '$query'");
			$data['rowcount']=$payment['insnum']-$offset;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/payment/getinsdisplay/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('installment',$data);
			$this->load->view('footer');
		}
				//public function getinvoice(){
//			$data=array();
//			$data['title']="update info";
//			$this->load->view('header',$data);
//			$this->load->view('nav');
//			$this->load->view('getid',$data);
//			$this->load->view('footer');
//		}
			
			public function print_invoice(){
			$table="payment";
			//$_SESSION['id']=$id;
			//$where=$user_id=('user_id');
			//$where=array("user_id"=>$user_id);
			//$where=1;
			$id=$this->input->get('id');
			$where=array("id"=>$id);
			$result=$this->Database_model->getsingledata($table,$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			//$data['$user_id']=$user_id;
			$data['title']="INVOICE";
			$data['result']=$result;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('invoice',$data);
			$this->load->view('footer');
		}
		
				
			
			public function expiry(){
			$data=array();
			$data['title']="expiry";
			$count=10;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="new";
			$nextdate=date("Y-m-d",strtotime(" +1 day"));
			$where="insdate='$nextdate'" ;
			$array=$this->Database_model->getrows($table,$where,$limit);
			$array1=$this->Database_model->getrows("payment","paydate",$limit);

			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['array1']=$array;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/payment/expiry/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('expiry',$data);
			$this->load->view('footer');
		
			}

			function delete_single_rec()  
      		{  
      		$table="payment";
			$id=$this->uri->segment(4);
			$wheress=array("id"=>$id);
			$patients=$this->Database_model->delete($table,$where);
			//$this->load->model('Database_model');
			if($patients==true){
			
			$msg=($patients['id']) ."<div class='alert alert-info'><strong>Record Deleted Sucessfully</strong></div>";
			$arr=array("msg"=>$msg);
			$this->session->set_flashdata($arr);
			redirect("/home/");
				}
			
			else{
				redirect("/home/");
			}
		}
		
						}

?>