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
 * @property CI_Form_validation $form_validation
 * @property CI_Lang $lang
 */

class SysAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('SysAdminModel');
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
        if(!$this->input->post()) {
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_addLang');
        }
        else{
            $post = $this->input->post();

            if(empty($post) || !is_array($post)){
                redirect('SysAdmin/addLang');
            }

            else{
                $config = array(
                    array(
                        'field' => 'lang_name',
                        'label' => 'lang_name',
                        'rules' => 'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE)
                {
                    $this->form_validation->set_message($this->session->userdata('site_lang'),'Error input please check your input before submitting');
                    redirect('SysAdmin/addLang');
                }

                if($this->SysAdminModel->add_lang($post['lang_name'], $post['lang_acronym'])){

                    $this->session->set_flashdata('message',$this->lang->line('Successfully add new language'));
                    redirect('SysAdmin/addLang');
                }
            }
        }
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