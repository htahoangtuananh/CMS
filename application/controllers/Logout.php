<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 9/14/2017
 * Time: 11:43 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->session->sess_destroy();
        redirect('Home');
    }
}