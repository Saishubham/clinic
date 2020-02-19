<?php
class Manage extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Database_model');
		$this->load->library('javascript');
		if($this->session->userdata('user_id')===NULL){
			redirect("/login/");
			}
		}

			public function cmanage(){
			$data=array();
			$data['title']="Clinic Management";
			$table="new";
			$table2="review";
			$where4="rev_date=CURDATE( )";
			$where=1;
			$where1="DATE =CURDATE( )" ;
			$where2="DATE>=(CURDATE()-INTERVAL 1 MONTH)";
			$where3="DATE =YEAR(CURDATE( ))";
			//$=$currentdate;
			//$limit="$offset,$count";

			//$table2="payment";
//columns="pay";
			$where10="insdate=CURDATE( )";
		
			$array8=$this->Database_model->getpayment("payment",$where10);
			
			
			
			$array=$this->Database_model->getrows_d("new",$where);
			$array1=$this->Database_model->getrows_d("new",$where1);
			$array2=$this->Database_model->getrows_d("new",$where2);
			$array3=$this->Database_model->getrows_d("new",$where3);
			$array4=$this->Database_model->getrows_d("review",$where4);
			$array5=$this->Database_model->getrows_d("review",$where);
			$array6=$this->Database_model->getrows_d("new",$where);
			$array10=$this->Database_model->getrows_d("payment",$where10);
			$array7=$this->Database_model->getrows_d("staff",$where);
			$rowcount1=$this->Database_model->getcount("new",$where1);
			$rowcount=$this->Database_model->getcount("new",$where);
			$rowcount2=$this->Database_model->getcount("new",$where2);
			$rowcount3=$this->Database_model->getcount("new",$where3);
			$rowcount4=$this->Database_model->getcount("review",$where4);
			$rowcount5=$this->Database_model->getcount("review",$where);
			$rowcount6=$this->Database_model->getcountmail("new",$where);
			$rowcount7=$this->Database_model->getcount("staff",$where);
			$rowcount8=$this->Database_model->getcount("payment",$where10);
			//$where="id=$id";
			//$pages=ceil($rowcount/$count);
			//$data['pages']=$pages;
			//$this->load->library('paging');
			$query="";
				//$pagefilters['query']=$query;
			
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (contact ='$query' or id ='$query')";
			}
			
			//$data['rowcount']=$rowcount;
			$data['array']=$array;
			$data['array1']=$array1;
			$data['array2']=$array2;
			$data['array3']=$array3;
			$data['array4']=$array4;
			$data['array5']=$array5;
			$data['array6']=$array6;
			$data['array7']=$array7;
			$data['array8']=$array8;
			$data['array10']=$array10;
			$data['rowcount']=$rowcount;
			$data['rowcount1']=$rowcount1;
			$data['rowcount2']=$rowcount2;
			$data['rowcount3']=$rowcount3;
			$data['rowcount4']=$rowcount4;
			$data['rowcount5']=$rowcount5;
			$data['rowcount6']=$rowcount6;
			$data['rowcount7']=$rowcount7;
			$data['rowcount8']=$rowcount8;
			//$data['pagefilters']=$pagefilters;
			$url=base_url()."index.php/manage/cmanage/";
			//$paging=$this->paging->createpaging($url,$page,$pagefilters);
			//$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('cmanage',$data);
			//$this->load->view('mail_list',$data);
            $this->load->view('footer');
					
	}
		public function cmanage_print(){
			$data=array();
			$data['title']="Clinic Management";
			$table="new";
			$table2="review";
			$table3="payment";
			$where4="rev_date=CURDATE( )";
			$where5="insdate=CURDATE()";
			$where=1;
			$where1="DATE =CURDATE( )" ;
			//$where5="rdate =CURDATE( )" ;
			$where2="DATE>=(CURDATE()-INTERVAL 1 MONTH)";
			$where3="DATE =YEAR(CURDATE( ))";
			//$=$currentdate;
			//$limit="$offset,$count";
			$array=$this->Database_model->getrows_d("new",$where);
			$array1=$this->Database_model->getrows_d("new",$where1);
			$array2=$this->Database_model->getrows_d("new",$where2);
			$array3=$this->Database_model->getrows_d("new",$where3);
			$array4=$this->Database_model->getrows_d("review",$where4);
			$array5=$this->Database_model->getrows_d("review",$where);
			$array6=$this->Database_model->getrows_d("new",$where);
			$array7=$this->Database_model->getrows_d("staff",$where);
			$array8=$this->Database_model->getrows_d("payment",$where5);
			$rowcount1=$this->Database_model->getcount("new",$where1);
			$rowcount=$this->Database_model->getcount("new",$where);
			$rowcount2=$this->Database_model->getcount("new",$where2);
			$rowcount3=$this->Database_model->getcount("new",$where3);
			$rowcount4=$this->Database_model->getcount("review",$where4);
			$rowcount5=$this->Database_model->getcount("review",$where);
			$rowcount6=$this->Database_model->getcountmail("new",$where);
			$rowcount7=$this->Database_model->getcount("staff",$where);
			//$where="id=$id";
			//$pages=ceil($rowcount/$count);
			//$data['pages']=$pages;
			//$this->load->library('paging');
			$query="";
				//$pagefilters['query']=$query;
			
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (contact ='$query' or id ='$query')";
			}
			
			//$data['rowcount']=$rowcount;
			$data['array']=$array;
			$data['array1']=$array1;
			$data['array2']=$array2;
			$data['array3']=$array3;
			$data['array4']=$array4;
			$data['array5']=$array5;
			$data['array6']=$array6;
			$data['array7']=$array7;
			$data['array8']=$array8;
			$data['rowcount']=$rowcount;
			$data['rowcount1']=$rowcount1;
			$data['rowcount2']=$rowcount2;
			$data['rowcount3']=$rowcount3;
			$data['rowcount4']=$rowcount4;
			$data['rowcount5']=$rowcount5;
			$data['rowcount6']=$rowcount6;
			$data['rowcount7']=$rowcount7;
			//$data['pagefilters']=$pagefilters;
			$url=base_url()."index.php/manage/cmanage/";
			//$paging=$this->paging->createpaging($url,$page,$pagefilters);
			//$data['paging']=$paging;
			// include autoloader
         //require_once("dompdf/autoload.inc");

			$this->load->view('cmanage_print',$data);
			
        
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
 
        $this->load->library('Pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("Clinic_records.pdf", array("Attachment"=>1));
    
			$this->load->view('header',$data);
			$this->load->view('nav');
			//$this->load->view('cmanage',$data);
			//$this->load->view('mail_list',$data);
            $this->load->view('footer');
					
	}
			
			public function patientlist(){
			$data=array();
			$data['title']="Patient-List";
			$count=8;
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
				$where.=" and (contact ='$query' or id ='$query' or first ='$query' or date ='$query')";
			}
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['query']=$query;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/manage/patientlist/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('patientlist',$data);
			$this->load->view('footer');
		
				}
					
			
	

	}


?>
