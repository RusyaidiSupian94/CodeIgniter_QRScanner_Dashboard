<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updatedarcm extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load member model
        //$this->load->model('csvcodexmodel');
        $this->load->model('updatedatarcm');
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
            $data['updatedatarcm'] = $this->updatedatarcm->getRows(array('id' => $id));;///in the data bracket there are model there
            //$data['title']  = 'Member Details';
            
            // Load the details page view
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->account();
            //$this->load->view('dropfile/dropdashboard');
            $this->load->view('crudsystem/rcmaddcust/view', $data);
            $this->load->view('footer');
            $this->load->view('jsfooter');
            //$this->load->view('templates/header', $data);
           
            
        }else{
            redirect('rcmimport');
        }
    }



    ////////////////////////////////////////////////////////////////////////update//////////////////////////


    public function edit($id){
        $data = array();
        
        // Get member data
        $memData = $this->updatedatarcm->getRows(array('id' => $id));
        
        // If update request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            //$this->form_validation->set_rules('no_siri', 'No Siri', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//email_check
            $this->form_validation->set_rules('nric', 'Nric', 'required');
            //$this->form_validation->set_rules('size', 'Size', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            //$this->form_validation->set_rules('tiket', 'Tiket', 'required');
            //$this->form_validation->set_rules('kaunter', 'Kaunter', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            //$this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('industry', 'Industry', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('working', 'Working', 'required');
            //$this->form_validation->set_rules('hope', 'Hope', 'required');
            $this->form_validation->set_rules('funnel', 'Funnel', 'required');
            $this->form_validation->set_rules('interest', 'Interest', 'required');
            //$this->form_validation->set_rules('experience', 'Experience', 'required');
            //$this->form_validation->set_rules('investment', 'Investment', 'required');
            $this->form_validation->set_rules('income', 'income', 'required');
            /////everything that state in the update must be update otherwise the code will bee error

            
            // Prepare member data
            $memData = array(
                //'no_siri' => $this->input->post('no_siri'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'nric' => $this->input->post('nric'),
                //'size' => $this->input->post('size'),
                'gender' => $this->input->post('gender'),
                //'tiket' => $this->input->post('tiket'),
                //'kaunter' => $this->input->post('kaunter'),
                'state' => $this->input->post('state'),
                //'country' => $this->input->post('country'),
                'company' => $this->input->post('company'),
                'industry' => $this->input->post('industry'),
                'status' => $this->input->post('status'),
                'working' => $this->input->post('working'),
                //'hope' => $this->input->post('hope'),
                'funnel' => $this->input->post('funnel'),
                'interest' => $this->input->post('interest'),
                //'experience' => $this->input->post('experience'),
                //'investment' => $this->input->post('investment'),
                'income' => $this->input->post('income'),
            );
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Update member data
                $update = $this->updatedatarcm->update($memData, $id);

                if($update){
                    $this->session->set_userdata('success_msg', 'Member has been updated successfully.');
                    redirect('rcmimport');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }

        $data['updatedatarcm'] = $memData;
        
        
        // Load the edit page view
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('crudsystem/rcmaddcust/dashboardupdate');
        $this->load->view('crudsystem/rcmaddcust/add-edit',$data);
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
            $this->form_validation->set_rules('no_siri', 'No Siri', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//email_check
            $this->form_validation->set_rules('nric', 'Nric', 'required|callback_nric_check');//
            //$this->form_validation->set_rules('status', 'Status', 'required');
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
            $this->form_validation->set_rules('income', 'income', 'required');
            
            // Prepare member data
            $memData = array(
                'no_siri' => $this->input->post('no_siri'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'nric' => $this->input->post('nric'),
                // 'size' => $this->input->post('size'),
                // 'gender' => $this->input->post('gender'),
                // 'tiket' => $this->input->post('tiket'),
                // 'kaunter' => $this->input->post('kaunter'),
                // 'state' => $this->input->post('state'),
                // 'country' => $this->input->post('country'),
                // 'company' => $this->input->post('company'),
                // 'industry' => $this->input->post('industry'),
                // 'status' => $this->input->post('status'),
                // 'working' => $this->input->post('working'),
                // 'hope' => $this->input->post('hope'),
                // 'funnel' => $this->input->post('funnel'),
                // 'interest' => $this->input->post('interest'),
                // 'experience' => $this->input->post('experience'),
                // 'investment' => $this->input->post('investment'),
                'income' => $this->input->post('income'),
            );
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Insert member data
                $insert = $this->updatedatarcm->insert($memData);

                if($insert){
                    $this->session->set_userdata('success_msg', 'Member has been added successfully.');
                    redirect('rcmimport');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        
       $data['updatedatarcm'] = $memData;
        
        
        // Load the edit page view
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('crudsystem/rcmaddcust/dashboardadd');
        $this->load->view('crudsystem/rcmaddcust/addcust',$data);
        $this->load->view('footer');
        $this->load->view('jsfooter');
    }


///////////////////////delete///////////
    public function delete($id){
        // Check whether updatedatarcm id is not empty
        if($id){
            // Delete updatedatarcm
            $delete = $this->updatedatarcm->delete($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Member has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        
        // Redirect to the list page
        redirect('rcmimport');
    }

//////////////////////////////checking same data/////////////
    public function nric_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('nric'=>$str);
        $checkNric = $this->updatedatarcm->getRows2($con);
        if($checkNric > 0){
            $this->form_validation->set_message('nric_check', 'The given NRIC already exists.');
            return false;
        }
        else{
            return true;
        }
    }

}