<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickupqrsmf extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('smf_model');
		$this->load->model('pickup_model');
		//$this->load->library('email');
		//$this->load->library('encrypt');
	}

	public function index(){
		$this->load->view('qrpickup/headerpickup');
		$this->load->view('qrpickup/qrpickupsmf/pickupsmf');
		$this->load->view('qrpickup/qrpickupsmf/footerpickup');
	}

	public function validation(){
		//$this->form_validation->set_rules("no_siri", "no_siri", 'required');
		//$this->form_validation->set_rules("kehadiran", "kehadiran", 'hidden');
		
		$code = $this->input->post('code');
		$login = $this->pickup_model->can_loginsmf($code);
		$hadir = $this->pickup_model->checkhadirandesitsmf($code);
		// $hadir = $this->pickup_model->

		if($login)
		{
			//$this->session->set_flashdata('skip',"nice!");
			//$this->load->view('pickup/successpage');///update kehadiran
			//$code=$this->input->post('code');
			$data['kehadiran'] = '1';
			$query = $this->pickup_model->hadirsmf($data,$code);
			//redirect('pickupqr/success');///update kehadiran
			//print_r($query);
// 			$message = "correct input";
// 			echo "<script type='text/javascript'>alert('$message');window.location = ('success') </script>";
            $message = "correct input";
			echo "<script type='text/javascript'>
				sweetAlert({
    				title: 'Invited!',
    				text: '$message',
    				type: 'success',
				},
				function () {
    				window.location = 'success';
				});</script>";
				
		}
		else if ($hadir){
			// $this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! No SIRI yang dimasukkan <strong>sudah ada dalam sistem kami</strong>, sila <strong>masukkan NO SIRI yang betul</strong>. Terima kasih.</div>");
			// 	$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");
			// 	$this->index();
			// $message = "exist input";
			// echo "<script type='text/javascript'>alert('$message');window.location = ('index') </script>";
			$message = "exist input";
			echo "<script type='text/javascript'>
				sweetAlert({
    				title: 'exist!',
    				text: '$message',
    				type: 'warning',
				},
				function () {
    				window.location = 'index';
				});</script>";
		}
		// else if($login){
		// 	$this->session->set_flashdata('skip',"nice!");///////error message sbb kehadiran =1
		// }

		else{
			// $this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul atau berjumpa dengan krew bertugas</strong>. Terima kasih.</div>");
			/*$this->session->set_flashdata('error',"<div style='color:#fff; background-color:#ff0000; padding:10px;'>Opps! Maklumat yang dimasukkan <strong>tiada dalam sistem kami</strong>, sila <strong>pastikan anda memasukkan data yang betul. Masih hadapi masalah sama? Hubungi Bahagian Khidmat Pelanggan kami sekarang.<br></div><br><div><a href='http://nakdaftarbyond.wasap.my/' target='_blank' class='btn btn-theme-bg btn-ico btn-lg pull-right' style='background-color:#34AF23; color:#fff; border:0px; margin-top:-20px;'>HUBUNGI KAMI<i class='fa fa-whatsapp' style='color:#fff'></i></a></div><br>");*/
			// $this->index();
			// $message = "inccorrect input";
			// echo "<script type='text/javascript'>alert('$message');window.location = ('index') </script>";
			$message = "incorrect input";
			echo "<script type='text/javascript'>
				sweetAlert({
    				title: 'gagal!',
    				text: '$message',
    				type: 'error',
				},
				function () {
    				window.location = 'index';
				});</script>";
		}
	}

	public function success(){
		$this->load->view('qrpickup/headerpickup');
		$this->load->view('qrpickup/qrpickupsmf/successpage');
		$this->load->view('qrpickup/qrpickupsmf/footerpickup');
	}
}
