<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {
	
	public function __construct() 
 {
	 parent::__construct();
 }
	 public function validate_admin($username,$pass){
        $this->db->select('password');
        $this->db->from('admins');
        $this->db->where('admins.username',$username);
        $query=$this->db->get()->row_array();
        if(isset($query)){
            if(password_verify($pass,$query["password"])){
                $this->db->select('*');
                $this->db->from('admins');
                $this->db->where('admins.username',$username);
                $result=$this->db->get()->row_array();
                return $result;
            }
        }
     }

	public function validate_user($username,$pass){
        $this->db->select('password');
        $this->db->from('factory_account');
        $this->db->where('factory_account.username',$username);
        $query=$this->db->get()->row_array();
        if(isset($query)){
            if(password_verify($pass,$query["password"])){
                $this->db->select('username,factory_id');
                $this->db->from('factory_account');
                $this->db->where('factory_account.username',$username);
                $result=$this->db->get()->row_array();
                return $result;
            }
        }
    }
}