<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->model('mastery_model');
		$this->load->library('grocery_CRUD');
		$this->load->model('statistik_smh_model');

	}

	public function statistik_smh()
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';
		
		$graph = $this->mastery_model->get_data()->result();
	    $x['graph'] = json_encode($graph);
		
		$data['userdata'] = $this->login_model->fetch_userdata($this->session->userdata('username'));
		$data['user_data'] = $this->login_model->fetch_single_data($this->session->userdata('username'));


		$this->load->view('admin/header', $data);
		$this->load->view('admin/left-sidebar', $data);
		$this->load->view('admin/top-header', $data);
		$this->load->view('admin-statistik/smh/breadcrump', $data);
		$this->load->view('admin-statistik/smh/smh-april',$data);
		$this->load->view('admin/main-footer');
		$this->load->view('admin/footer');
	}
}