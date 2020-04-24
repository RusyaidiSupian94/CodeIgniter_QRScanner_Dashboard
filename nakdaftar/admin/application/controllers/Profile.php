<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Profile extends MY_Controller {
    
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
    
    function dataprofile(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('profile/profileall');
        //$this->load->view('employeelist/employeetable',$data);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }
}