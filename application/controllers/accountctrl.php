<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accountctrl extends CI_Controller {
	public function index($acc= NULL){
		$this->load->model('User');
	 	$this->load->model('Init');
		if($acc!=NULL)
			{ //if user typed an acc name
			log_message('info','account_nam = '.$acc);
			$data = $this->init->initPath('/accountctrl');
			$userData = $this->User->checkExist($acc);
			log_message('info',print_r($userData,TRUE));
			if ($userData['authStatus'] == FALSE)
				{ //if acc does not exist
					log_message('info','account no exist');
					$data = $this->init->initPath('/accountctrl');
					$this->load->view('pages/404',$data); 
			}elseif ($userData['authStatus'] == TRUE)
				{ //if acc exist
				//log_message('info','nkjn');
					log_message('info','exist');
				if($this->session->userdata('uid')){ //if acc session exist
					 if($userData['fname'] == $_SESSION['fname']){
						$data = $this->init->initPath('/accountctrl');
						$this->load->view('pages/profile',$data);
					 }else{
					 	$data = $this->init->initPath('/accountctrl');
							$visitor = array(
								'vid'  => $acc,
								);
						$this->session->set_userdata($visitor);
						$this->load->view('pages/loginindex',$data);
					 } 
				}else{ // if acc session does not exist
					$data = $this->init->initPath('/accountctrl');
					$visitor = array(
								'vid'  => $acc,
								);
					$this->session->set_userdata($visitor);
					$this->load->view('pages/logoutindex',$data); 
				}
			}
		}else
		{//if user did not type acc name
			if($this->session->userdata('uid')){

			    $data = $this->init->initPath('/accountctrl');
				$this->load->view('pages/index',$data);         
	   		}else{
				$data = $this->init->initPath('/mainctrl');
				$this->load->view('pages/login',$data);
			}
		}
	}

	public function profile(){
		$data = $this->init->initPath('/accountctrl');
		$this->load->view('pages/profile',$data);
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
