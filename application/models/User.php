<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model{
     function __construct(){
          parent::__construct();
     }
     function checkUser($usr, $pwd){
          $this->db->select('*');
          $this->db->from ('users');
          $this->db->where('username', $usr);
          $this->db->where('status', 1);
          $query = $this->db->get ();
          if ($query->num_rows() > 0) {
              $this->db->select('*');
              $this->db->from ('users');
              $this->db->where('username', $usr);
              $this->db->where('password', $pwd);
              $this->db->where('status', 1);
              $query = $this->db->get ();
              if ($query->num_rows() > 0) {
                log_message('info','treurue');
                foreach ($query->result() as $row){
                  $userData['uid'] = $row -> uid;
                  $userData['name'] = $row -> username;
                  $userData['fname'] = $row -> fname;
                  log_message('info','name ='.$userData['name']);
                  $userData['authStatus'] = 1;
                }
              }
              else{
                log_message('info','wrong password');
                $userData['authStatus'] = 0;
          }
          }else{
                log_message('info','not_user');
                $userData['authStatus'] = 3;
          }
          log_message('info','done');
          log_message('info',$userData['authStatus'].'= Authstatus');
          log_message('info','last query '.$this->db->last_query());
          return $userData;
     }

    public function addUser($fname,$username,$email,$phone,$password)
      {
        $password = md5($password);
        $data = array(
          'username' => $username,
          'password' => $password,
          'fname' => $fname,
          'email' => $email,
          'mobile' => $phone,
          'status' => 1);
        $SQL = $this->db->insert_string('users', $data);
        $this->db->query($SQL);
        $this->db->select('*');
        $this->db->from ('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get ();
        if ($query->num_rows() > 0) {
          foreach ($query->result() as $row){
            $regData['uid'] = $row -> uid;
            $regData['regStatus'] = TRUE;
          }
        } else {
          $regData['regStatus'] = FALSE;
        }
        return $regData;
      }

        function checkExist($usr){
          $this->db->select('*');
          $this->db->from ('users');
          $this->db->where('username', $usr);
          $this->db->where('status', 1);
          $query = $this->db->get ();
          if ($query->num_rows() > 0) {
            foreach ($query->result() as $row){
              $userData['fname'] = $row -> fname;
              $userData['authStatus'] = TRUE;
            }
          } else {
              $userData['authStatus'] = FALSE;
          }
          log_message('info','last query '.$this->db->last_query());
          return $userData;
     }
}
