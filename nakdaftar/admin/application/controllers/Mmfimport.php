<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mmfimport extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load member model
        $this->load->model('mmfmodelimport');
        
        // Load form validation library
        $this->load->library('form_validation');
        
        // Load file helper
        $this->load->helper('file');
        $this->load->library('session');
    }
    
    public function index(){///to show dataset or datatable
        $data = array();
        
        // Get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        
        // Get rows
        $data['mmf'] = $this->mmfmodelimport->getRows();///dalam data tu table database
        
        // Load the list page view

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->account();
        $this->load->view('importdata/mastery/mmf/mmfdropdashboard');
        $this->load->view('importdata/mastery/mmf/mmfdropexcel',$data);
        //$this->load->view('dropfile/test-table');
        $this->load->view('footer');
        $this->load->view('jsfooter');

        // $this->load->view('dropfile/dropexcel2', $data);
    }

    
    public function import(){/////import the data
        $data = array();
        $memData = array();
        
        // If import request is submitted
        if($this->input->post('importSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('file', 'CSV file', 'callback_file_check');
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                $insertCount = $updateCount = $rowCount = $notAddCount = 0;
                
                // If file uploaded
                if(is_uploaded_file($_FILES['file']['tmp_name'])){
                    // Load CSV reader library
                    $this->load->library('CSVReader');//Csvimport   CSVReader
                    
                    // Parse data from CSV file
                    $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);
                    
                    // Insert/update CSV data into database
                    if(!empty($csvData)){
                        foreach($csvData as $row){ $rowCount++;

                            ///////////this for generate qrcode from import file////////

                            $this->load->library('ciqrcode'); //pemanggilan library QR CODE
                            $config['cacheable']    = true; //boolean, the default is true
                            $config['cachedir']     = '../assets3/'; //string, the default is application/cache/
                            $config['errorlog']     = '../assets3/'; //string, the default is application/logs/
                            $config['imagedir']     = '../assets3/images/qrcode/mmf/'; //direktori penyimpanan qr code
                            $config['quality']      = true; //boolean, the default is true
                            $config['size']         = '1024'; //interger, the default is 1024
                            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
                            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
                            $this->ciqrcode->initialize($config);
                            $image_name=$row['Nric'].'.png'; //buat name dari qr code sesuai dengan nim
                            $params['data'] = $row['No Siri']; //data yang akan di jadikan QR CODE
                            $params['level'] = 'H'; //H=High
                            $params['size'] = 25;
                            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
                            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
                            
                            // Prepare data for DB insertion
                            $memData = array(
                                'no_siri' => $row['No Siri'],
                                'nric' => $row['Nric'],
                                'name' => $row['Name'],
                                'phone' => $row['Phone'],
                                'email' => $row['Email'],
                                'size' => $row['Size'],
                                //'gender' => $row['Gender'],
                                'tiket' => $row['Tiket'],
                                // 'kaunter' => $row['Kaunter'],
                                // 'state' => $row['State'],
                                // 'country' => $row['Country'],
                                // 'company' => $row['Company'],
                                // 'industry' => $row['Industry'],
                                // 'status' => $row['Status'],
                                // 'working' => $row['Working'],
                                // 'hope' => $row['Hope'],
                                // 'funnel' => $row['Funnel'],
                                // 'interest' => $row['Interest'],
                                // 'experience' => $row['Experience'],
                                // 'investment' => $row['Investment'],
                                // 'income' => $row['Income'],
                                ///////////////////this is column that store in database only file name.. "nric.png"
                                'qrcode' => $image_name,

                            );
                            
                            // Check whether email already exists in the database
                            $con = array(
                                'where' => array(
                                    // 'no_siri' => $row['No Siri'],
                                    // 'nric' => $row['Nric'],
                                    'no_siri' => $row['No Siri'],
                                    // 'phone' => $row['Phone'],
                                    // 'email' => $row['Email'],
                                    // 'size' => $row['Size'],
                                    // 'gender' => $row['Gender'],
                                    // 'tiket' => $row['Tiket'],
                                    // 'kaunter' => $row['Kaunter'],
                                    // 'state' => $row['State'],
                                    // 'country' => $row['Country'],
                                    // 'company' => $row['Company'],
                                    // 'industry' => $row['Industry'],
                                    // 'status' => $row['Status'],
                                    // 'working' => $row['Working'],
                                    // 'hope' => $row['Hope'],
                                    // 'funnel' => $row['Funnel'],
                                    // 'interest' => $row['Interest'],
                                    // 'experience' => $row['Experience'],
                                    // 'investment' => $row['Investment'],
                                    // 'income' => $row['Income'],
                                ),
                                'returnType' => 'count'
                            );
                            $prevCount = $this->mmfmodelimport->getRows($con);///call the funtion at csvcodexmodel
                            
                            if($prevCount > 0){
                                // Update member data
                                $condition = array(
                                    'no_siri' => $row['No Siri'],
                            //         'nric' => $row['Nric'],
                            //         // 'name' => $row['Name'],
                            //         // 'phone' => $row['Phone'],
                            //         // 'email' => $row['Email'],
                            //         // 'size' => $row['Size'],
                            //         // 'gender' => $row['Gender'],
                            //         // 'tiket' => $row['Tiket'],
                            //         // 'kaunter' => $row['Kaunter'],
                            //         // 'state' => $row['State'],
                            //         // 'country' => $row['Country'],
                            //         // 'company' => $row['Company'],
                            //         // 'industry' => $row['Industry'],
                            //         // 'status' => $row['Status'],
                            //         // 'working' => $row['Working'],
                            //         // 'hope' => $row['Hope'],
                            //         // 'funnel' => $row['Funnel'],
                            //         // 'interest' => $row['Interest'],
                            //         // 'experience' => $row['Experience'],
                            //         // 'investment' => $row['Investment'],
                            //         // 'income' => $row['Income'],
                                );
                                $update = $this->mmfmodelimport->update($memData, $condition);
                                
                                if($update){
                                    $updateCount++;
                                }
                            }else{
                                // Insert member data
                                $insert = $this->mmfmodelimport->insert($memData);
                                
                                if($insert){
                                    $insertCount++;
                                }
                            }
                        }
                        
                        // Status message with imported data count
                        $notAddCount = ($rowCount - ($insertCount + $updateCount));
                        $successMsg = 'Members imported successfully. Total Rows ('.$rowCount.') | Inserted ('.$insertCount.') | Updated ('.$updateCount.') | Not Inserted ('.$notAddCount.')';
                        $this->session->set_userdata('success_msg', $successMsg);
                    }
                }else{
                    $this->session->set_userdata('error_msg', 'Error on file upload, please try again.');
                }
            }else{
                $this->session->set_userdata('error_msg', 'Invalid file, please select only CSV file.');
            }
        }
        redirect('mmfimport');
    }
    
    /*
     * Callback function to check file value and type during validation
     */
    public function file_check($str){

        $allowed_mime_types = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
            $mime = get_mime_by_extension($_FILES['file']['name']);
            $fileAr = explode('.', $_FILES['file']['name']);
            $ext = end($fileAr);
            if(($ext == 'csv') && in_array($mime, $allowed_mime_types)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only CSV file to upload.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please select a CSV file to upload.');
            return false;
        }
    }

    /////this for update the data in table
}