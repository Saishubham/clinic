<?php
	class Home extends CI_Controller{
	//if($this->session->userdata('user_id')===NULL){
		public function __construct(){
		parent::__construct();
		$this->load->model('Database_model');
		$this->load->library('javascript');
		if($this->session->userdata('user_id')===NULL){
			redirect("/login/");
			}
		}
	
			public function index(){	
			$data=array();
			$data['title']="Home";
			//$table="new";

			$table2="payment";
//columns="pay";
			$where="insdate=CURDATE( )";
		
			$array=$this->Database_model->getpayment("payment",$where);
			
			$data['array']=$array;
			
			$url=base_url()."index.php/home/home/";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}

}
?>