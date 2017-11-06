<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct() 
    {
	   parent::__construct();
	   $this->load->helper('form');
	   $this->load->library('form_validation');
	   $this->load->library('session');
	   $this->load->model('model');
    }

	public function index()
    {
       $this->load->view('header');
       $this->load->view('home');
       $this->load->view('footer');
    }
}