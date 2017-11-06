<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/30/2017
 * Time: 3:27 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $post = $this->input->post();

        if( !is_array($post) || empty($post )){
            $this->load->model('city');
            $data['cities'] = $this->city->get_city();
            $this->load->view('header');
            $this->load->view('Authenticate/register',$data);
        }
        else
        {

            if( !empty($post['repassword']) || empty($post['password']) ) {

                if ( $post['password'] === $post['repassword'] ) {
                    $config = array(
                        array(
                            'field' => 'fullname',
                            'label' => 'fullname',
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'identification_number',
                            'label' => 'identification_number',
                            'rules' => 'trim|required|numeric'
                        ),
                        array(
                            'field' => 'identification_date',
                            'label' => 'identification_date',
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'address',
                            'label' => 'address',
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'phone_number',
                            'label' => 'phone_number',
                            'rules' => 'trim|required|numeric'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'email',
                            'rules' => 'trim|required|valid_email'
                        ),
                        array(
                            'field' => 'username',
                            'label' => 'username',
                            'rules' => 'trim|required|is_unique[users.username]'
                        ),
                        array(
                            'field' => 'password',
                            'label' => 'password',
                            'rules' => 'trim|required'
                        ),
                        array(
                            'field' => 'repassword',
                            'label' => 'repassword',
                            'rules' => 'trim|required'
                        )
                    );
                    $this->form_validation->set_rules($config);
                    if ($this->form_validation->run() == FALSE)
                    {
                        $this->session->set_flashdata("message","Nhập vào không hợp lệ!");
                        redirect('Register/index');
                    }
                    $password_hash = password_hash($post['password'],PASSWORD_BCRYPT);
                    $post['password'] = $password_hash;
                    $post['repassword'] = $password_hash;
                    $json = json_encode($post);
                    $data['email'] = $post['email'];
                    $this->load->model('registerModel');
                    $this->registerModel->add_registration($json);
                    $this->load->view('header');
                    $this->load->view('Authenticate/success',$data);
                }
            }
        }
    }

    public function userRegister()
    {
        if (!isset($this->session->logged_in)) {

            $post = $this->input->post();

            if (!is_array($post) || empty($post)) {
                redirect('Home');
            }
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'username',
                    'rules' => 'trim|required',
                    'errors' => array(
                        'required' => 'Không được phép để trống'
                    )
                ),
                array(
                    'field' => 'sector',
                    'label' => 'sector',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'address',
                    'label' => 'address',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'capacity',
                    'label' => 'capacity',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'other',
                    'label' => 'other',
                    'rules' => 'trim|required'
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata("message", "Invalid input or blank field !");
                redirect('Home');
            } else {
                $capacity = $post['capacity'];
                $factoryname = $post['factoryname'];
                $sector = $post['sector'];
                $address = $post['address'];
                $other = $post['other'];
                $email = $post['email'];
                $this->model->addfactoryregistration($factoryname, $sector, $address, $other, $email, $capacity);
                $this->session->set_flashdata("message", "Succeed !");
                redirect('Home');
            }
        }
        else
        {
            redirect('Enterprise');
        }
    }

}