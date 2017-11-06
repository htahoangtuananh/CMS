<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 9/1/2017
 * Time: 3:50 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class registerModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add_registration($json){
        $this->db->insert('user_registration',['registration'=>$json]);
    }

    public function get_unread_registration()
    {
        $this->db->select("status")
            ->from("user_registration")
            ->where("status",0);
        $query=$this->db->get()->result_array();
        return count($query);
    }
}