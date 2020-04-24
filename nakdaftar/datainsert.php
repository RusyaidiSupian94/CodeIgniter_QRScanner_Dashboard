<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datainsert extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('chart_model');
		//$this->load->model('crud_model');
        $this->load->model('auth_model');
		$this->load->model('modelsmh');
		$this->load->model('modelsmhchart');
		$this->load->helper('string');
	}

    public function index(){
        
    }
}