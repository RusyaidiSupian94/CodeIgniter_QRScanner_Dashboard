<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickupmcm extends CI_Controller {

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
		$this->load->model('mcm_model');
		$this->load->model('pickup_model');
		//$this->load->library('email');
		//$this->load->library('encrypt');
	}

	public function index(){
		$this->load->view('pickup/headerpickup');
		$this->load->view('pickup/pickupmcm/pickup');
		$this->load->view('pickup/footerpickup');
	}

	public function validation(){
		$this->form_validation->set_rules("no_siri", "no_siri", 'required');
		$this->form_validation->set_rules("kehadiran", "kehadiran", 'hidden');
		
		$no_siri = $this->input->post('no_siri');
		$login = $this->pickup_model->can_loginmcm($no_siri);
		$hadir = $this->pickup_model->checkhadirandesitmcm($no_siri);
		// $hadir = $this->pickup_model->

		if($login)
		{
			//$this->session->set_flashdata('skip',"nice!");
			//$this->load->view('pickup/successpage');///update kehadiran
			$data['kehadiran'] = '1';
			$query = $this->pickup_model->hadirmcm($data,$no_siri);
			redirect('pickupmcm/success');///update kehadiran
		}
		else if ($hadir){
			$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! No SIRI yang dimasukkan <strong>sudah ada dalam sistem kami</strong>, sila <strong>masukkan NO SIRI yang betul</strong>. Terima kasih.</div>");
				/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
				$this->index();
		}
		// else if($login){
		// 	$this->session->set_flashdata('skip',"nice!");///////error message sbb kehadiran =1
		// }

		else
			{
				$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
				/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
				$this->index();
			}
	}

	public function success(){
		$this->load->view('pickup/headerpickup');
		$this->load->view('pickup/pickupmcm/successpage');
		$this->load->view('pickup/footerpickup');
	}
}
