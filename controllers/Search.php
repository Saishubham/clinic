<?php
class Search extends CI_controller{
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
            $data['title']="=appoitment info";
            $this->load->view('header',$data);
            $this->load->view('nav');
            $this->load->view('select_form');
            $this->load->view('footer');
        }


        public function getappoint(){
            if($this->input->post('getappoint')!==NULL){
            $table="review";
            $user_id=$_SESSION['user_id'];
            $date_from=$this->input->post('date_from');
            $date_to=$this->input->post('date_to');
            $where="`rewdate` BETWEEN  '$date_from' AND  '$date_to'";
           // $review1=$this->Database_model->getsingledata($table,$where);
          
            $this->load->model('Database_model');
            $review=$this->Database_model->getrows($table,$where);
              if($review!==NULL){
            $data=array();
            $data['title']="update info";
            $data['review']=$review;
            $this->load->view('header',$data);
            $this->load->view('nav');
            $this->load->view('appointment_list',$data);
            $this->load->view('footer');
            }
            else{
                $msg= "<div class='alert alert-info'><strong>No id found</strong></div>";
                    $arr=array("msg"=>$msg);
                    $this->session->set_flashdata($arr);
                    redirect('/search/');
                    }
            }
            else{
                redirect('/search/');
                }
        } 
    }

?>