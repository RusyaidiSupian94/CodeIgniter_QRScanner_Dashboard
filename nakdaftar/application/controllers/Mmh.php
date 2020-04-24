<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmh extends CI_Controller {

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
		$this->load->model('mmh_model');
		$this->load->library('email');
		//$this->load->library('encrypt');
	}

	public function index()
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$this->load->view('mmh/header', $data);
		$this->load->view('mmh/login');
		$this->load->view('mmh/footer');
	}

	public function login_validation()
	{
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';


		$this->form_validation->set_rules("nric", "nric", 'required');
		//$this->form_validation->set_rules("income", "income", 'hidden');
		
		$nric = $this->input->post('nric');
		$login = $this->mmh_model->can_login($nric);

		if($login)
		{
			foreach($login as $row);

			$this->session->set_userdata('nric', $row->nric);
			//$this->session->set_userdata('income', $row->income);
			$this->session->set_flashdata('message',"Tahniah, anda berjaya hadir di seminar ini!");
			redirect(base_url().'mmh/pengesahan_peserta');////if the income got a value

			// if($this->session->userdata('income') == '1' || $this->session->userdata('income') == '2' || $this->session->userdata('income') == '3' || $this->session->userdata('income') == '4' || $this->session->userdata('income') == '5' || $this->session->userdata('income') == '6')
			// {
			// 	$this->session->set_flashdata('message',"Tahniah, anda berjaya hadir di seminar ini!");
			// 	redirect(base_url().'mmd/pengesahan_peserta');////if the income got a value
			// }

			// else
			// {
			// 	redirect(base_url(). 'mmd/profil_peserta');
			// }
		}

		else{
			$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
			$this->index();
		}
	}

	public function profil_peserta() 
	{
		$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';

		if($this->session->userdata('nric') != '')
		{
			$this->load->view('mmh/header', $data);
			$this->load->view('mmh/profile', $data);
			$this->load->view('mmh/footer');
		}

		else
		{
			$this->index();
		}
	}

	public function peserta_survey()
	{
		$this->load->library('session');
		$nric = $this->input->post('nric');
		$data['exist'] = '';

		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';
		$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->mmh_model->fetch_single_data($this->session->userdata('nric'));

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('mmh/header', $data);
		$this->load->view('mmh/survey', $data);
		$this->load->view('mmh/footer');
		}

		else 
		{
			$this->index();
		}

	}

	public function peserta_survey_prefil()
	{
		$this->load->library('session');
		$nric = $this->input->post('nric');
		$data['exist'] = '';

		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';
		$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->mmh_model->fetch_single_data($this->session->userdata('nric'));
		

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('mmh/header', $data);
		$this->load->view('mmh/survey_prefil', $data);
		$this->load->view('mmh/footer');
		}

		else 
		{
			$this->index();
		}

	}

	public function peserta_survey_pengesahan()
	{
		$this->load->library('form_validation');
		$this->load->model('mmh_model');

		//$this->form_validation->set_rules("email", "email");
		$this->form_validation->set_rules("gender", "gender", 'required');
		$this->form_validation->set_rules("state", "state", 'required');
		$this->form_validation->set_rules("postcode", "postcode", 'required');
		$this->form_validation->set_rules("country", "country", 'required');
		$this->form_validation->set_rules("company", "company", 'required');
		$this->form_validation->set_rules("industry", "industry", 'required');
		$this->form_validation->set_rules("status", "status", 'required');
		$this->form_validation->set_rules("working", "working", 'required');
		$this->form_validation->set_rules("hope", "hope", 'required');
		$this->form_validation->set_rules("funnel", "funnel", 'required');
		$this->form_validation->set_rules("interest", "interest", 'required');
		$this->form_validation->set_rules("experience", "experience", 'required');
		$this->form_validation->set_rules("investment", "investment", 'required');
		$this->form_validation->set_rules("income", "income", 'required');



		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			
			$data = array (
				//"email" => $this->input->post("email"),
				"gender" => $this->input->post("gender"),
				"state" => $this->input->post("state"),
				"postcode" => $this->input->post("postcode"),
				"country" => $this->input->post("country"),
				"company" => $this->input->post("company"),
				"industry" => $this->input->post("industry"),
				"status" => $this->input->post("status"),
				"working" => $this->input->post("working"),
				"hope" => $this->input->post("hope"),
				"funnel" => $this->input->post("funnel"),
				"interest" => $this->input->post("interest"),
				"experience" => $this->input->post("experience"),
				"investment" => $this->input->post("investment"),
				"income" => $this->input->post("income"),
				// "qrcode" 	=> $image_name

			);

			if($this->mmh_model->update_userdata($data,$nric))
			{

				$this->mmh_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
				//$enter = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->mmh_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->mmh_model->fetch_data();
				$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda');				

				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('mmh/header', $data);
				$this->load->view('mmh/pengesahan', $data);
				$this->load->view('mmh/footer');
				//redirect(base_url() . 'mmh/generateQR');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'mmh/peserta_survey');
		}
	}

	public function peserta_survey_pengesahan_prefil()
	{
		$this->load->library('form_validation');
		$this->load->model('mmh_model');

		$this->form_validation->set_rules("hope", "hope", 'required');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			//true
			$data = array (
				"hope" => $this->input->post("hope"));

			if($this->mmh_model->update_userdata($data,$nric))
			{
				$this->mmh_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->mmh_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->mmh_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('mmh/header', $data);
				$this->load->view('mmh/pengesahan', $data);
				$this->load->view('mmh/footer');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'mmh/peserta_survey');
		}
	}

	public function pengesahan_peserta()
	{
		
				$data['userdata'] = $this->mmh_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->mmh_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->mmh_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('mmh/header', $data);
				$this->load->view('mmh/pengesahan', $data);
				$this->load->view('mmh/footer');
	}

	
	

	public function logout()
	{
		$this->session->unset_userdata('nric');
		session_destroy();
		redirect(base_url() . 'mmh/index');
	}

}
