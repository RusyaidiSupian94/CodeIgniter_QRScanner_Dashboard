<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statis extends MY_Controller {
	public function __construct (){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('crud');
		// $this->load->model('statis_model');
		// $this->load->model('chart_model');
		$this->load->model('crud_model');
		$this->load->helper('string');
		
	}

	public function index()
	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->account();
		$this->load->view('statis/statisdashboard');
		$this->load->view('statis/terkini');
		// $this->load->view('statis/chartstatis/chart_terkini',$x);
		$this->load->view('statis/statussyarikat');
		// $this->load->view('statis/chartstatis/chart_statussyarikat',$x2);
		$this->load->view('statis/statuspekerja');
		// $this->load->view('statis/chartstatis/chart_statuspekerjaan',$x3);
        $this->load->view('statis/industriperniagaan');
		// $this->load->view('statis/chartstatis/chart_industriperniagaan',$x4);
	    $this->load->view('statis/sebab');
		// $this->load->view('statis/chartstatis/chart_sebab',$x5);
	    $this->load->view('statis/negeri');
		// $this->load->view('statis/chartstatis/chart_negeri',$x6);
		$this->load->view('statis/jumlahpendapatan');
		// $this->load->view('statis/chartstatis/chart_jumlahpendapatan',$x7);
		$this->load->view('footer');
		$this->load->view('jsfooter');
	}

	
}
