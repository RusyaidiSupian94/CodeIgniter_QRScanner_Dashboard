<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
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

        $this->data['emp_tbl'] = $this->auth_model->getAllUsers();
		
	}

	public function index()
	{

		$data = $this->chart_model->get_data()->result();
		//$data['count']=count($data);
      	$x['data'] = json_encode($data);


		$this->load->view('header');
		$this->load->view('sidebar');
		$this->account();
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/dashboardmenu');
		//$this->load->view('dashboard/chart',$x);
		$this->load->view('dashboard/chartUi',$x);
		$this->load->view('footer');
		$this->load->view('jsfooter');
	}
}
