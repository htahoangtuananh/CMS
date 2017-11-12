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
        $this->load->view('SysAdmin/CP_index');
    }




//BRANCH SECTION

    public function manageBranch(){
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
        $this->load->view('SysAdmin/CP_manageField');
    }

    public function addBranch(){

        if(!$this->input->post()){
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_addField');
        }
    }




//LANG SECTION
    public function detailLang($lang_id)
    {
        if (!$this->input->post()) {
            if (empty($this->session->site_lang)) {

                $this->lang->load('message_lang', 'eng');
            } else {

                $this->lang->load('message_lang', $this->session->site_lang);
            }
            $data['language'] = $this->SysAdminModel->get_lang($lang_id);
            $data['lang'] = $this->lang->language;
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_detailLang', $data);
        }
        else{
            $post = $this->input->post();
            if(empty($post) || !is_array($post)){

                redirect('detailLang/'.$lang_id);
            }
            $translate_array = explode("&", $post['translate']);
            var_dump($translate_array);die();
        }
    }

    public function manageLang(){
        $data['lang'] = $this->SysAdminModel->get_lang_list();
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
        $this->load->view('SysAdmin/CP_manageLang',$data);
    }

    public function addLang(){
        $post = $this->input->post();

        if(empty($post) || !is_array($post)){
            redirect('SysAdmin/manageLang');
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
                redirect('SysAdmin/manageLang');
            }

            if($this->SysAdminModel->add_lang($post['lang_name'], $post['lang_acronym'])){

                $this->session->set_flashdata('message',$this->lang->line('Successfully add new language'));
                redirect('SysAdmin/manageLang');
            }
        }
    }




//NODE SECTION
    public function addNode(){

        if(!$this->input->post()){
            $this->load->view('header_CP');
            $this->load->view('SysAdmin/CP');
            $this->load->view('SysAdmin/CP_addNode');
        }
    }




//ADMIN SECTION
    public function manageAdmin(){
        $data['admins'] = $this->SysAdminModel->get_admin_list();
        $this->load->view('header_CP');
        $this->load->view('SysAdmin/CP');
        $this->load->view('SysAdmin/CP_manageAdmin',$data);
    }

    public function addAdmin(){
        $post = $this->input->post();

        if(empty($post) || !is_array($post)){
            redirect('SysAdmin/manageAdmin');
        }

        else{
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'username',
                    'rules' => 'trim|required|alpha_numeric'
                ),
                array(
                    'field' => 'password',
                    'label' => 'password',
                    'rules' => 'trim|required|min_length[7]'
                ),
                array(
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'trim|required|valid_email|is_unique[admin.email]'
                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE)
            {
                $this->form_validation->set_message($this->session->userdata('site_lang'),'Error input please check your input before submitting');
                redirect('SysAdmin/addAdmin');
            }
            else
            {

                $password = password_hash($post['password'], PASSWORD_BCRYPT);
                $is_sysAdmin = (isset($post['is_sysadmin']))? '1' : '0';
                $created_at = time();

                if ($this->SysAdminModel->add_admin($post['username'], $post['email'], $password, $is_sysAdmin, $created_at)) {

                    $this->session->set_flashdata('message', $this->lang->line('Successfully add new admin'));
                    redirect('SysAdmin/manageAdmin');
                }
            }
        }
    }




//COMMON SECTION
    public function handleAjax(){
        $post = $this->input->post();
        $this->SysAdminModel->handleAjax($post['id'],$post['table'],$post['enable']);
    }
}