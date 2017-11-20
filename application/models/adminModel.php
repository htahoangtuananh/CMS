<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 9/5/2017
 * Time: 3:45 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create_admin($email,$password,$username){
        $data = [
            'email' => $email,
            'username' => $username,
            'password' => $password
        ];

        $this->db->insert('admin',$data);
    }

    public function get_branch_list($lang){
        $query = $this->db->select('*')
            ->from('branch')
            ->where('branch.lang',$lang)
            ->get()
            ->result_array();

        return $query;
    }

    public function get_enable_node_list($lang){
        $query = $this->db->select('*')
            ->from('node')
            ->where('node.lang',$lang)
            ->where('node.is_enable',1)
            ->get()
            ->result_array();

        return $query;
    }

    public function get_class_list($lang){
        $query = $this->db->select('*')
            ->from('classes')
            ->where('classes.lang',$lang)
            ->get()
            ->result_array();

        return $query;
    }

    public function get_lang_list(){
        $query = $this->db->select('*')
            ->from('language')
            ->get()
            ->result_array();

        return $query;
    }
}