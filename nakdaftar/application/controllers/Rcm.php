<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rcm extends CI_Controller {

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
		$this->load->model('rcm_model');
	}

	public function index()
	{	
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';

		$this->load->view('rcm/header', $data);
		$this->load->view('rcm/login');
		$this->load->view('rcm/footer');
	}

	public function login_validation()
	{
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';
		$data['exist']='';


		$this->form_validation->set_rules("nric", "nric", 'required');
		$this->form_validation->set_rules("income", "income", 'hidden');
		
		$nric = $this->input->post('nric');
		$login = $this->rcm_model->can_login($nric);

		if($login)
		{
			foreach($login as $row);

			$this->session->set_userdata('nric', $row->nric);
			$this->session->set_userdata('income', $row->income);

			if($this->session->userdata('income') == '1' || $this->session->userdata('income') == '2' || $this->session->userdata('income') == '3' || $this->session->userdata('income') == '4' || $this->session->userdata('income') == '5' || $this->session->userdata('income') == '6')
			{
				//$this->session->set_flashdata('skip',"nice!");
				$this->session->set_flashdata('message',"Tahniah, anda berjaya hadir di seminar ini!");

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
    //             //$htmlContent .="Gate No : <strong>".$row->kaunter."</strong> (Buka 07.30AM)<br>";
    //             $htmlContent .="No Peserta : <strong>".$row->income."".$row->no_siri."</strong><br>";
    //             $htmlContent .="No. IC : <strong>".$row->nric."</strong><br>";
    //             $htmlContent .="Nama : <strong>".$row->name."</strong><br>";
    //             //$htmlContent .="Saiz Baju : <strong>".$row->size."</strong></p><br>";                    
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

				redirect(base_url().'rcm/pengesahan_peserta');

				//pengesahan_peserta
				//redirect(base_url().'rcm/pengesahan_peserta');
			}

			else
			{
				redirect(base_url(). 'rcm/profil_peserta');
			}
		}

		else
			{
				$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				$this->index();
			}

		/*if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');

			if($this->rcm_model->can_login($nric))
			{
				$session_data = array(
								'nric' => $nric,
								'role' => $role,
								'logged_in' => true);

				$this->session->set_userdata($session_data);

				if($this->session->userdata('role') == '1')
				{
					redirect(base_url().'rcm/pengesahan_peserta');
				}
				
				elseif($this->session->userdata('role') == '2')
				{
				redirect(base_url().'rcm/profil_peserta');
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
		$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
		$data['title'] = 'Nak Daftar | Aplikasi Pendaftaran';

		if($this->session->userdata('nric') != '')
		{
			$this->load->view('rcm/header', $data);
			$this->load->view('rcm/profile', $data);
			$this->load->view('rcm/footer');
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
		$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->rcm_model->fetch_single_data($this->session->userdata('nric'));

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('rcm/header', $data);
		$this->load->view('rcm/survey', $data);
		$this->load->view('rcm/footer');
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
		$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
		$data['user_data'] = $this->rcm_model->fetch_single_data($this->session->userdata('nric'));

		if($this->session->userdata('nric') != '')
		{
		$this->load->view('rcm/header', $data);
		$this->load->view('rcm/survey_prefil', $data);
		$this->load->view('rcm/footer');
		}

		else 
		{
			$this->index();
		}

	}

	public function peserta_survey_pengesahan()
	{
		$this->load->library('form_validation');
		$this->load->model('rcm_model');

		$this->form_validation->set_rules("gender", "gender", 'required');
		$this->form_validation->set_rules("state", "state", 'required');
		$this->form_validation->set_rules("company", "company", 'required');
		$this->form_validation->set_rules("working", "working", 'required');
		$this->form_validation->set_rules("industry", "industry", 'required');
		$this->form_validation->set_rules("status", "status", 'required');
		$this->form_validation->set_rules("funnel", "funnel", 'required');
		$this->form_validation->set_rules("interest", "interest", 'required');
		$this->form_validation->set_rules("income", "income", 'required');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			//true
			$data = array (
				"gender" => $this->input->post("gender"),
				"state" => $this->input->post("state"),
				"company" => $this->input->post("company"),
				"working" => $this->input->post("working"),
				"industry" => $this->input->post("industry"),
				"status" => $this->input->post("status"),
				"funnel" => $this->input->post("funnel"),
				"interest" => $this->input->post("interest"),
				"income" => $this->input->post("income"));


			if($this->rcm_model->update_userdata($data,$nric))
			{
				$this->rcm_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->rcm_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->rcm_model->fetch_data();

				foreach($data['user_data']->result_array() as $row){
					$config = array(
                	
                		'protocol'  => 'smtp',
                		'smtp_host' => 'ssl://smtp.googlemail.com',
                		'smtp_port' => 465,
                		'smtp_user' => 'anontest899@gmail.com',///change it
                		'smtp_pass' => '125318edy',//change it too
                		'mailtype'  => 'html',
                		'charset'   => 'utf-8',
            		);

            		///email content a.k.a message
            		$htmlContent = '<center><h2>Thank you for Registering second site.</h2><center>';
            		//$htmlContent .= '<p>Your Account:</p>';
            		//$htmlContent .= '<p>Email: ".$email."</p>'
            		//$htmlContent .= "<p>Password: ".$password_emp."</p>";
            		$htmlContent .= "<p>Hi <b>".$row['name']."</b> </p>";
            		$htmlContent .= "<p>Email: ".$row['email']."</p>";
            		$htmlContent .= ' <div class="col-lg-8 mr-auto ml-auto text" style="border-style: dotted; border-color:#ff0000; border-width:2px; background-color:#fff; ">
                                    <center>
                                    <br>
                                    <p style="font-weight:800; color:#fff; background-color:#ff0000; padding:5px">LANGKAH 5 :<br>SCREENSHOT INFO INI DAN TERUS KE GATE YANG DITETAPKAN</p>
                                    <h4 style="color:#000"><b>INFO PESERTA</b></h4>
                                    </center>
                                    <div class="divide20"></div>

                                    <p style="color:#000; font-size:18px; line-height:30px;">';                  
                	//$htmlContent .="Gate No : <strong>".$row['kaunter']."</strong> (Buka 07.30AM)<br>";
                	$htmlContent .="No Peserta : <strong>".$row['income']."".$row['no_siri']."</strong><br>";
                	$htmlContent .="No. IC : <strong>".$row['nric']."</strong><br>";
                	$htmlContent .="Nama : <strong>".$row['name']."</strong><br>";
                	//$htmlContent .="Saiz Baju : <strong>".$row['size']."</strong></p><br>";                    
                	$htmlContent .='</div>';

            		$this->email->initialize($config);
            		$this->email->set_mailtype("html");
            		$this->email->set_newline("\r\n");

            		$this->email->to($row['email']);
            		$this->email->from('anontest899@gmail.com','NakDaftar');
            		$this->email->subject('Email Pengesahan Untuk Seminar');
            		$this->email->message($htmlContent);

            		if($this->email->send()){
                		$this->session->set_flashdata('message','Tahniah, kerana mengesahkan Kehadiran Anda dan Email sudah dihantar');

            		}
            		else{
                		$this->session->set_flashdata('message', $this->email->print_debugger());
            		}
            	}

				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('rcm/header', $data);
				$this->load->view('rcm/pengesahan', $data);
				$this->load->view('rcm/footer');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'rcm/peserta_survey');
		}
	}

	public function peserta_survey_pengesahan_prefil()
	{
		$this->load->library('form_validation');
		$this->load->model('rcm_model');

		$this->form_validation->set_rules("hope", "hope", 'required');

		if($this->form_validation->run())
		{
			$nric = $this->input->post('nric');
			//true
			$data = array (
				"hope" => $this->input->post("hope"));


			if($this->rcm_model->update_userdata($data,$nric))
			{
				$this->rcm_model->update_userdata($data, $this->input->post('hidden_id'));
				$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->rcm_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->rcm_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('rcm/header', $data);
				$this->load->view('rcm/pengesahan', $data);
				$this->load->view('rcm/footer');
			}

		}

		else
		{
			//false
			redirect(base_url() . 'rcm/peserta_survey');
		}
	}

	public function pengesahan_peserta()
	{
		
				$data['userdata'] = $this->rcm_model->fetch_userdata($this->session->userdata('nric'));
				$data['user_data'] = $this->rcm_model->fetch_single_data($this->session->userdata('nric'));

				$data["fetch_data"] = $this->rcm_model->fetch_data();
				$data['exist'] = '<span style="color:#fff">No IC anda <b>telah didaftarkan</b>. Cuba lagi.</span>';
				
				$data['title']='Nak Daftar | Aplikasi Pendaftaran';

				$this->load->view('rcm/header', $data);
				$this->load->view('rcm/pengesahan', $data);
				$this->load->view('rcm/footer');
	}

	public function statistik()
	{
		$data['title']='Nak Daftar | Aplikasi Pendaftaran';

		$this->load->view('rcm/header', $data);
		$this->load->view('rcm/admin');
		$this->load->view('rcm/footer');
	}
	

	public function logout()
	{
		$this->session->unset_userdata('nric');
		session_destroy();
		redirect(base_url() . 'rcm/index');
	}

}
