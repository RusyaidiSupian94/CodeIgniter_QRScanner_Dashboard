<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_modelmmd extends CI_Model {
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() {
            $this->db->select(array('no_siri', 'nric', 'name', 'phone', 'email', 'size', 'tiket','kehadiran'));
            $this->db->from('mmd');
            $query = $this->db->get();
            return $query->result();
        }
    }