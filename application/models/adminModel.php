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


}