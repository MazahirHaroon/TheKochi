<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainctrl extends CI_Controller {
	public function index(){
		if($this->session->userdata('uid')){
			$data = $this->card->cData('/accountctrl');
			$this->load->view('pages/index',$data);         
	   }else{
		$data = $this->init->initPath('/mainctrl');
		$this->load->view('pages/login',$data);
	}
	}
	public function LoginProcess() {
		$this->load->model('User');
	 	$this->load->model('Init');
		$username =  $this->input->post('usernamer');
		$password =  $this->input->post('passwordr');
		$password = md5($password);
		//$user =  $this->post('login-name');
		//$username = $this->input->post('username');
		//$password = $this->input->post('password');
	 	log_message('info','$username '.$username);
	 	log_message('info','$password '.$password);
	 	 log_message('info','we are here');
		$data = $this->init->initPath('/mainctrl');
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
		$userData = $this->User->checkUser($username, $password);
		log_message('info',print_r($userData,TRUE));
		if ($userData['authStatus'] == 0) {
			log_message('info','ivade ethi');
			echo "incorrect username or password";
		}elseif ($userData['authStatus'] == 1) {
			log_message('info',"foooooo");
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
			echo $userData['fname'];
			exit;
		}elseif ($userData['authStatus'] == 3){
			echo "not_user";
		}
	}
		public function RegProcess()
		{
		log_message('info','fffcc');
		$this->load->model('User');
		$this->load->model('Init');
		$data = $this->init->initPath('/mainctrl');
		$fname = $this->input->post('fnamer');
		$username = $this->input->post('usernamer');
		$email = $this->input->post('emailr');
		$phone = $this->input->post('phoner');
		$password = $this->input->post('passwordr');
		$passwordm = $this->input->post('passwordrc');
		if($passwordm != $password){
			echo "Passwords do not match";
			log_message('info','pfdfdfwd');
		}else{
			$regData = $this->User->addUser($fname,$username,$email,$phone,$password);
			if($regData['regStatus'] == false){
				echo "Error creating account!, Please try again";
				log_message('info','pwd2');
			}elseif($regData['regStatus'] == true){
				echo $fname.","." Your Account Was Created Successfully! Please Login";
				log_message('info','pwd3czc4');
				exit;
			}
		}
	}

	public function main(){
		$data = $this->init->initPath('/mainctrl');
		$data += $this->session->userdata();
		if($this->session->userdata('loggedIn')){
			$this->load->view('pages/main',$data);
		}else{
			$this->load->view('pages/home',$data);
		}
	}
}
