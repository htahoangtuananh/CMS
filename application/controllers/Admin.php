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

    public function index()
    {
        $lang = $this->session->site_lang;
        $dataLayout['branch'] = $this->adminModel->get_branch_list($lang);
        $dataLayout['node'] = $this->adminModel->get_enable_node_list($lang);
        $this->load->view('header_CP');
        $this->load->view('Admin/CP',$dataLayout);
        $this->load->view('Admin/CP_index');
    }

    public function listClass()
    {
        $lang = $this->session->site_lang;
        $dataLayout['branch'] = $this->adminModel->get_branch_list($lang);
        $dataLayout['node'] = $this->adminModel->get_enable_node_list($lang);
        $data['lang'] = $this->adminModel->get_lang_list();
        $data['class'] = $this->adminModel->get_class_list();
        $this->load->view('header_CP');
        $this->load->view('Admin/CP',$dataLayout);
        $this->load->view('Admin/CP_listClass', $data);
    }

    public function viewClass($id)
    {
        if(!($this->input->post())) {
            $lang = $this->session->site_lang;
            $dataLayout['branch'] = $this->adminModel->get_branch_list($lang);
            $dataLayout['node'] = $this->adminModel->get_enable_node_list($lang);
            $data['lang'] = $this->adminModel->get_lang_list();
            $data['class'] = $this->adminModel->get_class_detail($id);
            $this->load->view('header_CP');
            $this->load->view('Admin/CP', $dataLayout);
            $this->load->view('Admin/CP_detailClass', $data);
        }
        else{
            $post = $this->input->post();

            if(empty($post) || !is_array($post)){
                redirect('Admin/listClass');
            }

            else{
                $config = array(
                    array(
                        'field' => 'class_name',
                        'label' => 'class_name',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'class_link',
                        'label' => 'class_link',
                        'rules' => 'trim|required'
                    ),
                );
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE)
                {
                    $this->form_validation->set_message($this->session->userdata('site_lang'),'Error input please check your input before submitting');
                    redirect('Admin/viewClass');
                }

                if($this->adminModel->update_class($id, $post['class_name'], url_title($post['class_link']), $post['class_content'], $post['class_description'], $post['lang'])){

                    $this->session->set_flashdata('message',$this->lang->line('Successfully update class'));
                    redirect('Admin/listClass');
                }
            }
        }
    }

    public function addClass()
    {
        $post = $this->input->post();

        if(empty($post) || !is_array($post)){
            redirect('Admin/listClass');
        }

        else{
            $config = array(
                array(
                    'field' => 'class_name',
                    'label' => 'class_name',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'class_link',
                    'label' => 'class_link',
                    'rules' => 'trim|required'
                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE)
            {
                $this->form_validation->set_message($this->session->userdata('site_lang'),'Error input please check your input before submitting');
                redirect('Admin/listClass');
            }

            if($this->adminModel->add_class($post['class_name'], url_title($post['class_link']), $post['class_content'], $post['class_description'], $post['lang'])){

                $this->session->set_flashdata('message',$this->lang->line('Successfully add new language'));
                redirect('Admin/listClass');
            }
        }
    }


}