<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amd extends CI_Controller {

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
		$this->load->library('email');
		//$this->load->library('encrypt');
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
		
		$nric = $this->input->post('nric');
		$login = $this->amd_model->can_login($nric);

		if($login)
		{
			foreach($login as $row);

			$this->session->set_userdata('nric', $row->nric);
			$this->session->set_userdata('income', $row->income);

			if($this->session->userdata('income') == '1' || $this->session->userdata('income') == '2' || $this->session->userdata('income') == '3' || $this->session->userdata('income') == '4' || $this->session->userdata('income') == '5' || $this->session->userdata('income') == '6')
			{
				$this->session->set_flashdata('message',"Tahniah, anda berjaya hadir di seminar ini!");
				redirect(base_url().'amd/pengesahan_peserta');////if the income got a value
			}

			else
			{
				redirect(base_url(). 'amd/profil_peserta');
			}
		}

		else{
			$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
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

	public function peserta_survey()
	{
		$this->load->library('session');
		$nric = $this->input->post('nric');
		$data['exist'] = '';

		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';
		$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('amd/header', $data);
		$this->load->view('amd/survey', $data);
		$this->load->view('amd/footer');
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
		$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));
		

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('amd/header', $data);
		$this->load->view('amd/survey_prefil', $data);
		$this->load->view('amd/footer');
		}

		else 
		{
			$this->index();
		}

	}

	public function peserta_survey_pengesahan()
	{
		$this->load->library('form_validation');
		$this->load->model('amd_model');

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

			if($this->amd_model->update_userdata($data,$nric))
			{

				$this->amd_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				//$enter = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->amd_model->fetch_data();
				$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda');				

				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('amd/header', $data);
				$this->load->view('amd/pengesahan', $data);
				$this->load->view('amd/footer');
				//redirect(base_url() . 'amd/generateQR');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'amd/peserta_survey');
		}
	}

	public function peserta_survey_pengesahan_prefil()
	{
		$this->load->library('form_validation');
		$this->load->model('amd_model');

		$this->form_validation->set_rules("hope", "hope", 'required');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			//true
			$data = array (
				"hope" => $this->input->post("hope"));

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

	public function pengesahan_peserta()
	{
		
				$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->amd_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('amd/header', $data);
				$this->load->view('amd/pengesahan', $data);
				$this->load->view('amd/footer');
	}

	
	

	public function logout()
	{
		$this->session->unset_userdata('nric');
		session_destroy();
		redirect(base_url() . 'amd/index');
	}

	////////////////////////////////generate qrcode if the income had been put///////////
	// public function generateQR(){

	// 	$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
	// 	$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';

	// 	if($this->session->userdata('nric') != '')
	// 	{

	// 		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
	// 		$config['cacheable']	= true; //boolean, the default is true
	// 		$config['cachedir']		= './assets/'; //string, the default is application/cache/
	// 		$config['errorlog']		= './assets/'; //string, the default is application/logs/
	// 		$config['imagedir']		= './assets/images/Qrcode folder/qr-amd/'; //direktori penyimpanan qr code
	// 		$config['quality']		= true; //boolean, the default is true
	// 		$config['size']			= '1024'; //interger, the default is 1024
	// 		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
	// 		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
	// 		$this->ciqrcode->initialize($config);
	// 		$image_name = $nric.'.png'; //buat name dari qr code sesuai dengan nim
	// 		$params['data'] = $nric; //data yang akan di jadikan QR CODE
	// 		$params['level'] = 'H'; //H=High
	// 		$params['size'] = 25;
	// 		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
	// 		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

	// 		// $this->vt->ekle("nric", 
	// 		// array(
	// 		// 	'name' 		=> $name,
	// 		// 	'email' 		=> $email,
	// 		// 	'password' 	=> $password, 
	// 		// 	'qr' 	=> $image_name
	// 		// )
	// 		$data = array(
	// 			'qrcode' => $image_name
	// 		);

	// 		$this->amd_model->save($data,$nric);//simpan ke 



	// 		$data["fetch_data"] = $this->amd_model->fetch_data();
	// 		$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');				

	// 		$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
	// 		$data['title']='Nak Daftar | Aplikasi Pendaftaran';

	// 		$this->load->view('amd/header', $data);
	// 		$this->load->view('amd/pengesahan', $data);
	// 		$this->load->view('amd/footer');
	// 	}
	// 	// $this->load->library('session');
	// 	// $nric = $this->input->post('nric');
	// 	// $data['exist'] = '';

	// 	// $data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';
	// 	// $data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
	// 	// $data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

	// 	// if($this->session->userdata('nric') != '')
	// 	// {
	// 	// $this->load->view('amd/header', $data);
	// 	// $this->load->view('amd/pengesahan', $data);
	// 	// $this->load->view('amd/footer');
	// 	// }
	// }
}
