<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/30/2017
 * Time: 4:24 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    var $unread;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('adminModel');
    }

    public function index()
    {
        var_dump($this->session->is_sysAdmin);
        if($this->session->admin_logged_in == TRUE){
            $this->load->view('header_CP');
            $this->load->view('Admin/CP');
        }
        else
        {
            redirect('home');
        }
    }

    public function createAdmin()
    {
        $post = $this->input->post();
        if( !is_array($post) || empty($post))
        {
            $this->load->view('header_CP');
            $this->load->view('Admin/CP_addadmin');
        }
        else
        {
            $config = array(
                array(
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'trim|required|valid_email'
                ),
                array(
                    'field' => 'username',
                    'label' => 'username',
                    'rules' => 'trim|required|is_unique[admin.username]'
                ),
                array(
                    'field' => 'password',
                    'label' => 'password',
                    'rules' => 'trim|required|min_length[7]'
                )
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata("message","Nhập vào không hợp lệ!");
                redirect('Admin/createAdmin');
            }
            $post['password'] = password_hash($post['password'],PASSWORD_BCRYPT);
            $this->adminModel->create_admin($post['email'],$post['password'],$post['username']);
            $this->session->set_flashdata('message','Tạo admin mới thành công !');
            redirect('Admin/createAdmin');
        }
    }

}