<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_modelsmf extends CI_Model {
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() {
            $this->db->select(array('no_siri', 'nric', 'name', 'phone', 'email', 'size', 'gender', 'tiket', 'kaunter', 'state', 'postcode', 'country', 'company', 'industry', 'status','working','hope','funnel','interest', 'experience','investment','kehadiran','income'));
            $this->db->from('smf');
            $query = $this->db->get();
            return $query->result();
        }
    }