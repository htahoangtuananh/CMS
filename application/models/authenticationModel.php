<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 9/6/2017
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class authenticationModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function validate_admin($username,$pass){
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('admin.username',$username);
        $query=$this->db->get()->row_array();
        if(isset($query)){
            if(password_verify($pass,$query["password"])){
                $this->db->select('*');
                $this->db->from('admin');
                $this->db->where('admin.username',$username);
                $result=$this->db->get()->row_array();
                return $result;
            }
        }
    }
}