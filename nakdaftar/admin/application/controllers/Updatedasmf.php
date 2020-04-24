<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updatedasmf extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load member model
        //$this->load->model('csvcodexmodel');
        $this->load->model('updatedatasmf');
        $this->load->helper('form');
        
        // Load form validation library
        $this->load->library('form_validation');
        
        // Load file helper
        $this->load->helper('file');
        $this->load->library('session');
    }

    ///////////view only///////////////////////////////




    public function view($id){
        $data = array();
        
        // Check whether member id is not empty
        if(!empty($id)){
            $data['updatedatasmf'] = $this->updatedatasmf->getRows(array('id' => $id));;///in the data bracket there are model there
            //$data['title']  = 'Member Details';
            
            // Load the details page view
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->account();
            //$this->load->view('dropfile/dropdashboard');
            $this->load->view('crudsystem/smfaddcust/view', $data);
            $this->load->view('footer');
            $this->load->view('jsfooter');
            //$this->load->view('templates/header', $data);
           
            
        }else{
            redirect('smfimport');
        }
    }



    ////////////////////////////////////////////////////////////////////////edit//////////////////////////


    public function edit($id){
        $data = array();
        
        // Get member data
        $memData = $this->updatedatasmf->getRows(array('id' => $id));
        
        // If update request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            // $this->form_validation->set_rules('name', 'Name', 'required');
            // $this->form_validation->set_rules('phone', 'Phone', 'required');
            // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//email_check
            // $this->form_validation->set_rules('nric', 'Nric', 'required');
            // //$this->form_validation->set_rules('status', 'Status', 'required');
            // $this->form_validation->set_rules('size', 'Size', 'required');
            // $this->form_validation->set_rules('gender', 'Gender', 'required');
            // $this->form_validation->set_rules('tiket', 'Tiket', 'required');
            // $this->form_validation->set_rules('kaunter', 'Kaunter', 'required');
            // $this->form_validation->set_rules('state', 'State', 'required');
            // $this->form_validation->set_rules('country', 'Country', 'required');
            // $this->form_validation->set_rules('company', 'Company', 'required');
            // $this->form_validation->set_rules('industry', 'Industry', 'required');
            // $this->form_validation->set_rules('status', 'Status', 'required');
            // $this->form_validation->set_rules('working', 'Working', 'required');
            // $this->form_validation->set_rules('hope', 'Hope', 'required');
            // $this->form_validation->set_rules('funnel', 'Funnel', 'required');
            // $this->form_validation->set_rules('interest', 'Interest', 'required');
            // $this->form_validation->set_rules('experience', 'Experience', 'required');
            // $this->form_validation->set_rules('investment', 'Investment', 'required');
            // $this->form_validation->set_rules('income', 'income', 'required');
            /////everything that state in the update must be update otherwise the code will bee error

            
            // Prepare member data
            $memData = array(
                'no_siri' => $this->input->post('no_siri'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'nric' => $this->input->post('nric'),
                'size' => $this->input->post('size'),
                'gender' => $this->input->post('gender'),
                'tiket' => $this->input->post('tiket'),
                'kaunter' => $this->input->post('kaunter'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'company' => $this->input->post('company'),
                'industry' => $this->input->post('industry'),
                'status' => $this->input->post('status'),
                'working' => $this->input->post('working'),
                'hope' => $this->input->post('hope'),
                'funnel' => $this->input->post('funnel'),
                'interest' => $this->input->post('interest'),
                'experience' => $this->input->post('experience'),
                'investment' => $this->input->post('investment'),
                'income' => $this->input->post('income'),
            );
            
            // Validate submitted form data
            // if($this->form_validation->run() == true){
                // Update member data
                $update = $this->updatedatasmf->update($memData, $id);

                if($update){
                    $this->session->set_userdata('success_msg', 'Member has been updated successfully.');
                    redirect('smfimport');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            // }
        }

        $data['updatedatasmf'] = $memData;
        
        
        // Load the edit page view
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('crudsystem/smfaddcust/dashboardupdate');
        $this->load->view('crudsystem/smfaddcust/add-edit',$data);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }

    ////////////////////////addddddddd//////////////////////////////////////

    public function add(){
        $data = array();
        $memData = array();
        
        // If add request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('no_siri', 'No Siri' , 'required|callback_no_siri_check' );//
            $this->form_validation->set_rules('name', 'Name','required' );//
            $this->form_validation->set_rules('phone', 'Phone' );//, 'required'
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//email_check///
            $this->form_validation->set_rules('nric', 'Nric', 'required|callback_nric_check');///
            //$this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('size', 'Size','required' );//
            // $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('tiket', 'Tiket', 'required' );//
            $this->form_validation->set_rules('kaunter', 'Kaunter' , 'required');//
            // $this->form_validation->set_rules('state', 'State', 'required');
            // $this->form_validation->set_rules('country', 'Country', 'required');
            // $this->form_validation->set_rules('company', 'Company', 'required');
            // $this->form_validation->set_rules('industry', 'Industry', 'required');
            // $this->form_validation->set_rules('status', 'Status', 'required');
            // $this->form_validation->set_rules('working', 'Working', 'required');
            // $this->form_validation->set_rules('hope', 'Hope', 'required');
            // $this->form_validation->set_rules('funnel', 'Funnel', 'required');
            // $this->form_validation->set_rules('interest', 'Interest', 'required');
            // $this->form_validation->set_rules('experience', 'Experience', 'required');
            // $this->form_validation->set_rules('investment', 'Investment', 'required');
            $this->form_validation->set_rules('income', 'income' , 'required');//

            $no_siri = $this->input->post('no_siri');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $nric = $this->input->post('nric');
            $size = $this->input->post('size');
            //$gender = $this->input->post('gender');
            $tiket = $this->input->post('tiket');
            $kaunter = $this->input->post('kaunter');
            //$state = $this->input->post('state');
            //$country = $this->input->post('country');
            //$company = $this->input->post('company');
            //$industry = $this->input->post('industry');
            // $status = $this->input->post('status');
            // $working = $this->input->post('working');
            //$hope = $this->input->post('hope');
            // $funnel = $this->input->post('funnel');
            //$interest = $this->input->post('interest');
            //$experience = $this->input->post('experience');
            //$investment = $this->input->post('investment');
            $income = $this->input->post('income');

            //////qrcode generate
            $this->load->library('ciqrcode'); //pemanggilan library QR CODE
            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = '../assets3/'; //string, the default is application/cache/
            $config['errorlog']     = '../assets3/'; //string, the default is application/logs/
            $config['imagedir']     = '../assets3/images/qrcode/smf/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);
            $image_name=$nric.'.png'; //buat name dari qr code sesuai dengan nim
            $params['data'] = $no_siri; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 25;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

            
            // Prepare member data
            $memData = array(
                // 'no_siri' => $this->input->post('no_siri'),
                // 'name' => $this->input->post('name'),
                // 'phone' => $this->input->post('phone'),
                // 'email' => $this->input->post('email'),
                // 'nric' => $this->input->post('nric'),
                // 'size' => $this->input->post('size'),
                // // 'gender' => $this->input->post('gender'),
                // 'tiket' => $this->input->post('tiket'),
                // 'kaunter' => $this->input->post('kaunter'),
                // // 'state' => $this->input->post('state'),
                // // 'country' => $this->input->post('country'),
                // // 'company' => $this->input->post('company'),
                // // 'industry' => $this->input->post('industry'),
                // // 'status' => $this->input->post('status'),
                // // 'working' => $this->input->post('working'),
                // // 'hope' => $this->input->post('hope'),
                // // 'funnel' => $this->input->post('funnel'),
                // // 'interest' => $this->input->post('interest'),
                // // 'experience' => $this->input->post('experience'),
                // // 'investment' => $this->input->post('investment'),
                // 'income' => $this->input->post('income'),
                'no_siri' => $no_siri,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'nric' => $nric,
                'size' => $size,
                'tiket' => $tiket,
                'kaunter' => $kaunter,
                'income' => $income,
                'qrcode' => $image_name,
            );
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Insert member data
                $insert = $this->updatedatasmf->insert($memData);

                if($insert){
                    $this->session->set_userdata('success_msg', 'Member has been added successfully.');
                    redirect('smfimport');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        
       $data['updatedatasmf'] = $memData;
        
        
        // Load the edit page view
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('crudsystem/smfaddcust/dashboardadd');
        $this->load->view('crudsystem/smfaddcust/addcust',$data);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }

    ///////////////////////delete///////////
    public function delete($id){
        // Check whether updatedatarcm id is not empty
        if($id){
            // Delete updatedatarcm
            $delete = $this->updatedatasmf->delete($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Member has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        
        // Redirect to the list page
        redirect('smfimport');
    }

//////////////////////////////checking same data/////////////
    public function nric_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('nric'=>$str);
        $checkNric = $this->updatedatasmf->getRows2($con);
        if($checkNric > 0){
            $this->form_validation->set_message('nric_check', 'The given NRIC already exists.');
            return false;
        }
        else{
            return true;
        }
    }

    public function no_siri_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('no_siri'=>$str);
        $checkNo_siri = $this->updatedatasmf->getRows2($con);
        if($checkNo_siri > 0){
            $this->form_validation->set_message('no_siri_check', 'The given NO SIRI already exists.');
            return false;
        }
        else{
            return true;
        }
    }

}