<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpi extends CI_Controller {

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
		$this->load->model('amd_model');
	}

	public function index()
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$this->load->view('amd/header', $data);
		$this->load->view('amd/login');
		$this->load->view('amd/footer');
	}

	public function login_validation()
	{
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$this->form_validation->set_rules("nric", "nric", 'required');
		$this->form_validation->set_rules("income", "income", 'hidden');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');

			if($this->amd_model->can_login($nric))
			{
				$session_data = array(
								'nric' => $nric);

				$this->session->set_userdata($session_data);

				if($this->amd_model->check_data_available($_POST['income']))
				{
				redirect(base_url().'amd/peserta_survey');
				}

				else
				{
				redirect(base_url().'amd/profil_peserta');
				}
			}

			else
			{
				$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				$this->index();
			}
		}

		else
		{
			$this->index();
		}
	}

	public function profil_peserta()
	{
		$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';

		if($this->session->userdata('nric') != '')
		{
			$this->load->view('amd/header', $data);
			$this->load->view('amd/profile', $data);
			$this->load->view('amd/footer');
		}

		else
		{
			$this->index();
		}
	}

	public function key()
	{
		$data['exist'] = '';


		$this->load->view('amd/header');
		$this->load->view('kpi/survey');
		$this->load->view('amd/footer');

	}

	public function peserta_survey_pengesahan()
	{
		$this->load->library('form_validation');
		$this->load->model('amd_model');

		$this->form_validation->set_rules("email", "email", 'required');
		$this->form_validation->set_rules("gender", "gender", 'required');
		$this->form_validation->set_rules("state", "state", 'required');
		$this->form_validation->set_rules("country", "country", 'required');
		$this->form_validation->set_rules("company", "company", 'required');
		$this->form_validation->set_rules("industry", "industry", 'required');
		$this->form_validation->set_rules("status", "status", 'required');
		$this->form_validation->set_rules("working", "working", 'required');
		$this->form_validation->set_rules("transportation", "transportation", 'required');
		$this->form_validation->set_rules("funnel", "funnel", 'required');
		$this->form_validation->set_rules("interest", "interest", 'required');
		$this->form_validation->set_rules("experience", "experience", 'required');
		$this->form_validation->set_rules("investment", "investment", 'required');
		$this->form_validation->set_rules("income", "income", 'required');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			//true
			$data = array (
				"email" => $this->input->post("email"),
				"gender" => $this->input->post("gender"),
				"state" => $this->input->post("state"),
				"country" => $this->input->post("country"),
				"company" => $this->input->post("company"),
				"industry" => $this->input->post("industry"),
				"status" => $this->input->post("status"),
				"working" => $this->input->post("working"),
				"transportation" => $this->input->post("transportation"),
				"funnel" => $this->input->post("funnel"),
				"interest" => $this->input->post("interest"),
				"experience" => $this->input->post("experience"),
				"investment" => $this->input->post("investment"),
				"income" => $this->input->post("income"));


			if($this->amd_model->update_userdata($data,$nric))
			{
				$this->amd_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->amd_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('amd/header', $data);
				$this->load->view('amd/pengesahan', $data);
				$this->load->view('amd/footer');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'amd/peserta_survey');
		}
	}


	public function form_validation_kpi()
	{
		$this->load->library('form_validation');
		$this->load->model('kpi_model');

		$this->form_validation->set_rules("name", "name", 'required');
		$this->form_validation->set_rules("s1", "s2", 'required');
		$this->form_validation->set_rules("s2", "s2", 'required');
		$this->form_validation->set_rules("s3", "s3", 'required');

		if($this->form_validation->run())
		{
			//true
			$this->load->model('kpi_model');
			$data = array (
				"name" => $this->input->post("name"),
				"s1" => $this->input->post("s1"),
				"s2" => $this->input->post("s2"),
				"s3" => $this->input->post("s3"));


			$this->kpi_model->insert_data($data);
			redirect(base_url() . 'kpi/inserted');
			}
		}

	

	public function inserted()
	{
		echo "tahniah!";
	}
	

	public function logout()
	{
		$this->session->unset_userdata('nric');
		session_destroy();
		redirect(base_url() . 'index');
	}

}
