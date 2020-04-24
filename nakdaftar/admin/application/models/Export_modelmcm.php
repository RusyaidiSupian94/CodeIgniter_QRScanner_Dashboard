<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_modelmcm extends CI_Model {
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() {
            $this->db->select(array('no_siri', 'nric', 'name', 'phone', 'email', 'kehadiran'));
            $this->db->from('mcm');
            $query = $this->db->get();
            return $query->result();
        }
    }