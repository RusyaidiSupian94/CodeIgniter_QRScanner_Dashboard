<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('mastery_model');

	}

	public function dashboard()
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
		$this->load->view('admin/dashboard-navbar', $data);
		$this->load->view('admin/dashboard',$x);
		$this->load->view('admin/main-footer');
		$this->load->view('admin/footer');
	}


	public function main()
	{
		$data['title']='APLIKASI NAKDAFTAR';

		$this->senarai_mmh((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function senarai_peserta_mmh()
	{
			$crud = new grocery_CRUD();

			/*$crud->set_table('customers');
			$crud->columns('nama','nric','phone','emel');
			$crud->display_as('salesRepEmployeeNumber','from smdapril')
				 ->display_as('Name','nama')
				 ->display_as('NRIC','nric');
			$crud->set_subject('Customer');*/
			/*$crud->set_relation('salesRepEmployeeNumber','employees','lastName');*/
			$crud->set_table('smf');
			$crud->columns('name','nric','phone','email');


			$output = $crud->render();
		
			$this->senarai_mmh($output);
			
	}

	public function senarai_mmh($output = null)
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$data['userdata'] = $this->login_model->fetch_userdata($this->session->userdata('username'));
		$data['user_data'] = $this->login_model->fetch_single_data($this->session->userdata('username'));

		$this->load->view('admin/header', $data);
		$this->load->view('admin-senarai/left-sidebar', $data);
		$this->load->view('admin/top-header', $data);
		$this->load->view('admin-senarai/peserta-mmh.php',(array)$output);
		$this->load->view('admin/main-footer');
		$this->load->view('admin/footer');
	}

	public function senarai_peserta_smh()
	{
			$crud = new grocery_CRUD();

			/*$crud->set_table('customers');
			$crud->columns('nama','nric','phone','emel');
			$crud->display_as('salesRepEmployeeNumber','from smdapril')
				 ->display_as('Name','nama')
				 ->display_as('NRIC','nric');
			$crud->set_subject('Customer');*/
			/*$crud->set_relation('salesRepEmployeeNumber','employees','lastName');*/
			$crud->set_table('smf');
			$crud->columns('name','nric','phone','email');


			$output = $crud->render();
		
			$this->senarai_smh($output);
			
	}

	public function senarai_smh($output = null)
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$data['userdata'] = $this->login_model->fetch_userdata($this->session->userdata('username'));
		$data['user_data'] = $this->login_model->fetch_single_data($this->session->userdata('username'));

		$this->load->view('admin/header', $data);
		$this->load->view('admin-senarai/left-sidebar', $data);
		$this->load->view('admin/top-header', $data);
		$this->load->view('admin-senarai/peserta_smh.php',(array)$output);
		$this->load->view('admin/main-footer');
		$this->load->view('admin/footer');
	}

	public function index()
	{
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$this->load->view('admin/header', $data);
		$this->load->view('adminlog/login');
		$this->load->view('admin/footer');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules("username","username",'required');
		$this->form_validation->set_rules("password","password",'required');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($this->login_model->can_login($username,$password))
			{
				$session_data = array(
								'username' => $this->input->post('username'),
								'name' => $name);

				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/dashboard');
			}

			else
			{
				redirect(base_url() . 'login');
			}
		}

		else
		{
			$this->admin();
		}
	}


	

	public function logout()
	{
		$this->session->unset_userdata('username');
		session_destroy();
		redirect(base_url() . 'login');
	}

}
