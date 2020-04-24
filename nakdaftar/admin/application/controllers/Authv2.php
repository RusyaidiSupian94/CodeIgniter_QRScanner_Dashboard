<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Authv2 extends MY_Controller {
    
    function __construct() {
       parent::__construct();
        //$this->load->model('users_model');
        $this->load->model('auth_model');        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');

        $this->data['emp_tbl'] = $this->auth_model->getAllUsers();
    }
    

    // public function Admin(){
    //     $this->load->view('header');
    //     $this->load->view('auth/login/signin');
    //     $this->load->view('auth/login/footerlogin');
    //     $this->load->view('jsfooter');
    // }

    // public function Register1(){
    //     $this->load->view('header');
    //     $this->load->view('auth/register/signup');
    //     $this->load->view('auth/login/footerlogin');
    //     $this->load->view('jsfooter');
    // }

    public function register(){
        $this->form_validation->set_rules('name_emp','Name Employee','required');
        $this->form_validation->set_rules('gender_emp','Gender Employee','required');
        $this->form_validation->set_rules('position_emp','Position Employee','required');
        $this->form_validation->set_rules('department_emp','Department Employee','required');
        $this->form_validation->set_rules('email_emp', 'Email Employee', 'valid_email|required');
        $this->form_validation->set_rules('password_emp', 'Password Employee', 'required|min_length[7]|max_length[30]');
        //$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password_emp]');
 
        if ($this->form_validation->run() == FALSE) { 
            //$this->load->view('register', $this->data);
            // $this->load->view('header');
            // $this->load->view('auth/register/signup',$this->data);
            // $this->load->view('auth/login/footerlogin');
            // $this->load->view('jsfooter');
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->account();
            $this->load->view('auth/register/signup',$this->data);
            //$this->load->view('statistic/menuseminar');
            $this->load->view('footer');
            $this->load->view('jsfooter');
        }
        else{
            //get employee inputs
            $name_emp = $this->input->post('name_emp');
            $gender_emp = $this->input->post('gender_emp');
            $position_emp = $this->input->post('position_emp');
            $department_emp = $this->input->post('department_emp');
            $email_emp = $this->input->post('email_emp');
            $password_emp = md5($this->input->post('password_emp'));
 
            //generate simple random code
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);
 
            //insert employee to emp_tbl and get id
            $emp['name_emp'] = $name_emp;
            $emp['gender_emp'] = $gender_emp;
            $emp['position_emp'] = $position_emp;
            $emp['department_emp'] = $department_emp;
            $emp['email_emp'] = $email_emp;
            $emp['password_emp'] = $password_emp;
            $emp['code'] = $code;
            $emp['status_emp'] = "inactive";
            $id_emp = $this->auth_model->insert($emp);
 
            //set up email
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'anontest899@gmail.com',
                'smtp_pass' => '125318edy',
                'mailtype'  => 'html',
                'charset'   => 'utf-8'
            );

            ///email content a.k.a message

            $htmlContent = '<h2>Thank you for Registering.</h2>';
            $htmlContent .= '<p>Your Account:</p>';
            //$htmlContent .= '<p>Email: ".$email."</p>'
            $htmlContent .= "<p>Email: ".$email_emp."</p>";
            $htmlContent .= "<p>Password: ".$password_emp."</p>";
            $htmlContent .= "<p>Hi ".$name_emp."</p>";
            $htmlContent .= '<p>Please click the link below to activate your account.</p>';
            $htmlContent .= "<h4><a href='".base_url()."authv2/activate/".$id_emp."/".$code."'>Activate My Account</a></h4>";


            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");


            $this->email->to($email_emp);
            $this->email->from('anontest899@gmail.com','My Website');
            $this->email->subject('User verification email.');
            $this->email->message($htmlContent);
 
            //sending email
            if($this->email->send()){
                $this->session->set_flashdata('message','Activation code sent to email');
            }
            else{
                $this->session->set_flashdata('message', $this->email->print_debugger());
 
            }
 
            redirect('authv2/register');
        }
 
    }

    public function activate(){
        $id_emp =  $this->uri->segment(3);
        $code = $this->uri->segment(4);
 
        //fetch user details
        $emp = $this->auth_model->getUser($id_emp);
 
        //if code matches
        if($emp['code'] == $code){
            //update user active status
            $data['status_emp'] = "active";
            $query = $this->auth_model->activate($data, $id_emp);
 
            if($query){
                $this->session->set_flashdata('message', 'User activated successfully');
            }
            else{
                $this->session->set_flashdata('message', 'Something went wrong in activating account');
            }
        }
        else{
            $this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
        }
 
        redirect('Home/login');
 
    }

    public function emp_table(){
        $data = array();
        $data['emp_tbl'] = $this->auth_model->getRows();
        //$data['emp_tbl'] = $this->auth_model->getAllUsers();
        // Load the list page view

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('employeelist/employeelistdashboard');
        $this->load->view('employeelist/employeetable',$data);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }

}