<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/30/2017
 * Time: 4:24 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property adminModel $adminModel
 */

class Admin extends CI_Controller {

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

    public function listClass()
    {
        $lang = $this->session->site_lang;
        $dataLayout['branch'] = $this->adminModel->get_branch_list($lang);
        $dataLayout['node'] = $this->adminModel->get_enable_node_list($lang);
        $data['lang'] = $this->adminModel->get_lang_list();
        $data['class'] = $this->adminModel->get_class_list($lang);
        $this->load->view('header_CP');
        $this->load->view('Admin/CP',$dataLayout);
        $this->load->view('Admin/CP_listClass', $data);
    }

    public function addClass()
    {
        $lang = $this->session->site_lang;
        $dataLayout['branch'] = $this->adminModel->get_branch_list($lang);
        $dataLayout['node'] = $this->adminModel->get_enable_node_list($lang);
        $data['lang'] = $this->adminModel->get_lang_list();
        $data['class'] = $this->adminModel->get_class_list($lang);
        $this->load->view('header_CP');
        $this->load->view('Admin/CP',$dataLayout);
        $this->load->view('Admin/CP_listClass', $data);
    }
}