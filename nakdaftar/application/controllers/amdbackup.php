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
				// $this->session->set_flashdata('skip',"nice!");

				// //email setup
				// $config = array(
    //             	'protocol'  => 'smtp',
    //             	'smtp_host' => 'ssl://smtp.googlemail.com',
    //             	'smtp_port' => 465,
    //             	'smtp_user' => 'anontest899@gmail.com',///change it
    //             	'smtp_pass' => '125318edy',//change it too
    //             	'mailtype'  => 'html',
    //             	'charset'   => 'utf-8',
    //         	);

    //         	///email content a.k.a message

    //         	$htmlContent = '<center><h2>Thank you for Registering.</h2><center>';
    //         	//$htmlContent .= '<p>Your Account:</p>';
    //         	//$htmlContent .= '<p>Email: ".$email."</p>'
    //         	//$htmlContent .= "<p>Password: ".$password_emp."</p>";
    //         	$htmlContent .= "<p>Hi <b>".$row->name."</b> </p>";
    //         	$htmlContent .= "<p>Email: ".$row->email."</p>";
    //         	$htmlContent .= ' <div class="col-lg-8 mr-auto ml-auto text" style="border-style: dotted; border-color:#ff0000; border-width:2px; background-color:#fff; ">
    //                                 <center>
    //                                 <br>
    //                                 <p style="font-weight:800; color:#fff; background-color:#ff0000; padding:5px">LANGKAH 5 :<br>SCREENSHOT INFO INI DAN TERUS KE GATE YANG DITETAPKAN</p>
    //                                 <h4 style="color:#000"><b>INFO PESERTA</b></h4>
    //                                 </center>
    //                                 <div class="divide20"></div>

    //                                 <p style="color:#000; font-size:18px; line-height:30px;">';                  
    //             $htmlContent .="Gate No : <strong>".$row->kaunter."</strong> (Buka 07.30AM)<br>";
    //             $htmlContent .="No Peserta : <strong>".$row->income."".$row->no_siri."</strong><br>";
    //             $htmlContent .="No. IC : <strong>".$row->nric."</strong><br>";
    //             $htmlContent .="Nama : <strong>".$row->name."</strong><br>";
    //             $htmlContent .="Saiz Baju : <strong>".$row->size."</strong></p><br>";                    
    //             $htmlContent .='</div>';
    //         	//$htmlContent .= "<h4><a href='".base_url()."authv2/activate/".$id_emp."/".$code."'>Activate My Account</a></h4>";


    //         	$this->email->initialize($config);
    //         	$this->email->set_mailtype("html");
    //         	$this->email->set_newline("\r\n");


    //         	$this->email->to($row->email);
    //         	$this->email->from('anontest899@gmail.com','NakDaftar');
    //         	$this->email->subject('Email Pengesahan Untuk Seminar');
    //         	$this->email->message($htmlContent);
 
    //         	//sending email
    //         	if($this->email->send()){
    //             	$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');

    //         	}
    //         	else{
    //             	$this->session->set_flashdata('message', $this->email->print_debugger());
 
    //         	}
				redirect(base_url().'amd/pengesahan_peserta');////if the income got a value
			}

			else
			{
				redirect(base_url(). 'amd/profil_peserta');
			}
		}

		else
			{
				$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
				$this->index();
			}

		/*if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');

			if($this->amd_model->can_login($nric))
			{
				$session_data = array(
								'nric' => $nric,
								'role' => $role,
								'logged_in' => true);

				$this->session->set_userdata($session_data);

				if($this->session->userdata('role') == '1')
				{
					redirect(base_url().'amd/pengesahan_peserta');
				}
				
				elseif($this->session->userdata('role') == '2')
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
		}*/
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
			//$email = $this->input->post('email');
			// $no_siri = $this->input->post('no_siri');

			// $this->load->library('ciqrcode'); //pemanggilan library QR CODE
			// $config['cacheable']	= true; //boolean, the default is true
			// $config['cachedir']		= './assets/'; //string, the default is application/cache/
			// $config['errorlog']		= './assets/'; //string, the default is application/logs/
			// $config['imagedir']		= './assets/images/Qrcode folder/qr-amd/'; //direktori penyimpanan qr code
			// $config['quality']		= true; //boolean, the default is true
			// $config['size']			= '1024'; //interger, the default is 1024
			// $config['black']		= array(224,255,255); // array, default is array(255,255,255)
			// $config['white']		= array(70,130,180); // array, default is array(0,0,0)
			// $this->ciqrcode->initialize($config);
			// $image_name=$nric.'.png'; //buat name dari qr code sesuai dengan nim
			// $params['data'] = $no_siri; //data yang akan di jadikan QR CODE
			// $params['level'] = 'H'; //H=High
			// $params['size'] = 25;
			// $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
			// $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

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

				// "qrcode" 	=> $image_name,

			);

			if($this->amd_model->update_userdata($data,$nric))
			{

				$this->amd_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				//$enter = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->amd_model->fetch_data();
				$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');

				//$email = $this->input->post('email');
					//$ko = $this->amd_model->getemail($nric);
					// if($data){
					// foreach($data['user_data']->result_array() as $row){
					// $config = array(
                	
     //            		'protocol'  => 'smtp',
     //            		'smtp_host' => 'ssl://smtp.googlemail.com',
     //            		'smtp_port' => 465,
     //            		'smtp_user' => 'anontest899@gmail.com',///change it
     //            		'smtp_pass' => '125318edy',//change it too
     //            		'mailtype'  => 'html',
     //            		'charset'   => 'utf-8',
     //        		);

     //        		///email content a.k.a message
     //        		$htmlContent = '<center><h2>Thank you for Registering second site.</h2><center>';
     //        		//$htmlContent .= '<p>Your Account:</p>';
     //        		//$htmlContent .= '<p>Email: ".$email."</p>'
     //        		//$htmlContent .= "<p>Password: ".$password_emp."</p>";
     //        		$htmlContent .= "<p>Hi <b>".$row['name']."</b> </p>";
     //        		$htmlContent .= "<p>Email: ".$row['email']."</p>";
     //        		$htmlContent .= ' <div class="col-lg-8 mr-auto ml-auto text" style="border-style: dotted; border-color:#ff0000; border-width:2px; background-color:#fff; ">
     //                                <center>
     //                                <br>
     //                                <p style="font-weight:800; color:#fff; background-color:#ff0000; padding:5px">LANGKAH 5 :<br>SCREENSHOT INFO INI DAN TERUS KE GATE YANG DITETAPKAN</p>
     //                                <h4 style="color:#000"><b>INFO PESERTA</b></h4>
     //                                </center>
     //                                <div class="divide20"></div>

     //                                <p style="color:#000; font-size:18px; line-height:30px;">';                  
     //            	$htmlContent .="Gate No : <strong>".$row['kaunter']."</strong> (Buka 07.30AM)<br>";
     //            	$htmlContent .="No Peserta : <strong>".$row['income']."".$row['no_siri']."</strong><br>";
     //            	$htmlContent .="No. IC : <strong>".$row['nric']."</strong><br>";
     //            	$htmlContent .="Nama : <strong>".$row['name']."</strong><br>";
     //            	$htmlContent .="Saiz Baju : <strong>".$row['size']."</strong></p><br>";                    
     //            	$htmlContent .='</div>';

     //        		$this->email->initialize($config);
     //        		$this->email->set_mailtype("html");
     //        		$this->email->set_newline("\r\n");

     //        		$this->email->to($row['email']);
     //        		$this->email->from('anontest899@gmail.com','NakDaftar');
     //        		$this->email->subject('Email Pengesahan Untuk Seminar');
     //        		$this->email->message($htmlContent);

     //        		if($this->email->send()){
     //            		$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');

     //        		}
     //        		else{
     //            		$this->session->set_flashdata('message', $this->email->print_debugger());
     //        		}
     //        	}
				

				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('amd/header', $data);
				$this->load->view('amd/pengesahan', $data);
				$this->load->view('amd/footer');
				// redirect(base_url() . 'amd/generateQR');
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

	
		//$email = $this->input->post('email');
		if($this->amd_model->update_userdata($data,$nric))
		{

			$this->amd_model->update_userdata($data, $this->input->post('hidden_id'));
			$data['userdata'] = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
			//$enter = $this->amd_model->fetch_userdata($this->session->userdata('nric'));
			$data['user_data'] = $this->amd_model->fetch_single_data($this->session->userdata('nric'));

			$data["fetch_data"] = $this->amd_model->fetch_data();
			$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');

			$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
			$data['title']='Nak Daftar | Aplikasi Pendaftaran';

			$this->load->view('amd/header', $data);
			$this->load->view('amd/pengesahan', $data);
			$this->load->view('amd/footer');

		}
	}
}
