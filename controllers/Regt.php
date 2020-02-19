<?php
class Regt extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Database_model');
		$this->load->library('upload');
        if($this->session->userdata('user_id')===NULL){
			redirect("/login/");
			}
		}
		public function index(){
				$data=array();
				$data['title']="New Registration";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('regis');
				$this->load->view('footer');
				}

			public function new_register(){
			if($this->input->post('register')!==NULL){
				if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'Assets/uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'].$user_id;
               // $config['max_size'] = 20000000000;
       			//$config['max_width'] = 150000000;
       			//$config['max_height'] =150000000;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            $data['picture']=$picture;
			$data['user_id']=$this->input->post('user_id');
			$data['first']=$this->input->post('first');
			$data['last']=$this->input->post('last');				            
			$data['date']=$this->input->post('date');
			$data['contact']=$this->input->post('contact');
			$data['dob']=$this->input->post('dob');
			$data['age']=$this->input->post('age');
			$data['address']=$this->input->post('address');
			$data['city']=$this->input->post('city');
			$data['state']=$this->input->post('state');
			$data['aadhar']=$this->input->post('aadhar');
			$data['email']=$this->input->post('email');
			$data['purpose']=$this->input->post('purpose');
		}            

			$run=$this->Database_model->insertbyarray("new",$data);
				if($run===true){
			    
				   // $_SESSION["userId"]=$user_id;	
					$dob=$this->input->post('dob');
					$where="`dob`='$dob'";
					$getpid=$this->Database_model->getlastdata("new",$where);
					echo $id=$pid=$getpid['id'];
					$msg="<div class='alert alert-success'><strong>Record Added Sucessfully Your ID IS'$pid' </strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/regt/print_pref/?id=$pid");
				}
			
			else{
				redirect("/regt/");
			}
		}		
		
				public function print_pref(){
			$table="new";
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
			$data['title']="";
			$data['result']=$result;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('prefcription2',$data);
			$this->load->view('footer');
		}
		public function print_pref2(){
			$table="new";
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
			$data['title']="";
			$data['result']=$result;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('prefcription3',$data);
			$this->load->view('footer');
		}
		public function print_blank(){
			
			$data=array();
			
			$data['title']="";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('blank_pref',$data);
			$this->load->view('footer');
		}
		public function editpatient(){
			$table="new";
			$id=$this->uri->segment(3);
			$where=array("id"=>$id);
			$regt=$this->Database_model->getsingledata($table,$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['regt']=$regt;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('editpatient',$data);
			$this->load->view('footer');
		}
		
		public function updateinfo(){
			if($this->input->post('updateinfo')!==NULL){
				if(!empty($_FILES['picture']['name'])){
					$config['upload_path'] = 'Assets/uploads/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['picture']['name'];
					// $config['max_size'] = 20000000000;
					//$config['max_width'] = 150000000;
					//$config['max_height'] =150000000;

					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('picture')){
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					}else{
						$picture = '';
					}
					$data['picture']=$picture;
				}else{
					$picture = '';
				}

			$data['address']=$this->input->post('address');
			$data['contact']=$this->input->post('contact');				            
			$data['email']=$this->input->post('email');
			$data['aadhar']=$this->input->post('aadhar');
			$data2['contact']=$this->input->post('contact');
			$data['purpose']=$this->input->post('purpose');
			$data2['purpose']=$this->input->post('purpose');

			//$data['']=$this->input->post('cphone');
			//$data['gname']=$this->input->post('gname');
			//$data['gaddress']=$this->input->post('gaddress');
			//$data['gstate']=$this->input->post('gstate');
			//$data['gphone']=$this->input->post('gphone');
			//$data['fin_amount']=$this->input->post('fin_amount');
			//$data['insamount']=$this->input->post('insamount');
			//$data['insdate']=$this->input->post('insdate');
			//$where=array("id='$id'");
			$id=$this->input->post('id');
//p_id=$this->input->post('p_id');	
			$where=array("id"=>$id);
			$where1=array("p_id"=>$id);
			$run=$this->Database_model->update("new",$data,$where);
			$run2=$this->Database_model->update("review",$data2,$where1);
				if($run===true && $run2==true){
					
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/regt/patientlist/$p_id");
				}
			}
			else{
				redirect("/regt/");
			}
		}
			
			public function patientlist(){
			$data=array();
			$data['title']="Patient-List";
			$count=20;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="new";
			$user_id=$_SESSION['user_id'];
			$where="user_id=$user_id";
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
			$url=base_url()."index.php/regt/patientlist/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('patientlist',$data);
			$this->load->view('footer');
		
			}
			function delete_single_user()  
      		{  
      		$table="new";
			$id=$this->uri->segment(3);
			$where="id=$id";
			$regt=$this->Database_model->delete($table,$where);
			$array=$this->Database_model->getrows($table,$where,$limit);
			//$this->load->model('Database_model');
			if($regt==true){
			
			$msg=($regt['id']) ."<div class='alert alert-info'><strong>Record Deleted Sucessfully</strong></div>";
			$arr=array("msg"=>$msg);
			$this->session->set_flashdata($arr);
			redirect("/regt/patientlist");
				}
			
			else{
				redirect("/regt/");
			}
		}
		public function checkcontact()
 {
 // $this->load->model('Search_model');
  if($this->Database_model->getcontact($_POST['contact'])){
   echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
   </i> This contact is already registered</span></label>';
  }
  else {
   echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Contact is available</span></label>';
  }
 	}	


}
			
?>
