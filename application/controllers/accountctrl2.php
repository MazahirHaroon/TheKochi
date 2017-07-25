<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accountctrl extends CI_Controller {
	public function index($acc= NULL){
		if($acc!=NULL){
		$this->load->model('User');
	 	$this->load->model('Init');
		$data = $this->init->initPath('/accountctrl');
		$userData = $this->User->checkExist($acc);
		log_message('info',print_r($userData,TRUE));
		if ($userData['authStatus'] == FALSE) {
			redirect(base_url(),'pages/404','refresh');
		}elseif ($userData['authStatus'] == TRUE) {
			$this->load->library('session');
			$newdata = array(
				'uid'  => $userData['uid'],
				'name'  => $userData['name'],
				'fname'  => $userData['fname'],
				'loggedIn' => TRUE
			);
			$this->session->set_userdata($newdata);
			log_message('info',print_r($_SESSION,TRUE));
			log_message('info','blaaa');
			log_message('info',print_r($userData,TRUE));
			echo $userData['name'];

		}

		if($this->session->userdata('uid')){
			log_message('info','acc = '.$acc);
	        $data = $this->init->initPath('/accountctrl');
			$this->load->view('pages/index',$data);         
	   }else{
	   	redirect(base_url(),'mainctrl','refresh');
	   }    		 
	   }   		
	public function home(){
		$data = $this->init->initPath('/accountctrl');
		$this->load->view('pages/home',$data);
	}
	public function logout() {
	$this->load->model('User');
	$this->load->model('Init');
	$data = $this->Init->initPath ('/accountctrl');
	// Destroy session data
	$this->session->sess_destroy();
	redirect(base_url(),'mainctrl','refresh');
	}
	}
