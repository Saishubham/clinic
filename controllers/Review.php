
<?php
class Review extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			$this->load->helper('url');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="Review";
				$this->load->view('header',$data);
				$this->load->view('nav');
				//$this->load->view('email_form');
				$this->load->view('footer');
				//$this->load->view('email/contact');
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
			if($this->input->post('review')!==NULL){
			$table="new";
			$user_id=$_SESSION['user_id'];

			$id=$this->input->post('id');
			$where="id=$id and user_id=$user_id";
			$review=$this->Database_model->getsingledata($table,$where);
			if($review!==NULL){
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['review']=$review;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getcid',$data);
			$this->load->view('footer');
			}
			else{
				$msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/review/getid/');
					}
			}
			else{
				redirect('/review/getid/');
				}
		} 

				public function get_review(){
			if($this->input->post('rew')!==NULL){
			$rev_date=date('Y-m-d');
			$data['user_id']=$this->input->post('user_id');
			$data2['user_id']=$this->input->post('user_id');
			$data['rev_date']=$rev_date;
			$data['p_id']=$this->input->post('id');	
			$data2['p_id']=$this->input->post('id');	
			$data['first']=$this->input->post('first');
			$data['last']=$this->input->post('last');
			$data2['first']=$this->input->post('first');
			$data2['last']=$this->input->post('last');
			$data['rdate']=$this->input->post('rdate');
			$data['contact']=$this->input->post('contact');
			$data['email']=$this->input->post('email');		
			$data['purpose']=$this->input->post('purpose');	
			$data['rewdate']=$this->input->post('rewdate');
			$data['address']=$this->input->post('address');
			$data['status']=$this->input->post('status');
			//$data['total']=$this->input->post('total');
			//$data['pay']=$this->input->post('pay');
			//$data['due']=$this->input->post('due');
			$data2['t_amount']=$this->input->post('t_amount');
			$data2['fee']=$this->input->post('fee');
			$data2['total']=$this->input->post('total');
			$data2['pay']=$this->input->post('pay');
			$data2['due']=$this->input->post('due');
			$data2['insdate']=$this->input->post('insdate');
			$run=$this->Database_model->insertbyarray($table="review",$data);
			$run2=$this->Database_model->insertbyarray($table="payment",$data2);
			$data=array();
			//$data['title']="get_review";
			//$data['review']=$review;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getcid',$data,$data2);
			$this->load->view('footer');
			if($run && $run2===true){
					//$user_id=$this->input->post('id');	
					//$where="`id`='$user_id'";
					//$reg=$this->Database_model->update("new",$data1,$where);
					//$getpid=$this->Database_model->getlastdata("review","`user_id`='$user_id'");
					//$pid=$getpid['id'];
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("review/getid/");
			
			}
				
			}
			
			else{
				redirect("/getcid/");
			}
		}
		
	
	public function expiry_date($date,$rewdate){
				$date=strtotime($date);
				$rewdate=strtotime($rewdate);
				if($date<$rewdate){
					$diff=$rewdate-$date;
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
			public function getptlist(){
			$data=array();
			$data['title']="Patient-list";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('getptlist',$data);
			$this->load->view('footer');
			}
		
			public function getptdisplay(){
			$data=array();
			$data['title']="Patient-display";
			$count=50;
			if($this->uri->segment('4')){ 
			$page=$this->uri->segment('4');
			 }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="review";
			//$table2="payment";
			//$where2="insdate=CURDATE()";
			$where=1;
			$query="";
			if($this->input->get('query')!=NULL)
			{
				$query=trim($this->input->get('query'));
				$where.=" and (p_id = '$query' or contact='$query')";
				$pagefilters['query']=$query;
			}
			else
			{
				$msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect('/review/getptlist/');
					}
			
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			//$data['array2']=$array2;
			$data['query']=$query;
			$patient=$this->Database_model->getsingledata("new","contact = '$query' or id = '$query'");
			$data['rowcount']=$patient['id']-$offset;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/review/getptdisplay/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('casereview',$data);
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
			$table="review";
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
			$data['title']="Next Appointment";
			$count=10;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="review";
			$nextdate=date("Y-m-d",strtotime(" +1 day"));
			$where="rewdate='$nextdate'" ;
			$array=$this->Database_model->getrows($table,$where,$limit);
			//print_r($array=$this->Database_model->getrows("review","rewdate",$limit));

			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			//$data['array1']=$array;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/review/expiry/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('expiry',$data);
			$this->load->view('footer');
		
			}
			
			
			public function appointment(){
			$data=array();
			$data['title']="Appointment-List";
			$count=3;
			$rewdate=$this->uri->segment(4);
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="review";
			$user_id=$_SESSION['user_id'];
			$where=" ";
			$query="";
				$pagefilters['query']=$query;
			
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (rewdate ='$query' )";
			}
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['query']=$query;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/review/appointment/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('appointment',$data);
			$this->load->view('footer');
		
			}
			
			public function message()
	{
		//$this->form_validation->set_rules('sendTo', 'Mobile number', 'trim|required|regex_match[/^[0-9]{10}$/]');
		//$this->form_validation->set_rules('message', 'Text Message', 'trim|required');
		//if ($this->form_validation->run() == FALSE) 
		//{
		     $data=array();
		     $contact=$this->uri->segment(3);
			$data['title']="Send Sms";
			$table="review";
			//$nextdate=date("Y-m-d",strtotime(" +1 day"));
			$where="contact='$contact'" ;
			$array=$this->Database_model->getrows($table,$where);
			$result=$this->Database_model->getsingledata($table,$where);
			$data['array']=$array;
			$data['result']=$result;
			$this->load->view('header',$data);
			$this->load->view('nav');
		    $this->load->view('message_form',$data);	
			$this->load->view('footer');
		}
		//} 
		//else 
		//{
			public function sendsms(){
			$to = $this->input->post('sendTo');
			$message = $this->input->post('message');
			if($to) {
				if($this->msg91->send($to, $message) == TRUE)  {
					$this->session->set_flashdata('update_status', '
						<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong><i class="dripicons-checkmark"></i> Hooray!</strong> Message Sent.
					</div>');
					redirect('review/message','refresh');
				}
				 else 
				 {
					$this->session->set_flashdata('update_status', '
						<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong><i class="dripicons-checkmark"></i> Oops!</strong> Message  not sent.
					</div>');
					redirect('review/message','refresh');
				}
			}
			
		//}
		
			
	}
	
	
				public function email(){
				$data=array();
				$data['title']="Send Email";
				$table="review";
			$nextdate=date("Y-m-d",strtotime(" +1 day"));
			$where="rewdate='$nextdate'" ;
			$array=$this->Database_model->getrows($table,$where);
			//print_r($array=$this->Database_model->getrows("review","rewdate",$limit));

			//$rowcount=$this->Database_model->getcount($table,$where);
			//$pages=ceil($rowcount/$count);
			$data['array']=$array;
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('email_form',$data);
				$this->load->view('footer');
				}
					public function greetemail(){
				$data=array();
				$data['title']="Send Greeting Email";
				$table="new";
			$where=1;
			$array=$this->Database_model->getrows($table,$where);
			//print_r($array=$this->Database_model->getrows("review","rewdate",$limit));

			//$rowcount=$this->Database_model->getcount($table,$where);
			//$pages=ceil($rowcount/$count);
			$data['array']=$array;
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('greeting_mail');
				$this->load->view('footer');
				}
			public function sendemail(){
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$email = $this->input->post('email');

	   	$config = Array(
	  		'protocol' => 'smtp',
	  		'smtp_host' => 'ssl://smtp.googlemail.com',
	  		'smtp_port' => 465,
	  		'smtp_user' => 'saisofttechera@gmail.com', // change it to yours
	  		'smtp_pass' => 'Shubham@sai', // change it to yours
	  		'mailtype' => 'html',
	  		'charset' => 'iso-8859-1',
	  		'wordwrap' => TRUE
		);

	    $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    $this->email->from($config['smtp_user']); // change it to yours
	    $this->email->to($email);// change it to yours
	    $this->email->subject($subject);
	    $this->email->message($message);
	    if($this->email->send()){
	    	$this->session->set_flashdata('message', 'Email sent');
	    }
	    else{
	    	$this->session->set_flashdata('message', show_error($this->email->print_debugger()));
	     	
	    }

	    redirect('/review/email/');

	}
        
        function delete_single_rev()  
      		{  
      		$table="review";
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
			redirect("/review/getptdisplay/?query=$pid");
				}
			
			else{
				redirect("/home/");
			}
		
		}
  			 function edit_rev()  
      		{  
      		
			$table="review";
			$id=$this->uri->segment(3);
			$p_id=$this->uri->segment(4);
			$where="id=$id and p_id=$p_id";
			$regt=$this->Database_model->getsingledata($table,$where);
			$regt2=$this->Database_model->getsingledata("payment",$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['regt']=$regt;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('edit_rev',$data);
			$this->load->view('footer');
		}

		function update_rev()
		{
			if($this->input->post('update_rev')!==NULL){
			$data['first']=$this->input->post('first');
			$data['last']=$this->input->post('last');				            
			$data['contact']=$this->input->post('contact');
			$data['status']=$this->input->post('status');
			$data['rewdate']=$this->input->post('rewdate');
		//	$data['pay']=$this->input->post('pay');
		//	$data['due']=$this->input->post('due');
			//$data['gstate']=$this->input->post('gstate');
			//$data['gphone']=$this->input->post('gphone');
			//$data['fin_amount']=$this->input->post('fin_amount');
			//$data['insamount']=$this->input->post('insamount');
			//$data['insdate']=$this->input->post('insdate');
			//$where=array("id='$id'");
			$id=$this->uri->segment(3);
			$p_id=$this->uri->segment(4);	
			$where="id=$id and p_id=$p_id";
			$run=$this->Database_model->update("review",$data,$where);
			//$run2=$this->Database_model->update("payment",$data,$where);
				if($run===true){
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/review/getptdisplay/?query=$p_id/");
				}
			}
			else{
				redirect("/review/getptdisplay/?query=$p_id/");
			}
		}


  
   
	
		
						}

?>