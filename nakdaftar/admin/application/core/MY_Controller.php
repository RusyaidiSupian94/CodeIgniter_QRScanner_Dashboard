<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct (){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		//$this->load->model('statis_model');
        $this->load->model('chart_model');
		//$this->load->model('crud_model');
        $this->load->model('auth_model');
		$this->load->model('modelsmh');
		$this->load->model('modelsmhchart');
		$this->load->helper('string');
        $this->load->helper('file');

        $this->data['emp_tbl'] = $this->auth_model->getAllUsers();
		
	}

    ////////////////////////////////////////masuk user profile////////////////////////////
    public function account(){
        $data = array();
        
        if($this->session->userdata('isUserLoggedIn')){
            $data['emp_tbl'] = $this->auth_model->getRows(array('id_emp'=>$this->session->userdata('userId')));
            $this->load->view('menubar',$data);
        }else{
            redirect('Home/login');
        }
    }


    ////////////////////////logout///////////////////////////////////////////////

    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('Home/login');
    }

    ////////////////////loginnn/////////////////////////////////////////////////
    /*
    * User login
    */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email_emp', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password_emp', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email_emp'=>$this->input->post('email_emp'),
                    'password_emp' => md5($this->input->post('password_emp')),
                    'status_emp' => 'Active'
                );
                $checkLogin = $this->auth_model->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id_emp']);
                    redirect('Home/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('header');
        $this->load->view('auth/login/signin', $data);
        $this->load->view('auth/login/footerlogin');
        $this->load->view('jsfooter');
    }

}
