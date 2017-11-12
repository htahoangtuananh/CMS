<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/30/2017
 * Time: 3:10 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @property CI_Session $session
 * @property CI_Input $input
 */
class Authentication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('authenticationModel');
    }

    public function index(){
        if(!$this->session->admin_logged_in == TRUE){

            $this->load->view('header');
            $this->load->view('Authenticate/login');
            $this->load->view('footer');
        }

        else{

            redirect('Home');
        }
    }

    public function login_admin()
    {
        if( $this->session->admin_logged_in == TRUE ){
            if($this->session->role=="admin"||$this->session->role=="gadmin"){
                $data['name']=$this->session->username;
                redirect('Admin');
            }
        }
        $post  = $this->input->post();

        if ( ! is_array($post) || empty($post))
        {
            redirect('Home');
        }
        $config = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required|min_length[5]',
                'errors' => array(
                    'min_length' => 'Password phai nhieu hon 5 kí tu'
                ))
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            redirect('Home');
        }
        $username = $post['username'];
        $pass = $post['password'];
        $bool=$this->authenticationModel->validate_admin($username,$pass);
        var_dump($bool['message']);
        if(isset($bool)){
            $session_data = array(
                'id' => $bool['admin_id'],
                'username' =>$bool['username'],
                'role'=>$bool['role'],
                'admin_logged_in'=>TRUE,
                'is_sysAdmin' => $bool['is_sysAdmin'],
                'site_lang' => $bool['prefer_lang']
            );
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('success','login success');
        }

        redirect('SysAdmin');
    }

    public function login_user()
    {
        if( $this->session->logged_in == TRUE ){
            $data['name']=$this->session->username;
            redirect('User');
        }

        $post  = $this->input->post();

        if ( ! is_array($post) || empty($post))
        {
            redirect('Home');
        }
        $config = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required|min_length[5]',
                'errors' => array(
                    'min_length' => 'Password phai nhieu hon 5 kí tu'
                ))
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            redirect('Home');
        }
        $username = $post['username'];
        $pass = $post['password'];
        $bool=$this->authenticationModel->validate_user($username,$pass);
        if(isset($bool)){
            $session_data = array(

                'username' =>$bool['username'],
                'role'=>$bool['role'],
                'logged_in'=>TRUE
            );
            $this->session->set_userdata($session_data);
        }

        redirect('Admin');
    }


}