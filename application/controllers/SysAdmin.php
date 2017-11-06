<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 10:06 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property CI_Input $input
 */

class SysAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('adminModel');
        if ($this->session->admin_logged_in) {
            if($this->session->is_sysAdmin == 0){

                redirect('Admin');
            }
        }
        else{
            redirect('Authentication');
        }
    }

    public function index()
    {
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
    }

    public function manageBranch(){
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
        $this->load->view('SysAdmin/CP_manageField');
    }

    public function addLang(){
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
        $this->load->view('SysAdmin/CP_addLang');
    }

    public function addBranch(){

        if(!$this->input->post()){
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_addField');
        }
    }

    public function addNode(){

        if(!$this->input->post()){
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_addNode');
        }
    }
}