<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('user_id')!==NULL){
			redirect("/home/");
			}
		$data=array();
		$data['title']="Login";
		$this->load->view('header',$data);
		$this->load->view('nav');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function validate_login(){
		$autoload['model'] = array('Login_model'=>'login');
		if($this->input->post('login')!==NULL){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->load->model('Login_model');
			$data['username']=$username;
			$data['password']=$password;
			$array=$this->Login_model->login($data);
			if(is_array($array)){
				$user_id=$array['id'];
				//$_SESSION['user_id']=$user_id;
				$this->session->set_userdata("user_id",$user_id);
				redirect("/manage/cmanage/");
			}
			else{
				echo $array;
			}
		}
		else{
			redirect("/login/");
		}
	}
	
	public function logout(){
		$this->session->unset_userdata("user_id");
		redirect("/login/");
	}
}
