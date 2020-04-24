<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuData extends MY_Controller {
	public function __construct (){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('string');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->account();
		$this->load->view('importdata/dashboarddropdata');
		$this->load->view('importdata/menudropdata');
		$this->load->view('footer');
		$this->load->view('jsfooter');
	}
}
